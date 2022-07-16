<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'data_barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'kategori_barang', 'deskripsi_barang', 'lokasi_barang', 'foto_barang', 'nama_pelapor', 'email', 'no_hp'];
}
