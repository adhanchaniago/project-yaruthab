<?php

namespace App\Controllers;

use App\Models\TestimoniModel;

class Testimoni extends BaseController
{
    public function __construct()
    {
        $this->model = new TestimoniModel();
    }

    ####################################################### VIEW CONTROL ####################################################### 

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Testimoni',
            'path' => 'Teestimoni',
            'testimoni' => $this->model->findAll(),
        ];
        return view('backend/testimoni', $data);
    }

    ####################################################### CRUD DATA ####################################################### 
    public function tambahData()
    {

        $data = [
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'status' => htmlspecialchars($this->request->getVar('status')),
            'testimoni' => htmlspecialchars(trim($this->request->getVar('testimoni'))),
            'img' => $this->uploadGambar(),
            'is_confirm' => 0
        ];

        $this->model->insert($data);

        // TAMPILKAN FLASH DATA
        $this->session->setFlashdata('success', 'Terima kasih atas testimoni Anda tentang kami.');
        return redirect()->to('/');
    }

    public function hapusData($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $this->hapusGambar($id);
        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Testimoni berhasil di hapus');
        return redirect()->to('/testimoni');
    }

    public function hapusDataDb($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $this->hapusGambar($id);
        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Testimoni berhasil di hapus');
        return redirect()->to('/admin');
    }

    public function konfirmasi($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $konfirmasi = $this->model->where('id', $id)->findColumn('is_confirm');
        if ($konfirmasi[0] == 0) {
            $data = [
                'is_confirm' => 1
            ];
            $this->model->update($id, $data);
            $this->session->setFlashdata('success', 'Testimoni ditampilkan');
        } else {
            $data = [
                'is_confirm' => 0
            ];
            $this->model->update($id, $data);
            $this->session->setFlashdata('success', 'Testimoni tidak ditampilkan');
        }
        return redirect()->to('/testimoni');
    }

    public function konfirmasiDb($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $konfirmasi = $this->model->where('id', $id)->findColumn('is_confirm');
        if ($konfirmasi[0] == 0) {
            $data = [
                'is_confirm' => 1
            ];
            $this->model->update($id, $data);
            $this->session->setFlashdata('success', 'Testimoni ditampilkan');
        } else {
            $data = [
                'is_confirm' => 0
            ];
            $this->model->update($id, $data);
            $this->session->setFlashdata('success', 'Testimoni tidak ditampilkan');
        }
        return redirect()->to('/admin');
    }

    ############################################## GAMBAR ############################################## 
    public function uploadGambar($id = null)
    {

        $file = $this->request->getFile('gambar');
        $img = $this->model->where('id', $id)->findColumn('img');
        if ($file->isValid()) {
            if ($file->getName() != "profile.png") {
                $namaFile = $file->getRandomName();
                $file->move('./assets/img/uploads/profile/', $namaFile);
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
            if (file_exists(FCPATH . '/assets/img/uploads/testimoni/' . $img[0])) {
                unlink(FCPATH . '/assets/img/uploads/testimoni/' . $img[0]);
            }
        }
    }

    public function thumbnail($file)
    {
        $this->image->withFile('./assets/img/uploads/profile/' . $file)
            ->fit(250, 250, 'center')
            ->save('./assets/img/uploads/testimoni/' . $file);
    }
}
