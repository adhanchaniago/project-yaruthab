<?php

namespace App\Controllers;

use App\Models\RumahTahfidModel;
use App\Models\MengajarModel;

class RumahTahfidz extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new RumahTahfidModel();
        $this->mengajar = new MengajarModel();
        helper(['form', 'url']);
        $this->session = session();
    }

    public function index()
    {
        $path = $this->db->table('user_sub_menu')
            ->select('path')->getWhere(['title' => 'Data rumah tahfidz'])->getRowArray();
        $data = [
            'title' => 'Data rumah tahfidz',
            'rumahtahfid' => $this->model->findAll(),
            'path' => $path['path']
        ];
        echo view('/backend/rumahTahfid', $data);
    }

    public function getDataById($id)
    {
        echo json_encode($this->model->find($id));
    }

    public function tambahData()
    {
        $no_hp =  $this->request->getVar('no');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'pembina' => $this->request->getVar('pembina'),
            'no_telp' => $no_hp,
            'alamat' => $this->request->getVar('alamat'),

        ];

        $validation = [
            'nama' => [
                'rules' => 'trim|required|is_unique[rumah_tahfid.nama]'
            ]
        ];

        $data1 = [
            'title' => 'Data rumah tahfidz',
            'rumahtahfid' => $this->model->findAll(),
        ];


        if ($this->request->getMethod() == 'post') {
            if (!$this->validate($validation)) { # JIKA VALIDASI AKTIF (ADA KESALAHAN INPUT), TAMPILKAN ERROR
                $data1['validation'] = $this->validator;
                $this->session->setFlashdata('error', 'Gagal input data ! Rumah tahfidz telah terdaftar dalam database. Gunakan nama lain!');
                echo view('backend/rumahtahfid', $data1);
            } else {
                $this->model->tambahData($data);
                $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
            }
        }

        return redirect()->to('/rumahtahfid');
    }

    public function editData($id)
    {
        $no_hp =  $this->request->getVar('no');
        if (substr($no_hp, 0, 1) == 0) {
            $no_hp = "62" . substr($no_hp, 1);
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'pembina' => $this->request->getVar('pembina'),
            'no_telp' => $no_hp,
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
        $this->mengajar->where('id_rt', $id)->delete();
        $this->model->hapusData($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/rumahtahfid');
    }
}
