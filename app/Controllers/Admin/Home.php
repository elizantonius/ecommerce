<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/component/header');
        echo view('layout/component/sidebar');
        echo view('layout/component/navbar');
        echo view('layout/layout');
        echo view('layout/component/footer');
    }
}
