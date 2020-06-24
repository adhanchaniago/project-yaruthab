<?php

namespace App\Controllers;

use App\Models\RumahTahfidModel;

class RumahTahfidz extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new RumahTahfidModel();
        helper(['form', 'url']);
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => 'Data rumah tahfidz',
            'rumahtahfid' => $this->model->findAll()
        ];
        echo view('/backend/rumahTahfid', $data);
    }

    public function getDataById($id)
    {
        echo json_encode($this->model->find($id));
    }

    public function tambahData()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'pembina' => $this->request->getVar('pembina'),
            'alamat' => $this->request->getVar('alamat')
        ];

        if ($this->request->getMethod() == 'post') {
            $this->model->tambahData($data);
            $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        }

        return redirect()->to('/rumahtahfid');
    }

    public function editData($id)
    {

        $data = [
            'nama' => $this->request->getVar('nama'),
            'pembina' => $this->request->getVar('pembina'),
            'alamat' => $this->request->getVar('alamat')
        ];

        if ($this->request->getMethod() == 'post') {
            $this->model->update($id, $data);
            $this->session->setFlashdata('success', 'Data berhasil di update');
        }

        return redirect()->to('/rumahtahfid');
    }

    public function hapusData($id)
    {
        $this->model->hapusData($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/rumahtahfid');
    }
}
