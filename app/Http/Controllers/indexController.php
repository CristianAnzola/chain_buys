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
        $datoss = Producto::select('pro_id', 'pro_nombre', 'pro_descripcion', 'pro_imagen', 'pro_proveedor')->with('productoprecio:prp_id')->get();
        
        return view('pag.productos', compact('datoss'));
        
        //$datoss = Producto::select('pro_id', 'pro_nombre', 'prp_stock', 'prp_cantidad', 'prp_costo', 'pro_descripcion', 'pro_imagen', 'pro_proveedor')->join('tb_producto', 'tb_producto.pro_id', '=', 'tb_productoprecio.prp_id')->where('tb_producto.pro_id','tb_productoprecio.prp_id')->get();

        //$datoss['productos']=Producto::paginate(5);

       //return view('pag.productos',$datoss);
    }

    public function store(Request $request)
    {
       // $datosfactura=request()->all();

        $datosfactura=request()->except('_token'); 

        Facturas::insert($datosfactura);
        return redirect('pag/facturas');

        //return response()->json($datosfactura);
    }

    public function storepro(Request $request)
    {
       // $datosfactura=request()->all();

        $datosproducto=request()->except('_token'); 

        Producto::insert($datosproducto);
        return redirect('pag/productos');

        //return response()->json($datosfactura);
    }

    

    
}
