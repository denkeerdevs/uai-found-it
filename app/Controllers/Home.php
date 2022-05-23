<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates_user/header');
        # echo view('templates/v_sidebar');
        # echo view('templates/v_topbar');
        echo view('views_user/index');
        echo view('templates_user/footer');
    }

    public function form_lapor()
    {
        //return view('welcome_message');
        echo view('templates_user/header');
        # echo view('templates/v_sidebar');
        #echo view('templates/v_topbar');
        echo view('views_user/form_lapor');
        echo view('templates_user/footer');
    }

    public function card_barang()
    {
        //return view('welcome_message');
        echo view('templates/v_header');
        # echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('home/card_barang');
        echo view('templates/v_footer');
    }
}
