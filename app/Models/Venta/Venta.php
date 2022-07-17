<?php

namespace App\Models\Venta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente\Cliente;
use Carbon\Carbon;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable =[
        'monto_total',
        'cliente_id',
        'created_at',
        'updated_at',

    ];

    public function cliente(){

        return $this->hasOne(Cliente::class,'id','cliente_id');

    } 
    
    

    public function getFechaCreacionAttribute(){

        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y H:i');

    }



}
