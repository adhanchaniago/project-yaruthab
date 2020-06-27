<?php

namespace App\Models;

use CodeIgniter\Model;

class MengajarModel extends Model
{
    protected $table = "mengajar";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pengajar', 'id_rt'];
}
