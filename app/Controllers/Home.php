<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates_user/header');
        echo view('templates_user/topbar');
        echo view('views_user/index');
        echo view('templates_user/footer');
    }

    public function home()
    {
        echo view('templates_user2/default.php');
    }

    public function form_lapor()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('templates_user/header');
        echo view('templates_user/topbar');
        echo view('views_user/form_lapor', $data);
        echo view('templates_user/footer');
    }

    public function form_claim()
    {
        echo view('templates_user/header');
        echo view('templates_user/topbar');
        echo view('views_user/form_claim');
        echo view('templates_user/footer2');
    }


    public function save_barang()
    {
        //validasi input
        if (!$this->validate([
            'nama_barang'       => 'required',
            'kategori_barang'   => 'required',
            'deskripsi'         => 'required',
            'lokasi'            => 'required',
            'nama_pelapor'      => 'required',
            'email_penemu'      => 'required',
            'no_hp'             => 'required'
        ])) {
            return redirect()->to('/home/form_lapor')->withInput();
        }

        //dd($this->request->getVar()); //untuk cek masuk db apa engga
        //$this->nama model->save(apa yang mau disave pake array)
        //ambil foto
        $fileFoto = $this->request->getFile('foto');
        //generate nama file foto random
        $namaFoto = $fileFoto->getRandomName();
        //pindahkan ke folder img
        $fileFoto->move('img');

        $this->modelBarang->save([
            'nama_barang'       => $this->request->getVar('nama_barang'),
            'kategori_barang'   => $this->request->getVar('kategori_barang'),
            'deskripsi_barang'  => $this->request->getVar('deskripsi'),
            'lokasi_barang'     => $this->request->getVar('lokasi'),
            'foto_barang'       => $namaFoto,
            'nama_pelapor'      => $this->request->getVar('nama_pelapor'),
            'email'             => $this->request->getVar('email_penemu'),
            'no_hp'             => $this->request->getVar('no_hp')
        ]);

        session()->setFlashdata('pesan', 'Terima kasih, laporan barang hilang telah kami terima');

        return redirect()->to('/home');
    }

    public function card_barang()
    {
        //return view('welcome_message');
        echo view('templates_user/header');
        #echo view('templates/v_sidebar');
        #echo view('templates/v_topbar');
        echo view('views_user/card_barang');
        echo view('templates_user/footer');
    }
}
