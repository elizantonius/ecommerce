<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DataProduk extends BaseController
{
    public function index()
    {

        $data['Judul'] = 'Input Data Produk';
        echo view('layout/component/header');
        echo view('layout/component/sidebar');
        echo view('layout/component/navbar');
        echo view('layout/dataproduk', $data);
        echo view('layout/component/footer');
    }
}
