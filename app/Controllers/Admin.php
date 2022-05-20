<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('admin_templates/v_header');
        echo view('admin_templates/v_sidebar');
        echo view('admin_templates/v_topbar');
        echo view('admin_templates/index');
        echo view('admin_templates/v_footer');
    }
}
