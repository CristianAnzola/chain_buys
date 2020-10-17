<?php

namespace App\Http\Controllers;

use App\User;
use App\Facturas;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage; 
use Illuminate\Support\Str; 
use File; 

class FacturasController extends Controller
{
    public function index()
    {
     $Facturas = Facturas::select('id', 'nombre', 'precio', 'stock', 'imagenes', 'url')->with('User:fac_usuario')->get();
 
        //$ib = Bicicletas::find(3)->User;
 
        //dd($ib);
 
        // $imagenes = Bicicletas::find(3)->imagenesbicicletas;
 
        return view('admin.bicicletas.index', compact('bicicletas')); 
    }
}
