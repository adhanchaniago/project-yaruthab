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

    ####################################################### CRUD DATA ####################################################### 
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

        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/donatur');
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
