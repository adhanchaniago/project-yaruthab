<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajarModel extends Model
{
    protected $table = "pengajar";
    protected $useTimestamps = true;
    protected $allowedFields = ['rt_id', 'nama', 'alamat', 'img', 'no_hp'];
}
