<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente\Cliente;
class Lista extends Model
{
   // use HasFactory;
   protected $table ="listas";
 public $timestamps = false;
  protected $fillable =['cliente_id','administrativo_id'];
 
  protected $hidden =['id'];


  public function clientes(){
    return $this->hasMany(Cliente::class,'id','cliente_id');
  }
}
