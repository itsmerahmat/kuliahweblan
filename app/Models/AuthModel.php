<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'nama'];

    public function checkData($username, $password)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pengguna');
        return $builder->getWhere([
            'username' => $username,
            'password' => $password
        ])->getRow();
    }
}
