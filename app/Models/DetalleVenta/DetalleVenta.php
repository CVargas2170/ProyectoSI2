<?php

namespace App\Models\DetalleVenta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venta\Venta;
use App\Models\Calzado;
class DetalleVenta extends Model
{
    use HasFactory;

    protected $table='detalle_ventas';

    protected $fillable = [
        'calzado_id',
        'venta_id',
        'sub_total',

    ];

    public function venta(){

        
        return $this->hasOne(Venta::class,'id','venta_id');
        

    }

    public function calzado(){

        return $this->hasOne(Calzado::class,'id','calzado_id');

    }


}
