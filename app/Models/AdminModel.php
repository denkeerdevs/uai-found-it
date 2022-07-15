<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['email', 'username', 'active'];
    protected $useSoftDeletes   = false;
    protected $useTimestamps    = false;

    /*public function total_admin()
    {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->num_rows();

    }*/
}