<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Usuarios extends BaseController
{
    public function index()
    {
        //
        return view('usuarios/perfil_alumo');
    }

    public function perfilAlumno(){
        return view('usuarios/perfil_alumno');
    }
}
