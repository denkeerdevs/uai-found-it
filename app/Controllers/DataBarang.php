<?php

namespace App\Controllers;

// use App\Models\BarangModel;
// use App\Models\UsersModel;

class DataBarang extends BaseController
{
    public function index()
    {
        $data['data_barang'] = $this->modelBarang->getAll();
        return view('views_admin/data_masuk', $data);
    }

    public function data_keluar()
    {
        echo view('views_admin/data_keluar');
    }

    public function tambah_data()
    {
        $fileFoto = $this->request->getFile('foto');
        $namaFoto = $fileFoto->getRandomName();
        $fileFoto->move('img', $namaFoto);

        $kode_barang = $this->modelBarang->kodeBarang();

        $data = [
            'kode_barang'       => $kode_barang,
            'nama_barang'       => $this->request->getVar('nama_barang'),
            'kategori_barang'   => $this->request->getVar('kategori'),
            'deskripsi_barang'  => $this->request->getVar('deskripsi'),
            'lokasi_barang'     => $this->request->getVar('lokasi'),
            'tanggal_ditemukan' => $this->request->getVar('tanggal'),
            'foto_barang'       => $namaFoto,
            'nama_pelapor'      => 'admin',
            'email'             => 'admin@uai.ac.id',
            'no_hp'             => '082111222333',
            'status'            => '2'
        ];

        $this->modelBarang->insert($data);
        session()->setFlashdata('pesan', 'Data barang hilang Berhasil Disimpan');
        return redirect()->to('admin/data-masuk');
    }

    public function detail($id_barang = null)
    {
        $detail = $this->modelBarang->find($id_barang);
        if (is_object($detail)) {
            $data['detail'] = $this->modelBarang->where(['id_barang' => $id_barang])->first();
            return view('views_admin/detail_barang', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function data_verifikasi()
    {
        $data['data_verif'] = $this->modelBarang->verifikasi();
        return view('views_admin/data_verif', $data);
    }
}
