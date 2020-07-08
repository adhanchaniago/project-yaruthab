<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\GaleriKegiatanModel;

class Kegiatan extends BaseController
{

    public function __construct()
    {
        $this->model = new KegiatanModel();
        $this->galeri = new GaleriKegiatanModel();
        helper('global');
    }

    ####################################################### VIEW CONTROL #######################################################

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Kegiatan',
            'path' => 'Kegiatan',
            'kegiatan' => $this->model->findAll()
        ];

        return view('/backend/kegiatan/index', $data);
    }

    public function galeri($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $foto = $this->galeri->where('id_kegiatan', $id)->findAll();
        $kegiatan = $this->model->where('id', $id)->find();
        $data = [
            'title' => 'Galeri Kegiatan',
            'path' => 'Kegiatan / Galeri Kegiatan',
            'kegiatan' => $kegiatan[0],
            'foto' => $foto
        ];
        return view('/backend/kegiatan/galeri', $data);
    }

    public function excel()
    {
        $kegiatan = $this->db->table('kegiatan')
            ->select('*')
            ->orderBy('nama ASC')
            ->get()->getResultArray();
        $data = [
            'kegiatan' => $kegiatan
        ];
        // dd($data['kegiatan']);
        return view('backend/excel/kegiatan', $data);
    }

    ####################################################### CRUD DATA #######################################################

    public function tambahData()
    {

        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $tgl = mediumdate_indo($this->request->getVar('tgl'));

        $class = url_title($this->request->getVar('nama'), '-', true);
        $data = [
            'nama' => $this->request->getVar('nama'),
            'tgl_pelaksanaan' => $this->request->getVar('tgl'),
            'tempat' => $this->request->getVar('tempat'),
            'is_tampil' => 0,
            'class' => $class,
            'deskripsi' => trim($this->request->getVar('deskripsi')),
            'pj' => $this->request->getVar('pj')
        ];

        $this->model->insert($data);
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/kegiatan');
    }

    public function editData($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $class = url_title($this->request->getVar('nama'), '-', true);
        $data = [
            'nama' => $this->request->getVar('nama'),
            'tgl_pelaksanaan' => $this->request->getVar('tgl'),
            'tempat' => $this->request->getVar('tempat'),
            'class' => $class,
            'deskripsi' => trim($this->request->getVar('deskripsi')),
            'pj' => $this->request->getVar('pj')
        ];

        $this->model->update($id, $data);
        $this->session->setFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to('/kegiatan');
    }

    public function hapusData($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        // 1. HAPUS GAMBAR DI GALERI SESUAI ID DATA KEGIATAN
        // 2. HAPUS DATA GAMBAR DI DATABASE
        $img = $this->galeri->where('id_kegiatan', $id)->findColumn('img');
        if ($img) {
            $n = count($img);
            for ($i = 0; $i < $n; $i++) {
                unlink(FCPATH . '/assets/img/uploads/galeri/' . $img[$i]);
            }
        }
        $this->galeri->where('id_kegiatan', $id)->delete();
        // 3. HAPUS DATA KEGIATAN DI DATABASE
        $this->model->delete($id);
        // 4. RETURN KE VIEW KEGIATAN
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/kegiatan');
    }

    public function isTampil($id)
    {
        $tampil = $this->model->where('id', $id)->findColumn('is_tampil');
        if ($tampil[0] == 1) {
            $tampil = 0;
            $this->session->setFlashdata('success', 'Galeri kegiatan disembunyikan dari halaman utama');
        } else {
            $tampil = 1;
            $this->session->setFlashdata('success', 'Galeri kegiatan ditampilkan di halaman utama');
        }
        $data = [
            'is_tampil' => $tampil
        ];

        $this->model->update($id, $data);
        return redirect()->to('/kegiatan');
    }

    ############################################# GAMBAR #############################################

    public function hapusFoto($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $img = $this->galeri->where('id', $id)->findColumn('img');
        unlink(FCPATH . '/assets/img/uploads/galeri/' . $img[0]);
        $this->galeri->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->back();
    }

    public function uploadGambar($id = null)
    {

        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $file = $this->request->getFiles('gambar[]');

        for ($i = 0; $i < count($file['gambar']); $i++) {
            if ($file['gambar'][$i]->isValid()) {
                $namaFile = $file['gambar'][$i]->getRandomName();
                $file['gambar'][$i]->move('./assets/img/uploads/galeri', $namaFile);
                $this->compressImg($namaFile);
                $data = [
                    'id_kegiatan' => $id,
                    'img' => $namaFile
                ];
                $this->galeri->insert($data);
                $this->session->setFlashdata('success', 'File gambar berhasil diupload!');
            } else {
                $this->session->setFlashdata('error', 'File gambar terdeteksi tidak valid!');
                break;
            }
        }
        return redirect()->to('/kegiatan/galeri/' . $id);
    }

    public function compressImg($file)
    {
        $info =  $this->image->withFile('./assets/img/uploads/galeri/' . $file)
            ->getFile()
            ->getProperties(true);
        $xOffset = ($info['width'] / 10) - 25;
        $yOffset = ($info['height'] / 10) - 25;
        if ($info['width'] > 2000 ||  $info['height'] > 2000) {
            $this->image->withFile('./assets/img/uploads/galeri/' . $file)
                ->fit($xOffset, $yOffset, 'center')
                ->save('./assets/img/low/low_' . $file);
        }
    }

    ############################################# GET DATA #############################################
    public function getDataById($id)
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }

        $d = $this->model->find($id);
        echo json_encode($d);
    }
}
