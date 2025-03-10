<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Aut extends BaseController
{
    public function index()
    {
        //
        return view('aut/login');
    }

    public function recuperar_pass(){


        return view('aut/recuperar_pass');
    }
}
