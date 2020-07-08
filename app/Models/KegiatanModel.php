<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = "kegiatan";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama', 'tgl_pelaksanaan', 'tempat', 'is_tampil', 'class', 'deskripsi', 'pj'];
}
