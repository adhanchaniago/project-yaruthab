<?php

namespace App\Models;

use CodeIgniter\Model;

class PengurusModel extends Model
{
    protected $table = "pengurus";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_jabatan', 'nama', 'alamat', 'no_hp', 'img', 'email', 'facebook', 'instagram', 'twitter'];
}
