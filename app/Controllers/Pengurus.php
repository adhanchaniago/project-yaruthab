<?php

namespace App\Controllers;

use App\Models\PengurusModel;
use App\Models\JabatanModel;

class Pengurus extends BaseController
{
    public function __construct()
    {
        $this->model = new PengurusModel();
        $this->jabatan = new JabatanModel();
    }
    public function index()
    {
        $path = $this->db->table('user_sub_menu')
            ->select('path')->getWhere(['title' => 'Pengurus'])->getRowArray();
        $data = [
            'title' => 'Pengurus',
            'path' => $path['path'],
            'pengurus' => $this->getDataPengurus(),
            'jabatan' => $this->jabatan->findColumn('jabatan'),
        ];

        return view('/backend/pengurus/index', $data);
    }

    public function getDataById($id = null)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $pengurus = $this->db->table('pengurus')
            ->select('jabatan_pengurus.jabatan as jabatan, pengurus.*')
            ->join('jabatan_pengurus', 'jabatan_pengurus.id = pengurus.id_jabatan')
            ->getWhere(['pengurus.id' => $id])
            ->getRowArray();
        echo json_encode($pengurus);
    }

    public function getDataPengurus($id = null)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        if (!$id) {
            $pengurus = $this->db->table('pengurus')
                ->select('jabatan_pengurus.jabatan as jabatan, pengurus.*')
                ->join('jabatan_pengurus', 'jabatan_pengurus.id = pengurus.id_jabatan')
                ->get()
                ->getResultArray();
        } else {
            $pengurus = $this->db->table('pengurus')
                ->select('jabatan_pengurus.jabatan as jabatan, pengurus.*')
                ->join('jabatan_pengurus', 'jabatan_pengurus.id = pengurus.id_jabatan')
                ->getWhere(['pengurus.id' => $id])
                ->getRowArray();
        }
        return $pengurus;
    }

    private function convertJabatanToJabatanId()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $jabatan = $this->request->getVar('jabatan');
        $id = $this->jabatan->where('jabatan', $jabatan)->findColumn('id');
        return $id[0];
    }

    public function edit($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Edit Pengurus',
            'pengurus' => $this->getDataPengurus($id),
            'jabatan' => $this->jabatan->findColumn('jabatan'),
            'path' => 'Data Pengurus / Edit'
        ];
        return view('backend/pengurus/edit', $data);
    }

    public function editData($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'alamat' => trim($this->request->getVar('alamat')),
            'no_hp' =>  $this->request->getVar('no'),
            'img' => $this->uploadGambar($id),
            'id_jabatan' => $this->convertJabatanToJabatanId(),
            'email' => $this->request->getVar('email'),
            'facebook' => $this->request->getVar('fb'),
            'twitter' => $this->request->getVar('tw'),
            'instagram' => $this->request->getVar('ig')
        ];

        // hapus gambar dalam folder assets jika user upload gambar profile baru
        $file = $this->request->getFile('gambar');
        $img = $this->model->where('id', $id)->findColumn('img');
        if ($file->getName() != "") {
            if (file_exists(FCPATH . '/assets/img/uploads/profile/' . $img[0])) {
                $this->hapusGambar($id);
            }
        }

        $this->model->update($id, $data);
        $this->session->setFlashdata('success', 'Data berhasil di update');
        return redirect()->to('/pengurus');
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
            'no_hp' => $no_hp,
            'img' => $this->uploadGambar(),
            'id_jabatan' => $this->convertJabatanToJabatanId(),
            'email' => $this->request->getVar('email'),
            'facebook' => $this->request->getVar('fb'),
            'twitter' => $this->request->getVar('tw'),
            'instagram' => $this->request->getVar('ig')
        ];

        $this->model->insert($data);

        // TAMPILKAN FLASH DATA
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/pengurus');
    }

    public function hapusData($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $this->hapusGambar($id);
        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/pengurus');
    }

    #################################################### GAMBAR #################################################### 
    public function uploadGambar($id = null)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $file = $this->request->getFile('gambar');
        $img = $this->model->where('id', $id)->findColumn('img');
        if ($file->isValid()) {
            // die;
            if ($file->getName() != "profile.png") {
                $namaFile = $file->getRandomName();
                $file->move('./assets/img/uploads/profile', $namaFile);
                $this->thumbnail($namaFile);
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
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $img = $this->model->where('id', $id)->findColumn('img');
        if ($img[0] != "profile.png") {
            unlink(FCPATH . '/assets/img/uploads/profile/' . $img[0]);
            if (file_exists(FCPATH . '/assets/img/low/low_' . $img[0])) {
                unlink(FCPATH . '/assets/img/low/low_' . $img[0]);
            }
            if (file_exists(FCPATH . '/assets/img/thumbnail/thumb_' . $img[0])) {
                unlink(FCPATH . '/assets/img/thumbnail/thumb_' . $img[0]);
            }
        }
    }

    public function thumbnail($file)
    {
        $this->image->withFile('./assets/img/uploads/profile/' . $file)
            ->fit(750, 750, 'center')
            ->save('./assets/img/thumbnail/thumb_' . $file);
    }
    //--------------------------------------------------------------------

}
