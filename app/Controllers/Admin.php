<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    public function index()
    {
        echo view('views_admin/home');
    }

    public function data_masuk()
    {
        $data_masuk = $this->usersModel->findAll();
        $data = [
            'data_masuk' => $data_masuk
        ];
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar');
        echo view('templates_admin/topbar');
        echo view('views_admin/data_masuk', $data);
        echo view('templates_admin/footer');
    }

    public function data_keluar()
    {
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar');
        echo view('templates_admin/topbar');
        echo view('views_admin/data_keluar');
        echo view('templates_admin/footer');
    }

    public function dashboard()
    {
        echo view('views_admin/home');
    }
}
