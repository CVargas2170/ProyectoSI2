<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Mensaje extends Model
{
    use HasFactory;
    protected $table = 'mensajes';
    protected $fillable =['descripcion','administrativo_id','cliente_id','tipo','created_at'];

    public function cliente(){
        
        return $this->hasOne(Cliente::class,'id','cliente_id');

    }

    public function administrativo(){

        return $this->hasOne(Administrativo::class,'id','administrativo_id');

    }


    public function getFechaModificadaAttribute(){

        return Carbon::parse($this->attributes['created_at'])->format('m/d/Y H:i');

    }


}
