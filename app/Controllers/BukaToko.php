<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BukaToko extends BaseController
{
    public function index()
    {
        echo view('Beranda/component/header');
        echo view('Beranda/component/topbar');
        echo view('bukatoko');
        echo view('Beranda/component/footer');
    }
}
