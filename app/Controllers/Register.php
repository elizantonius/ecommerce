<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        echo view('Register_vw');
    }
}
