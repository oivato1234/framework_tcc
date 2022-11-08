<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cadastro extends BaseController
{
    public function index()
    {
        echo view ('cadastro');
    }
}
