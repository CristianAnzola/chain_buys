<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Redirect;

class IndexController extends Controller
{
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
