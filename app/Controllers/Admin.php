<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['users'] = $this->modelAdmin->total_admin();
        echo view('views_admin/dashboard',$data);
    }

    /*public function manage_admin()
    {
        $data['users'] = $this->modelAdmin->findAll();
        return view('views_admin/manage_admin', $data);
    }*/

    public function profile()
    {
        echo view('views_admin/profile');
    }
}
