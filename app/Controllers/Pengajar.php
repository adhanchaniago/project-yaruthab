<?php

namespace App\Controllers;

use App\Models\PengajarModel;
use App\Models\MengajarModel;
use App\Models\RumahTahfidModel;

class Pengajar extends BaseController
{
    public function __construct()
    {
        $this->model = new PengajarModel();
        $this->mengajar = new MengajarModel();
        $this->rt = new RumahTahfidModel();
        $this->session = session();
    }

    public function index()
    {
        $path = $this->db->table('user_sub_menu')
            ->select('path')->getWhere(['title' => 'Data Pengajar'])->getRowArray();
        $data = [
            'title' => 'Data pengajar',
            'pengajar' => $this->model->findAll(),
            'rt' => $this->rt->findColumn('nama'),
            'path' => $path['path']
        ];
        return view('/backend/pengajar/pengajar', $data);
    }

    public function getDataById($id)
    {
        $d = $this->model->find($id);
        $d['mengajar'] = $this->getNamaRtById($id);
        echo json_encode($d);
    }

    public function getNamaRtById($id)
    {
        $arr = $this->getNamaRT($id);
        for ($i = 0; $i < count($arr); $i++) {
            $arr2[$i] = $arr[$i]['nama'];
        }
        $tMengajar = implode(", ", $arr2);
        return $tMengajar;
    }

    public function getNamaRT($id)
    {
        $data = $this->db->table('rumah_tahfid')
            ->select('rumah_tahfid.nama as nama')
            ->join('mengajar', 'rumah_tahfid.id = mengajar.id_rt')->getWhere(['mengajar.id_pengajar' => $id])->getResultArray();
        return $data;
    }

    public function getNamaRtLain($id)
    {
        $data = $this->db->query("SELECT `a`.`id`,`a`.`nama`
        FROM `rumah_tahfid` `a`
        WHERE `a`.`id` NOT IN (SELECT `id_rt` FROM `mengajar` WHERE `id_pengajar` = $id)")->getResultArray();
        return $data;
    }

    public function hapusData($id)
    {
        $this->mengajar->where('id_pengajar', $id)->delete();
        $this->hapusGambar($id);
        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/pengajar');
    }

    public function tambahData()
    {
        // CONVERT NOMOR HP KE 62
        $no_hp =  $this->request->getVar('no');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'alamat' => trim($this->request->getVar('alamat')),
            'no_hp' => $no_hp,
            'img' => $this->uploadGambar()
        ];
        $this->model->insert($data);

        // tambahkan data ke tabel mengajar
        $this->tambahDataMengajar();
        // TAMPILKAN FLASH DATA
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/pengajar');
    }


    public function tambahDataMengajar()
    {
        // AMBIL SEMUA DATA NAMA PENGAJAR
        $pengajar = $this->model->findColumn('nama');
        // AMBIL DATA JUMLAH PENGAJAR, INDEX ARRAY
        $last = count($pengajar) - 1;
        // AMBIL ROW DARI DATA INPUTAN TERAKHIR PADA TABLE PENGAJAR
        $id_pengajar = $this->model->where('nama', $pengajar[$last])->first();

        // AMBIL NAMA TEMPAT RUMAH TAHFIDZ DARI INPUTAN
        $rt = $this->request->getVar('tempat');

        // LOOP UNTUK MENYIMPAN DATA ID PENGAJAR DAN ID RUMAH TAHFIDZ PADA TABEL MENGAJAR 
        // SEBANYAK DATA TEMPAT MENGAJAR YANG DIINPUT USER 
        for ($i = 0; $i < count($rt); $i++) {
            # CONVERT NAMA RT MENJADI ID RT
            $id_rt = $this->rt->where('nama', $rt[$i])
                ->first();
            // SIMPAN ID RUMAH TAHFIDZ DAN ID PENGAJAR DALAM ARRAY 
            $dataMengajar = [
                'id_pengajar' => $id_pengajar['id'],
                'id_rt' => $id_rt['id']
            ];
            // INSERT DATA DALAM ARRAY KE TABEL MENGAJAR
            $this->mengajar->insert($dataMengajar);
        }
    }

    // MENAMPILKAN VIEW EDIT
    public function edit($id)
    {
        $path = $this->db->table('user_sub_menu')
            ->select('path')->getWhere(['title' => 'Data Pengajar'])->getRowArray();
        $data = [
            'title' => "Edit",
            'pengajar' => $this->model->where('id', $id)->first(),
            'rt_lain' => $this->getNamaRtLain($id),
            'nama_rt' => $this->getNamaRT($id),
            'path' => $path['path'] . ' / Edit'
        ];
        return view('backend/pengajar/edit', $data);
    }

    public function updateData($id)
    {
        $img = $this->model->where('id', $id)->findColumn('img');

        $data = [
            'nama' => $this->request->getVar('nama'),
            'alamat' => trim($this->request->getVar('alamat')),
            'img' => $this->uploadGambar($id),
            'no_hp' => $this->request->getVar('no'),
        ];

        // hapus gambar dalam folder assets jika user upload gambar profile baru
        $file = $this->request->getFile('gambar');
        if ($file->getName() != "") {
            if (file_exists(FCPATH . '/assets/img/uploads/profile/' . $img[0])) {
                $this->hapusGambar($id);
            }
        }

        $this->model->update($id, $data);
        $this->updateDataMengajar($id);

        $this->session->setFlashdata('success', 'Data berhasil di update');
        return redirect()->to('/pengajar');
    }

    public function updateDataMengajar($id)
    {
        $rt =  $this->request->getVar('tempat');
        $dataMengajar = $this->mengajar->where('id_pengajar', $id)->findColumn('id_rt');
        // jika id pengajar tidak ada dalam tabel mengajar, insert data sebanyak inputan 
        if (!$dataMengajar) {
            for ($i = 0; $i < count($rt); $i++) {
                # CONVERT NAMA RT MENJADI ID RT
                $id_rt = $this->rt->where('nama', $rt[$i])
                    ->first();

                $data1 = [
                    'id_rt' => $id_rt['id'],
                    'id_pengajar' => $id
                ];
                $this->mengajar->insert($data1);
            }
        } else {
            // ambil id inputan simpan dalam array
            if (!$rt) {
                $this->mengajar->where('id_pengajar', $id)->delete();
            } else {
                for ($j = 0; $j < count($rt); $j++) {
                    $idrt = $this->rt->where('nama', $rt[$j])
                        ->first();
                    $idi[] = $idrt['id'];
                }
                // bermain dengan data
                for ($j = 0; $j < count($rt); $j++) {
                    // id inputan
                    $id_rt = $this->rt->where('nama', $rt[$j])
                        ->first();

                    $data1 = [
                        'id_rt' => $id_rt['id'],
                        'id_pengajar' => $id
                    ];

                    // jika data inputan tidak ada dalam tabel, insert data
                    if (!in_array($id_rt['id'], $dataMengajar)) {
                        $this->mengajar->insert($data1);
                    }
                }

                for ($i = 0; $i < count($dataMengajar); $i++) {
                    if (!in_array($dataMengajar[$i], $idi)) {
                        $x = $dataMengajar[$i];
                        $this->db->query("DELETE FROM `mengajar` WHERE `id_rt` = $x AND `id_pengajar` = $id");
                    }
                }
            }
        }
    }

    public function uploadGambar($id = null)
    {
        $file = $this->request->getFile('gambar');
        $img = $this->model->where('id', $id)->findColumn('img');
        if ($file->isValid()) {
            if ($file->getName() != "profile.png") {
                $namaFile = $file->getRandomName();
                $file->move('./assets/img/uploads/profile', $namaFile);
            } else {
                $namaFile = "profile.png";
            }
        } else {
            if ($img) {
                $namaFile = $img[0];
            } else {
                $namaFile = "profile.png";
            }
        }
        return $namaFile;
    }

    public function hapusGambar($id)
    {
        $img = $this->model->where('id', $id)->findColumn('img');
        if ($img[0] != "profile.png") {
            unlink(FCPATH . '/assets/img/uploads/profile/' . $img[0]);
        }
    }


    //--------------------------------------------------------------------

}
