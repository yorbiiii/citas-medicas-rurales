<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function index()
    {
        return view('centro.inicio');
    }
}
