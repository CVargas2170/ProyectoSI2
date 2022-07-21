<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificaciones';
    protected $fillable =['descripcion','administrativo_id','cliente_id','created_at'];
    public function administrativo(){

        return $this->hasOne(Administrativo::class,'id','administrativo_id');

    }
}
