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
        Schema::create('calzados', function (Blueprint $table) {
            $table->id();
            $table->String('marca',30);
            $table->float('precio',8,2);
            $table->String('tipo',10);
            $table->String('estado',30);
            $table->String('detalle',600);
            $table->String('imagen',500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calzado');
    }
};
