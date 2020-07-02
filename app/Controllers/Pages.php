<?php

namespace App\Controllers;

use App\Models\PengurusModel;
use App\Models\JabatanModel;
use App\Models\RumahTahfidModel;

class Pages extends BaseController
{
    public function __construct()
    {
        $this->model = new PengurusModel();
        $this->jabatan = new JabatanModel();
        $this->rt = new RumahTahfidModel();
    }
    public function index()
    {
        $pengurus = $this->db->table('pengurus')
            ->select('jabatan_pengurus.jabatan as jabatan, pengurus.*')
            ->join('jabatan_pengurus', 'jabatan_pengurus.id = pengurus.id_jabatan')
            ->get()
            ->getResultArray();
        $donatur = $this->db->table('donatur')->select('id')->getWhere(['is_confirm' => 1])->getResultArray();
        $ndonatur = count($donatur);
        $data = [
            'title' => 'Yaruthab | Probolinggo',
            'pengurus' => $pengurus,
            'jabatan' => $this->jabatan->findColumn('jabatan'),
            'nrt' => $this->db->table('rumah_tahfid')->countAllResults(),
            'nst' => $this->db->table('santri')->countAllResults(),
            'npg' => $this->db->table('pengajar')->countAllResults(),
            'ndn' => $ndonatur

        ];
        return view('frontend/index', $data);
    }

    public function pesantren()
    {
        $data = [
            'title' => 'Pesantren | Yaruthab'
        ];
        return view('frontend/pesantren', $data);
    }

    public function rt()
    {
        $data = [
            'title' => 'Rumah Tahfidz | Yaruthab',
            'rumahtahfid' => $this->rt->findAll(),
        ];
        return view('frontend/rt', $data);
    }

    public function portofolio()
    {
        $data = [
            'title' => 'Gallery | Yaruthab'
        ];
        return view('frontend/portfolio', $data);
    }

    public function doc()
    {
        $data = [
            'title' => 'Dokumen | Yaruthab'
        ];
        return view('frontend/doc', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'path' => 'Dashboard'
        ];

        return view('backend/dashboard', $data);
    }


    public function pengurus()
    {
        $data = [
            'title' => 'Pengurus'
        ];

        return view('layout/admintemplate', $data);
    }

    //--------------------------------------------------------------------

}
