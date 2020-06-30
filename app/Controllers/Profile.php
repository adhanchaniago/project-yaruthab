<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Profile extends BaseController
{

    public function __construct()
    {
        $this->model = new ProfileModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $this->id = $this->session->get('id');
        $role = $this->db->table('user_role')
            ->select('user_role.role as role')
            ->join('user', 'user.role_id = user_role.id')->getWhere(['user.id' => $this->id])->getResultArray();
        $user = $this->model->where('id', $this->id)->find();
        $data = [
            'title' => 'User Profile',
            'user' => $user[0],
            'role' => $role[0]['role'],
            'path' => 'Profile'
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = [
                'username' => [
                    'rules' => 'trim|required',
                    'errors' => [
                        'required' => 'Username tidak boleh kosong!',
                    ]
                ],
                'nama' => [
                    'rules' => 'trim|required',
                    'errors' => [
                        'required' => 'Nama tidak boleh kosong'
                    ]
                ],
                'nomor' => [
                    'rules' => 'trim|required|numeric',
                    'errors' => [
                        'required' => 'Nomor Handphone tidak boleh kosong!',
                        'numeric' => 'Nomor Handphone harus berisi angka'
                    ]
                ], 'password' => [
                    'rules' => 'trim',
                ],
                'password1' => [
                    'rules' => 'trim|matches[password]',
                    'errors' => [
                        'matches' => 'Password tidak cocok!'
                    ]
                ]
            ];
            if (!$this->validate($validation)) {
                $data['validation'] = $this->validator;
                echo view('backend/profile', $data);
            } else {
                if ($this->request->getVar('password') == "") {
                    $data1 = [
                        'username' => $this->request->getVar('username'),
                        'nama' => $this->request->getVar('nama'),
                        'no_hp' => $this->request->getVar('nomor'),
                        'is_active' => 1,
                        'img' => $this->uploadGambar($this->id)
                    ];

                    // hapus gambar dalam folder assets jika user upload gambar profile baru
                    $file = $this->request->getFile('gambar');
                    if ($file->getName() != "") {
                        if (file_exists(FCPATH . '/assets/img/uploads/profile/' . $user[0]['img'])) {
                            $this->hapusGambar($this->id);
                        }
                    }

                    $this->model->update($this->id, $data1);
                    $this->session->setFlashdata('success', 'Data berhasil diupdate!');
                    return redirect()->to('/profile');
                } else {
                    $password = $this->request->getVar('password');
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $data1 = [
                        'username' => $this->request->getVar('username'),
                        'password' => $password,
                        'nama' => $this->request->getVar('nama'),
                        'no_hp' => $this->request->getVar('nomor'),
                        'is_active' => 1,
                        'img' => $this->uploadGambar($this->id)
                    ];

                    // hapus gambar dalam folder assets jika user upload gambar profile baru
                    $file = $this->request->getFile('gambar');
                    if ($file->getName() != "") {
                        if (file_exists(FCPATH . '/assets/img/uploads/profile/' . $user[0]['img'])) {
                            $this->hapusGambar($this->id);
                        }
                    }

                    $this->model->update($this->id, $data1);
                    $this->session->setFlashdata('success', 'Data berhasil diupdate!');
                    return redirect()->to('/profile');
                }
            }
        } else {
            // die;
            echo view('backend/profile', $data);
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
}
