<?php

namespace App\Http\Controllers;

use App\Facturas;
use App\Http\Controllers\Controller;
use App\Producto;
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
        $datos['facturas']=Facturas::paginate(5);

        $dato['productos']=Producto::paginate(5);
        
        return view('pag.facturas',$datos,$dato);
    }

    public function Perfil()
    {
        return view('pag.perfil');
    }

    public function Auxfactura()
    {
        return view('pag.auxfactura');
    }

    public function Productos()
    {
        return view('pag.productos');
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
