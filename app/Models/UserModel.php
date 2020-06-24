<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'role_id', 'nama', 'is_active'];

    public function addUser($data = [])
    {
        $this->insert($data);
    }
}
