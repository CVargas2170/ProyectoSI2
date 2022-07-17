<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->String('nombre',120);
            $table->String('telefono',20);
            $table->String('apellido',120);
            $table->String('email');
            $table->unsignedSmallInteger('estado')->default(1);
            $table->unsignedSmallInteger('tipo')->default(2);
            //campo tipo cliente(si es nuevo) unsignedSmallInteger
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
   
    }
};
