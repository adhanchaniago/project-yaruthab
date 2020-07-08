<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriKegiatanModel extends Model
{
    protected $table = "foto_kegiatan";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_kegiatan', 'img'];
}
