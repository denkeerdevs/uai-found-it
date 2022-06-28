<?php

namespace App\Controllers;

// use App\Models\BarangModel;
// use App\Models\UsersModel;

class DataAdmin extends BaseController
{
    public function index()
    {
        $data['users'] = $this->modelAdmin->findAll();
        return view('views_admin/manage_admin', $data);
    }

    // public function data_keluar()
    // {
    //     echo view('views_admin/data_keluar');
    // }

    public function tambah_admin()
    {
        // $fileFoto = $this->request->getFile('gambar');
        // //generate nama file foto random
        // $namaFoto = $fileFoto->getRandomName();
        // //pindahkan ke folder img
        // $fileFoto->move('img');

        $data = [
            'email'       => $this->request->getVar('email'),
            'username'   => $this->request->getVar('username'),
            'active'  => $this->request->getVar('active'),
            // 'lokasi_barang'     => $this->request->getVar('lokasi'),
            // 'foto_barang'       => $namaFoto,
            // 'nama_pelapor'      => 'admin',
            // 'email'             => 'admin@uai.ac.id',
            // 'no_hp'             => '082111222333'
        ];

        $this->modelAdmin->insert($data);
        return redirect()->to('admin/manage_admin')->with('success', 'Admin berhasil ditambahkan');
    }
}
