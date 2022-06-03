<?php

namespace App\Controllers;

// use App\Models\BarangModel;
// use App\Models\UsersModel;

class DataBarang extends BaseController
{
    public function index()
    {
        $data['data_barang'] = $this->modelBarang->findAll();
        return view('views_admin/data_masuk', $data);
    }

    public function data_keluar()
    {
        echo view('views_admin/data_keluar');
    }

    public function tambah_data()
    {
        $fileFoto = $this->request->getFile('gambar');
        //generate nama file foto random
        $namaFoto = $fileFoto->getRandomName();
        //pindahkan ke folder img
        $fileFoto->move('img');

        $data = [
            'nama_barang'       => $this->request->getVar('nama_barang'),
            'kategori_barang'   => $this->request->getVar('kategori'),
            'deskripsi_barang'  => $this->request->getVar('deskripsi'),
            'lokasi_barang'     => $this->request->getVar('lokasi'),
            'foto_barang'       => $namaFoto,
            'nama_pelapor'      => 'admin',
            'email'             => 'admin@uai.ac.id',
            'no_hp'             => '082111222333'
        ];

        $this->modelBarang->insert($data);
        return redirect()->to('admin/data-masuk')->with('success', 'Data Berhasil Disimpan');
    }
}
