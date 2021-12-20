<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Beranda/component/header');
        echo view('Beranda/component/topbar');
        echo view('home');
        echo view('Beranda/component/footer');
    }
}
