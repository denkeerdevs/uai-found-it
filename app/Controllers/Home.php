<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view('templates/v_header');
        # echo view('templates/v_sidebar');
        #echo view('templates/v_topbar');
        echo view('home/index');
        echo view('templates/v_footer');
    }

    public function form_lapor()
    {
        //return view('welcome_message');
        echo view('templates/v_header');
        # echo view('templates/v_sidebar');
        #echo view('templates/v_topbar');
        echo view('home/form_lapor');
        echo view('templates/v_footer');
    }
}
