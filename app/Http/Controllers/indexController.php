<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Inicio()
    {
        return view('pag.inicio');
    }

    public function Facturas()
    {
        return view('pag.facturas');
    }

    public function Perfil()
    {
        return view('pag.perfil');
    }
}
