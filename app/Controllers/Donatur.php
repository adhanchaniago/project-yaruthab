<?php

namespace App\Controllers;

use App\Models\DonaturModel;

class Donatur extends BaseController
{
    public function __construct()
    {
        $this->model = new DonaturModel();
    }

    ####################################################### DONATUR SECTION ####################################################### 

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Data Donatur',
            'path' => 'Data Donatur',
            'donatur' => $this->model->findAll(),
        ];
        return view('backend/donatur/index', $data);
    }

    public function tambahData()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $no_hp =  $this->request->getVar('no');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'alamat' => trim($this->request->getVar('alamat')),
            'email' => $this->request->getVar('email'),
            'no_hp' => $no_hp,
            'is_confirm' => 0
        ];
        $this->model->insert($data);

        // TAMPILKAN FLASH DATA
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/donatur');
    }

    public function tambahDataByAdmin()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $no_hp =  $this->request->getVar('no_hp');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'alamat' => trim($this->request->getVar('alamat')),
            'email' => $this->request->getVar('email'),
            'no_hp' => $no_hp,
            'is_confirm' => 1,
        ];

        $this->model->insert($data);

        // TAMPILKAN FLASH DATA
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/donatur');
    }

    public function hapusData($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        if ($this->db->table('donasi')->delete(['id_donatur' => $id])) {
            $this->db->table('donasi')->delete(['id_donatur' => $id]);
        }

        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/donatur');
    }

    ############################## DONASI SECTION ############################## 

    public function donasi()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $donasi = $this->db->query('SELECT `donatur`.*, `donasi_uang`.`nominal` as `nominal`,  
                    `donasi`.`id` as `id_donasi`,
                    `donasi`.`is_confirm` as `konfirmasi_donasi`,
                    `donasi`.`created_at` as `tgl`,
                    `donasi_barang`.`barang` as `barang`, 
                    `donasi_barang`.`jumlah` as `jumlah`
                    FROM `donasi` 
                    JOIN `donatur` ON `donatur`.`id` = `donasi`.`id_donatur`
                    LEFT JOIN `donasi_uang` ON `donasi_uang`.`id` = `donasi`.`id_uang`
                    LEFT JOIN `donasi_barang` ON `donasi_barang`.`id` = `donasi`.`id_barang`
                ')->getResultArray();
        // dd($donasi);
        $data = [
            'title' => 'Detail Donasi',
            'path' => 'Donasi / Detail',
            'donasi' => $donasi
        ];

        return view('backend/donatur/detail', $data);
    }

    public function tambahDonasi()
    {

        $no_hp =  $this->request->getVar('no_hp');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }
        ######################## insert to table donatur ########################

        if ($this->cek_data($this->request->getVar('nama'), $no_hp) == false) {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'alamat' => trim($this->request->getVar('alamat')),
                'email' => $this->request->getVar('email'),
                'no_hp' => $no_hp,
                'is_confirm' => $this->request->getVar('konfirmasi'),
            ];
            $this->session->set($data);
            $this->model->insert($data);
        }

        ######################## insert to table donasi_uang ########################

        $dataNominal = [
            'nominal' => $this->request->getVar('nominal'),
        ];
        $this->db->table('donasi_uang')->insert($dataNominal);

        ######################## insert to table donasi ########################

        $idDonatur = $this->db->table('donatur')
            ->getWhere(['nama' => $this->request->getVar('nama'), 'no_hp' => $no_hp])
            ->getRowArray();
        $idNominal = $this->db->table('donasi_uang')->selectMax('id')->get()->getRowArray();
        $dataDonasi = [
            'id_donatur' => $idDonatur['id'],
            'id_uang' => $idNominal['id'],
            'is_confirm' => $this->request->getVar('konfirmasi'),
            'created_at' => date('Y-m-d')
        ];
        $this->db->table('donasi')->insert($dataDonasi);

        ######################## insert to table keuangan ########################
        $dataKeuangan = [
            'income' => $this->request->getVar('nominal'),
            'outcome' => 0,
            'sumber' => 'Donasi',
            'keterangan' => 'Donasi Sdr/i ' . $this->request->getVar('nama'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->table('keuangan')->insert($dataKeuangan);

        $total = [
            'total' => $this->updateTotalSaldo()
        ];
        $id = $this->db->table('keuangan')->selectMax('id')->get()->getRow();
        $this->db->table('keuangan')->where('id', $id->id)->update($total);

        if ($this->request->getVar('konfirmasi') == 0) {
            return redirect()->to('/checkout');
        } else {
            $this->session->setFlashdata('success', 'Donasi uang berhasil ditambahkan');
            return redirect()->to('/donatur/detail');
        }
    }

    public function tambahDonasiBarang()
    {
        $no_hp =  $this->request->getVar('no_hp');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }
        if ($this->cek_data($this->request->getVar('nama'), $no_hp) == false) {
            # code...
            $data = [
                'nama' => $this->request->getVar('nama'),
                'alamat' => trim($this->request->getVar('alamat')),
                'email' => $this->request->getVar('email'),
                'no_hp' => $no_hp,
                'is_confirm' => $this->request->getVar('konfirmasi'),
            ];
            $this->session->set($data);
            $this->model->insert($data);
        }

        $dataBarang = [
            'barang' => $this->request->getVar('jenis'),
            'jumlah' => $this->request->getVar('jumlah')
        ];
        $this->db->table('donasi_barang')->insert($dataBarang);

        $idDonatur = $this->db->table('donatur')
            ->getWhere(['nama' => $this->request->getVar('nama'), 'no_hp' => $no_hp])
            ->getRowArray();
        $idNominal = $this->db->table('donasi_barang')->selectMax('id')->get()->getRowArray();
        $dataDonasi = [
            'id_donatur' => $idDonatur['id'],
            'id_barang' => $idNominal['id'],
            'is_confirm' => 1,
            'created_at' => date('Y-m-d')
        ];
        $this->db->table('donasi')->insert($dataDonasi);

        if ($this->request->getVar('konfirmasi') == 0) {
            return redirect()->to('/checkout');
        } else {
            $this->session->setFlashdata('success', 'Donasi barang berhasil ditambahkan');
            return redirect()->to('/donatur/detail');
        }
    }

    public function konfirmasi($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $konfirmasi = $this->db->table('donasi')->getWhere(['id' => $id])->getRowArray();
        if ($konfirmasi['is_confirm'] == 0) {
            $data = [
                'is_confirm' => 1
            ];
            $this->db->table('donatur')
                ->set($data)
                ->where('id', $konfirmasi['id_donatur'])
                ->update();
            $this->db->table('donasi')
                ->set($data)
                ->where('id', $id)
                ->update();
            $this->session->setFlashdata('success', 'Donasi berhasil di konfirmasi');
        }
        return redirect()->to('/donatur/detail');
    }

    public function hapusDonasi($id)
    {
        $this->db->table('donasi')->where('id', $id)->delete();
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/donatur/detail');
    }

    public function updateTotalSaldo()
    {
        $income = $this->db->table('keuangan')->selectSum('income')->get()->getRow();
        $outcome = $this->db->table('keuangan')->selectSum('outcome')->get()->getRow();

        $total = $income->income - $outcome->outcome;
        return $total;
    }

    ############################## cek data in field ############################## 

    public function cek_data($value, $value2)
    {
        $query = $this->db->table('donatur')->getWhere(['nama' => $value, 'no_hp' => $value2])->getRowArray();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
