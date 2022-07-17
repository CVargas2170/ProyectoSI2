<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatosCalzadosMujeresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 550.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'Turqueza',
            'imagen' => 'adidasverde.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 340.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'Black classic',
            'imagen' => 'calzadonike.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Fila',
            'precio' => 450.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'Black dark',
            'imagen' => 'filablack.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Fila',
            'precio' => 500.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'white classic',
            'imagen' => 'filablanco.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Fila',
            'precio' => 550.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'white cow',
            'imagen' => 'filawomanew.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 400.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'Air 7c pink',
            'imagen' => 'nikerosa.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 400.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'Air 7c pink',
            'imagen' => 'nikerose.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 300.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'colors play',
            'imagen' => 'pumacolorrr.jpg',
        ]);
/*        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 400.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'Red wine',
            'imagen' => 'PumasXXY.jpg',
        ]);*/
        DB::table('calzados')->insert([
            'marca' => 'C/Moran',
            'precio' => 290.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'cream classic',
            'imagen' => 'z2.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'C/Moran',
            'precio' => 400.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'light blue classic',
            'imagen' => 'z4.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'C/Moran',
            'precio' => 450.00,      
            'tipo' => 'mujer',
            'estado' => 'Normal', 
            'detalle' =>'Purple classic',
            'imagen' => 'z5.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 250.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Crema y celeste',
            'imagen' => 'adidas2019-F.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 450.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Blanco y dorado',
            'imagen' => 'adidasdorado-W.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 300.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'blanco con purpura',
            'imagen' => 'adidaspurple22-W.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'McQueen',
            'precio' => 360.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Rosa completo',
            'imagen' => 'mcqueenrosa.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'McQueen',
            'precio' => 380.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Palo de rosa',
            'imagen' => 'Mcqueen-rosabeige-2.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 550.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Pinki',
            'imagen' => 'nikepinki.webb.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 590.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'White y verde',
            'imagen' => 'nikeverde.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 650.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Blanco moderm',
            'imagen' => 'nikewoman.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 450.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Guindo moderm',
            'imagen' => 'puma23.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 380.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Azul y rosado',
            'imagen' => 'pumablue.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 440.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Rosa pink',
            'imagen' => 'pumapink.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 440.00,      
            'tipo' => 'kidwoman',
            'estado' => 'Normal', 
            'detalle' =>'Rosa pastel',
            'imagen' => 'pumarosa.jpg',
        ]);
    }
}
