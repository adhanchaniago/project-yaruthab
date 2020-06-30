<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = "user";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'role_id', 'nama', 'img', 'is_active'];

    public function addUser($data = [])
    {
        $this->insert($data);
    }
}
