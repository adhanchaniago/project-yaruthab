<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table = "testimoni";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'img', 'status', 'testimoni', 'is_confirm'];
}
