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
        Schema::create('promociones', function (Blueprint $table) {
            $table->id();
            $table->String('descripcion',100);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('descuento');
            $table->String('imagen',240);
            $table->unsignedSmallInteger('estado')->default(1);
            $table->unsignedBigInteger('calzado_id');
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
        Schema::dropIfExists('promocion');
    }
};
