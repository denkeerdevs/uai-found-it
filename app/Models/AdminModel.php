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
}