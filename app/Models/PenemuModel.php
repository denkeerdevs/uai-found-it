<?php

namespace App\Models;

use CodeIgniter\Model;

class PenemuModel extends Model
{
    protected $table            = 'penemu_barang';
    protected $primaryKey       = 'id_penemu';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_penemu', 'email_penemu', 'no_hp_penemu'];
    protected $useSoftDeletes   = false;
    protected $useTimestamps    = false;
}
