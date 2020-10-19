<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'tb_producto';

    protected $fillable = ['pro_id', 'pro_proveedor', 'pro_descripcion', 'pro_imagen'];


}
