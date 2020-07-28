<?php

namespace App\Models;

use CodeIgniter\Model;

class KeuanganModel extends Model
{
    protected $table = "keuangan";
    protected $useTimestamps = true;
    protected $allowedFields = ['income', 'outcome', 'total', 'sumber', 'keterangan'];
}
