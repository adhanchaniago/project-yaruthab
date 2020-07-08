<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->model = new UserModel();
        helper('global');
    }

    ####################################################### VIEW CONTROL ####################################################### 

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $role = $this->db->table('user_role')->select('role')->get()->getResultArray();
        $data = [
            'title' => 'User',
            'path' => 'User',
            'user' => $this->model->getAllData(),
            'role' => $role
        ];

        return view('backend/user', $data);
    }

    ####################################################### CRUD DATA ####################################################### 

    public function hapusData($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/santri');
    }

    public function editRoleUser($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $role = $this->request->getVar('role');
        $role_id = $this->db->table('user_role')->select("id")->getWhere(['role' => $role])->getRowArray();
        $data = [
            'role_id' => $role_id['id']
        ];
        $this->model->update($id, $data);
        $this->session->setFlashdata('success', 'Role user berhasil di update');
        return redirect()->to('/user');
    }

    public function aktifasiUser($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        // ambil data is_activated dari tabel user
        $isActive = $this->model->where('id', $id)->findColumn('is_active'); //data = array 1 dimensi
        if ($isActive[0] == 1) {
            $data = [
                'is_active' => 0
            ];
            $this->session->setFlashdata('success', 'Status user tidak aktif');
        } else {
            $data = [
                'is_active' => 1
            ];
            $this->session->setFlashdata('success', 'User berhasil di aktifasi');
        }

        $this->model->update($id, $data);
        return redirect()->to('/user');
    }

    ####################################################### GET DATA ####################################################### 

    public function getDataById($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $user = $this->db->table('user')
            ->select('user.*, user_role.role as role')
            ->join('user_role', 'user_role.id = user.role_id')
            ->getWhere(['user.id' => $id])
            ->getRowArray();
        $tgl = substr($user['created_at'], 0, 10);
        $tgl_daftar = longdate_indo($tgl);
        $data = [
            'id' => $user['id'],
            'img' => $user['img'],
            'is_active' => $user['is_active'],
            'no_hp' => $user['no_hp'],
            'role' => $user['role'],
            'username' => $user['username'],
            'nama' => $user['nama'],
            'created_at' => $tgl_daftar,
            'updated_at' => $user['updated_at']
        ];
        echo json_encode($data);
    }
}
