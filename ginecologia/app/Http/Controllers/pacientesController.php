<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pacientesController extends Controller
{
    public function index()
    {
        return view('proyect.registro');
    }

    public function servicios()
    {
        return view('proyect.servicios');
    }
}
