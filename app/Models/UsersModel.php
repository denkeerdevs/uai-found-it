<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'data_barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'kategori_barang', 'deskripsi_barang', 'lokasi_barang', 'id_penemu'];
    public function getData()
    {
        return $this->db->table('data_barang')
            ->join('penemu_barang', 'penemu_barang.id_penemu=data_barang.id_penemu')
            ->get()->getResultArray();
    }
}
