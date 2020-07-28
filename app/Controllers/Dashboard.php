<?php

namespace App\Controllers;

use App\Models\TestimoniModel;
use App\Models\DonaturModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to('/login');
        }
        $testi = new TestimoniModel();
        $donatur = new DonaturModel();
        $user = new UserModel();
        $keuangan = $this->db->query('SELECT SUM(income) AS income ,SUM(outcome) AS outcome, CAST(created_at AS Date) as created_at
        FROM keuangan GROUP by CAST(created_at AS Date)')->getResultArray();
        $data = [
            'title'     => 'Dashboard',
            'path'      => 'Dashboard',
            'testimoni' => $testi->where('is_confirm = 0')->findAll(),
            'donatur'   => $donatur->findAll(),
            'ndonatur'  => count($donatur->where('is_confirm = 0')->findAll()),
            'user'      => $user->findAll(),
            'nuser'  => count($user->where('is_active = 0')->findAll()),
            'keuangan' => $keuangan
        ];
        return view('backend/dashboard', $data);
    }

    //--------------------------------------------------------------------

}
