<?php

namespace App\Controllers;

use App\Models\DonaturModel;

class Donatur extends BaseController
{
    public function __construct()
    {
        $this->model = new DonaturModel();
    }

    ####################################################### VIEW CONTROL ####################################################### 

    public function index()
    {
        $data = [
            'title' => 'Data Donatur',
            'path' => 'Data Donatur',
            'donatur' => $this->model->findAll(),
        ];
        return view('backend/donatur/index', $data);
    }

    ####################################################### CRUD DATA ####################################################### 
    public function tambahData()
    {
        $no_hp =  $this->request->getVar('no');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'alamat' => trim($this->request->getVar('alamat')),
            'email' => $this->request->getVar('email'),
            'no_hp' => $no_hp,
        ];
        $this->model->insert($data);

        // TAMPILKAN FLASH DATA
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/donatur');
    }

    public function hapusData($id)
    {
        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/donatur');
    }

    public function editData($id)
    {
        $this->session->setFlashdata('success', 'Data berhasil di update');
        return redirect()->to('/santri');
    }

    public function konfirmasi($id)
    {
        $konfirmasi = $this->model->where('id', $id)->findColumn('is_confirm');
        if ($konfirmasi[0] == 0) {
            $data = [
                'is_confirm' => 1
            ];
            $this->model->update($id, $data);
            $this->session->setFlashdata('success', 'Donatur berhasil di konfirmasi');
        } else {
            $data = [
                'is_confirm' => 0
            ];
            $this->model->update($id, $data);
            $this->session->setFlashdata('success', 'Donatur tidak terkonfirmasi');
        }
        return redirect()->to('/donatur');
    }
}
