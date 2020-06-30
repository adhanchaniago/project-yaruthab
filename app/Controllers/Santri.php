<?php

namespace App\Controllers;

use App\Models\SantriModel;
use App\Models\WaliSantrirModel;
use App\Models\RumahTahfidModel;
use App\Models\WaliSantriModel;

class Santri extends BaseController
{
    public function __construct()
    {
        $this->model = new SantriModel();
        $this->wali = new WaliSantriModel();
        $this->rt = new RumahTahfidModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Data Santri',
            'path' => 'Data Santri',
            'santri' => $this->getAllDataSantri(),
            'rt' => $this->rt->findColumn('nama'),
        ];
        return view('backend/santri/index', $data);
    }

    ####################################################### CRUD DATA ####################################################### 
    public function tambahData()
    {
        // 1. Cek apakah data wali santri sudah ada, berdasar nama dan nomor
        // 2. Jika ada ambil id, tambahkan ke data santri, jika tidak tambahkan data wali ke db 
        // 2. Input data santri

        if ($this->cekWaliIsExist()) {
            $idWali = $this->cekWaliIsExist();
            $dataSantri = [
                'wali_id' => $idWali[0]['id'],
                'rt_id' => $this->getIdRt(),
                'tgl_daftar' => $this->request->getVar('tgl'),
                'nama' => $this->request->getVar('nama'),
                'img' => $this->uploadGambar()
            ];
            $this->model->insert($dataSantri);
        } else {
            $dataWali = [
                'nama' => $this->request->getVar('wali'),
                'alamat' => trim($this->request->getVar('alamat')),
                'no_hp' => $this->request->getVar('no')
            ];
            $this->wali->insert($dataWali);
            $dataSantri = [
                'wali_id' => $this->getIdWali(),
                'rt_id' => $this->getIdRt(),
                'tgl_daftar' => $this->request->getVar('tgl'),
                'nama' => $this->request->getVar('nama'),
                'img' => $this->uploadGambar()
            ];
            $this->model->insert($dataSantri);
        }

        // TAMPILKAN FLASH DATA
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/santri');
    }

    public function hapusData($id)
    {
        $this->hapusGambar($id);
        $idWali = $this->model->where('id', $id)->findColumn('wali_id');
        $IdWaliCount = $this->db->table('santri')->select('wali_id')->getWhere(['wali_id' => $idWali])->getResultArray();
        $this->model->delete($id);
        if (count($IdWaliCount) == 1) {
            $this->wali->delete($idWali[0]);
        }
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/santri');
    }

    ####################################################### GETTING DATA ####################################################### 

    public function getIdRt()
    {
        $rt = $this->request->getVar('rt');
        $rt_id = $this->rt->where('nama', $rt)->findColumn('id');
        return $rt_id[0];
    }

    public function cekWaliIsExist()
    {
        $nama = $this->request->getVar('wali');
        $nomor = $this->request->getVar('no');
        $cek = $this->wali->where('nama', $nama)->where('no_hp', $nomor)->find();
        return $cek;
    }

    public function getIdWali()
    {
        $wali = $this->request->getVar('wali');
        $wali_id = $this->wali->where('nama', $wali)->findColumn('id');
        return $wali_id[0];
    }

    public function getDataById($id)
    {
        $santri = $this->db->table('santri')
            ->select('santri.*, wali_santri.nama as ortu, wali_santri.alamat, wali_santri.no_hp, rumah_tahfid.nama as rt')
            ->join('wali_santri', 'wali_santri.id = santri.wali_id')
            ->join('rumah_tahfid', 'rumah_tahfid.id = santri.rt_id')
            ->getWhere(['santri.id' => $id])
            ->getRowArray();
        echo json_encode($santri);
    }

    public function getAllDataSantri($id = null)
    {
        if (!$id) {
            $santri = $this->db->table('santri')
                ->select('santri.*, wali_santri.nama as ortu, wali_santri.alamat, wali_santri.no_hp, rumah_tahfid.nama as rt')
                ->join('wali_santri', 'wali_santri.id = santri.wali_id')
                ->join('rumah_tahfid', 'rumah_tahfid.id = santri.rt_id')
                ->get()
                ->getResultArray();
        } else {
            $santri = $this->db->table('santri')
                ->select('santri.*, wali_santri.nama as ortu, wali_santri.alamat, wali_santri.no_hp, rumah_tahfid.nama as rt')
                ->join('wali_santri', 'wali_santri.id = santri.wali_id')
                ->join('rumah_tahfid', 'rumah_tahfid.id = santri.rt_id')
                ->getWhere(['santri.id' => $id])
                ->getRowArray();
        }
        return $santri;
    }

    ######################################################### GAMBAR ######################################################### 

    public function uploadGambar($id = null)
    {
        $file = $this->request->getFile('gambar');
        $img = $this->model->where('id', $id)->findColumn('img');
        if ($file->isValid()) {
            // die;
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
