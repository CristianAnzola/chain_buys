<?php

namespace App\Http\Controllers;

use App\Facturas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function Auxfactura()
    {
        return view('pag.auxfactura');
    }


    public function store(Request $request)
    {
       // $datosfactura=request()->all();

        $datosfactura=request()->except('_token'); 

        Facturas::insert($datosfactura);
        return redirect('pag/facturas');

        //return response()->json($datosfactura);
    }

    

    
}
