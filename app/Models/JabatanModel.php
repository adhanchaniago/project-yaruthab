<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = "jabatan_pengurus";
    protected $useTimestamps = true;
    protected $allowedFields = ['jabatan'];
}
