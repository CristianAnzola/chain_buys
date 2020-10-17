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

class UserController extends Controller
{
    public function index()
    {
     $User = User::select('id', 'name', 'email', 'password', 'genero', 'tienda')->with('tb_facturas:tienda')->get();
 
        //$ib = Bicicletas::find(3)->imagenesbicicletas;
 
        //dd($ib);
 
        // $imagenes = Bicicletas::find(3)->imagenesbicicletas;
 
        return view('pag.index', compact('index')); 
    }
}
