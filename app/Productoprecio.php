<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productoprecio extends Model
{
    protected $table = 'tb_productoprecio';

    protected $fillable = ['prp_id', 'prp_bodega', 'prp_costo', 'prp_stock', 'prp_cantidad'];

    public function producto()
    {
        return $this->belongsTo('App\producto');
    }
}
