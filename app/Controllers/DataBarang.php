<?php

namespace App\Controllers;

// use App\Models\UsersModel;

class DataBarang extends BaseController
{
    public function index()
    {
        $data_barang = $this->modelBarang->findAll();
        $data = [
            'data_barang' => $data_barang
        ];
        echo view('views_admin/data_masuk', $data);
    }

    public function data_keluar()
    {
        echo view('views_admin/data_keluar');
    }
}
