<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class DatosCalzadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('calzados')->truncate();
    //insertando datos a la tabla de talla
        DB::table('talla')->insert([
            'NumeroTalla' => '33',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '34',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '35',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '36',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '37',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '38',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '39',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '40',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '41',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '42',        
        ]);
        DB::table('talla')->insert([
            'NumeroTalla' => '43',        
        ]);

    //insertando datos a la tabla calzados
        //PAGINA PRINCIPAL DESTACADOS
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 299.99,      
            'tipo' => 'hombre',
            'estado' => 'Promocion', 
            'detalle' => 'Super star',
            'imagen' => 'superstar_.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 299.99,      
            'tipo' => 'mujer',
            'estado' => 'Promocion', 
            'detalle' => 'Blanco ,rosa y celeste',
            'imagen' => 'pumasXXY.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 199.99,      
            'tipo' => 'kidman',
            'estado' => 'Promocion', 
            'detalle' => 'kids colors',
            'imagen' => 'pumacolores.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 249.99,      
            'tipo' => 'kidwoman',
            'estado' => 'Promocion', 
            'detalle' => 'guindo',
            'imagen' => 'puma23.jpg',
        ]);
        
         //PAGINA PRINCIPAL MUJERES
         DB::table('calzados')->insert([
            'marca' => 'C/Moran',
            'precio' => 249.99,      
            'tipo' => 'mujer',
            'estado' => 'Destacado', 
            'detalle' => 'Palo de rosa',
            'imagen' => 'z3.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 499.99,      
            'tipo' => 'mujer',
            'estado' => 'Destacado', 
            'detalle' => 'blanco con rosa y verde pastel',
            'imagen' => 'adidasN.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 299.99,      
            'tipo' => 'mujer',
            'estado' => 'Destacado', 
            'detalle' => 'crema y rosa',
            'imagen' => 'nikerose.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 199.99,      
            'tipo' => 'mujer',
            'estado' => 'Destacado', 
            'detalle' => 'Negro y dorado',
            'imagen' => 'puma-W.jpg',
        ]);
        //PAGINA PRINCIPAL HOMBRES
        DB::table('calzados')->insert([
            'marca' => 'Adidas',
            'precio' => 299.99,      
            'tipo' => 'hombre',
            'estado' => 'Destacado', 
            'detalle' => 'Mostaza',
            'imagen' => 'adidasmostaza.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Fila',
            'precio' => 399.99,      
            'tipo' => 'hombre',
            'estado' => 'Destacado', 
            'detalle' => 'Azul y blanco',
            'imagen' => 'filablue.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Nike',
            'precio' => 399.99,      
            'tipo' => 'hombre',
            'estado' => 'Destacado', 
            'detalle' => 'Blanco y negro',
            'imagen' => 'nikeblack.jpg',
        ]);
        DB::table('calzados')->insert([
            'marca' => 'Puma',
            'precio' => 299.99,      
            'tipo' => 'hombre',
            'estado' => 'Destacado', 
            'detalle' => 'future colors',
            'imagen' => 'puma-future.jpg',
        ]);

        //PAGINA VARONES
       
    //********************MUJERES***************** */
         
    }
}
