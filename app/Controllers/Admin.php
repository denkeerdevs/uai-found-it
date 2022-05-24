<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar');
        echo view('templates_admin/topbar');
        echo view('views_admin/dashboard');
        echo view('templates_admin/footer');
    }
}
