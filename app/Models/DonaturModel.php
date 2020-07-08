<?php

namespace App\Models;

use CodeIgniter\Model;

class DonaturModel extends Model
{
    protected $table = "donatur";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat', 'email', 'no_hp', 'is_confirm'];
}
