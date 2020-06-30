<?php

namespace App\Models;

use CodeIgniter\Model;

class WaliSantriModel extends Model
{
    protected $table = "wali_santri";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat', 'no_hp'];
}
