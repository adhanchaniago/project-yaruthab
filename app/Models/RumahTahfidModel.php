<?php

namespace App\Models;

use CodeIgniter\Model;

class RumahTahfidModel extends Model
{
    protected $table = "rumah_tahfid";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'pembina', 'no_telp', 'alamat'];

    public function tambahData($data = [])
    {
        $this->insert($data);
    }

    public function hapusData($id)
    {
        $this->delete($id);
    }
}
