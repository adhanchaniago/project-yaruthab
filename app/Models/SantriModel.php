<?php

namespace App\Models;

use CodeIgniter\Model;

class SantriModel extends Model
{
    protected $table = "santri";
    protected $useTimestamps = true;
    protected $allowedFields = ['rt_id', 'wali_id', 'nama', 'img'];
}
