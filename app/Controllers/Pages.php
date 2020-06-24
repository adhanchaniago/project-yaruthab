<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Yaruthab | Probolinggo'
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
            'title' => 'Rumah Tahfidz | Yaruthab'
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
            'title' => 'Dashboard'
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
