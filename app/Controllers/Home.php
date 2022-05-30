<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    protected $usersModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }
    public function index()
    {
        echo view('templates_user/header');
        #echo view('templates/v_sidebar');
        echo view('templates_user/topbar');
        echo view('views_user/index');
        echo view('templates_user/footer');
    }

    public function form_lapor()
    {
        echo view('templates_user/header');
        echo view('views_user/form_lapor');
        echo view('templates_user/footer');
    }

    public function save_barang()
    {
        //dd($this->request->getVar()); //untuk cek masuk db apa engga
        //$this->nama model->save(apa yang mau disave pake array)
        $this->usersModel->save([
            'nama_barang'       => $this->request->getVar('nama_barang'),
            'kategori_barang'   => $this->request->getVar('kategori_barang'),
            'deskripsi_barang'  => $this->request->getVar('deskripsi'),
            'lokasi_barang'     => $this->request->getVar('lokasi'),
            'nama_penemu'       => $this->request->getVar('nama_pelapor'),
            'email_penemu'      => $this->request->getVar('email_penemu'),
            'no_hp_penemu'      => $this->request->getVar('no_hp')
        ]);

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
