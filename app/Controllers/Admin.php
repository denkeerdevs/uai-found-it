<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('views_admin/dashboard');
    }

    public function manage_admin()
    {
        $data['users'] = $this->modelAdmin->findAll();
        return view('views_admin/manage_admin', $data);
    }

    public function profile()
    {
        echo view('views_admin/profile');
    }
}
