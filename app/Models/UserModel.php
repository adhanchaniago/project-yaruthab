<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $useTimestamps = true;
    protected $allowedFields = ['role_id', 'is_active'];

    public function getAllData($id = null)
    {
        if (!$id) {
            $user = $this->db->table('user')
                ->select('user.*, user_role.role as role')
                ->join('user_role', 'user_role.id = user.role_id')
                ->get()
                ->getResultArray();
        } else {
            $user = $this->db->table('user')
                ->select('user.*, user_role.role as role')
                ->join('user_role', 'user_role.id = user.role_id')
                ->getWhere(['user.id' => $id])
                ->getRowArray();
        }
        return $user;
    }
}
