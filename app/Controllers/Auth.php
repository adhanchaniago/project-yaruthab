<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Auth extends BaseController
{
    protected $auth;

    public function __construct()
    {
        $this->auth = new ProfileModel();
        helper(['form', 'url']);
    }

    public function index()
    {

        $data = [
            'title' => 'Login | YARUTHAB'
        ];

        $validation = [
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
            ]
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            if (!$this->validate($validation)) {
                $data['validation'] = $this->validator;
                echo view('backend/auth/login', $data);
            } else {
                return $this->login();
            }
        } else {
            echo view('backend/auth/login', $data);
        }
    }

    private function login()
    {
        $username = htmlspecialchars($this->request->getPost('username'));
        $password = htmlspecialchars($this->request->getPost('password'));
        $user = $this->auth->where('username', $username)->first();

        if ($user) { // CEK APAKAH USERNAME YANG DIINPUT ADA
            if (password_verify($password, $user['password'])) { // JIKA ADA CEK PASSWORD APAKAH SUDAH BENAR
                if ($user['is_active'] == 1) { // JIKA BENAR CEK APAKAH USER AKTIF
                    $data = [ // JIKA AKTIF, BUAT SESSION DARI USER
                        'id' => $user['id'],
                        'nama' => $user['nama'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set($data);
                    return redirect()->to('/admin');
                } else { // JIKA TIDAK AKTIF TAMPILKAN PESAN KEMBALIKAN KE HALAMAN LOGIN
                    # ISI PESAN
                    $this->session->setFlashdata('meesage', 'User belum diaktifasi, silahkan hubungi admin untuk aktifasi akun !');
                    return redirect()->to('/login');
                }
            } else { // JIKA PASSWORD SALAH TAMPILKAN PESAN ERROR, KEMBALIKAN KE HALAMAN LOGIN
                $this->session->setFlashdata('meesage', 'Password salah !');
                return redirect()->to('/login');
            }
        } else {
            $this->session->setFlashdata('meesage', 'Username tidak ditemukan !');
            return redirect()->to('/login');
        }
    }

    public function register()
    {
        $data = [
            'title' => 'register | YARUTHAB'
        ];

        $validation = [
            'username' => [
                'rules' => 'trim|required|is_unique[user.username]',
                'errors' => [
                    'required' => 'Username tidak boleh kosong!',
                    'is_unique' => 'Username telah terdaftar. Gunakan username lain!'
                ]
            ],
            'nama' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            'no_hp' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Nomor Handphone tidak boleh kosong!',
                    'numeric' => 'Nomor Handphone harus berisi angka'
                ]
            ],
            'password' => [
                'rules' => 'trim|required|min_length[3]',
                'errors' => [
                    'required' => 'password tidak boleh kosong!',
                    'min_length' => 'minimal terdiri dari 3 karakter'
                ]
            ],
            'password1' => [
                'rules' => 'trim|required|matches[password]',
                'errors' => [
                    'required' => 'Field ini tidak boleh kosong!',
                    'matches' => 'Password tidak cocok!'
                ]
            ]
        ];

        if ($this->request->getMethod() == 'post') {
            # cek validasi
            if (!$this->validate($validation)) { # JIKA VALIDASI AKTIF (ADA KESALAHAN INPUT), TAMPILKAN ERROR
                $data['validation'] = $this->validator;
                echo view('backend/auth/register', $data);
            } else { #VALIDASI SUKSES AMBIL DATA INPUTAN

                # HASH PASSWORD
                $password = $this->request->getPost('password');
                $hashPassword = password_hash($password, PASSWORD_DEFAULT);
                # STORE DATA INPUTAN DALAM VARIABEL $dataUser
                $dataUser = [
                    'username' => $this->request->getPost('username'),
                    'password' => $hashPassword,
                    'role_id' => 2,
                    'nama' => $this->request->getPost('nama'),
                    'no_hp' => $this->request->getPost('no_hp'),
                    'is_active' => 0,
                    'img' => 'profile.png'
                ];

                # insert data to database
                $this->auth->addUser($dataUser);
                # buat flashdata dan direct ke halaman login
                $this->session->setFlashdata('registrasi', 'Registrasi berhasil, silahkan minta konfirmasi akun ke admin sebelum login!');
                return redirect()->to('/login');
            }
        } else {
            echo view('backend/auth/register', $data);
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
