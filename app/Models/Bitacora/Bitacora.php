<?php

namespace App\Models\Bitacora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Bitacora extends Model
{
    use HasFactory;

    protected $table = 'bitacoras';

    protected $fillable = [
        'user_id',
        'accion',
        'fecha_creacion',
        'tabla',
        'datos',
        
        

    ];

    const TIPO_CREO = 1;
    const TIPO_EDITO = 2;
    const TIPO_ELIMINO_ANULO = 3;
    const TIPO_INGRESO = 4;
    const TIPO_SALIO = 5;

    public function user(){
        return $this->hasOne(User::class,'id','user_id');

    }


    public function getHoraModificadaAttribute(){
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y H:i');

    }


    public function getAccionDescripcionAttribute(){
        $acciones = ['CREO','EDITO','ELIMINO/ANULO','INGRESO','SALIO'];
        return $acciones[$this->attributes['accion']-1];

    }

    public function getAccionColorAttribute(){
        $colores = ['bg-success','bg-info','bg-danger','bg-warning','bg-dark'];
        return $colores[$this->attributes['accion']-1];

    }



}