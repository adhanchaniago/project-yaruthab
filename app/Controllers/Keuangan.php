<?php

namespace App\Controllers;

use App\Models\KeuanganModel;

class Keuangan extends BaseController
{
    public function __construct()
    {
        $this->model = new KeuanganModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Keuangan',
            'path' => 'keuangan',
            'keuangan' => $this->model->findAll(),
            'total' => $this->updateTotalSaldo()
        ];

        return view('backend/keuangan', $data);
    }

    public function tambahIncome()
    {
        $data = [
            'income' => $this->request->getvar('nominal'),
            'outcome' => 0,
            'sumber' => $this->request->getvar('sumber'),
            'keterangan' => $this->request->getvar('keterangan'),
        ];

        $this->model->insert($data);

        // update saldo 
        $total = [
            'total' => $this->updateTotalSaldo()
        ];
        $id = $this->db->table('keuangan')->selectMax('id')->get()->getRow();
        $this->model->update($id->id, $total);
        $this->session->setFlashdata('success', 'Berhasil menambah income');
        return redirect()->to('/keuangan');
    }

    public function tambahOutcome()
    {
        $data = [
            'outcome' => $this->request->getvar('nominal'),
            'income' => 0,
            'keterangan' => $this->request->getvar('keterangan')
        ];

        $this->model->insert($data);

        $total = [
            'total' => $this->updateTotalSaldo()
        ];
        $id = $this->db->table('keuangan')->selectMax('id')->get()->getRow();
        $this->model->update($id->id, $total);
        $this->session->setFlashdata('success', 'Berhasil menambah outcome');
        return redirect()->to('/keuangan');
    }

    public function hitungTotalIncome()
    {
        $income = $this->db->table('keuangan')->selectSum('income')->get()->getRow();
        return $income->income;
    }

    public function hitungTotalOutcome()
    {
        $outcome = $this->db->table('keuangan')->selectSum('outcome')->get()->getRow();
        return $outcome->outcome;
    }

    public function updateTotalSaldo()
    {
        $total = $this->hitungTotalIncome() - $this->hitungTotalOutcome();
        return $total;
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to('/keuangan');
    }
}
