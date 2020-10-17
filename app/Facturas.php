<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    protected $table = 'tb_factura';

    protected $fillable = ['fac_id', 'fac_empresa', 'fac_codigo', 'fac_usuario', 'fac_cliente', 'fac_producto', 'fac_telefono', 'fac_fecha', 'fac_subtotal', 'fac_total'];

    public function User()
    {
     return $this->belongsTo('App\User');
    }
}
