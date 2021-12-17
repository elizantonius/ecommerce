<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DataKategori extends BaseController
{
    public function index()
    {

        $data['Judul'] = 'Input Kategori';
        echo view('layout/component/header');
        echo view('layout/component/sidebar');
        echo view('layout/component/navbar');
        echo view('layout/datakategori', $data);
        echo view('layout/component/footer');
    }
}
