<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('sliders')->insert(array (
			0 => 
			array (
				'id'         => 1,
				'file_image' => 'sliders__slider1.jpg',
				'seccion'    => 'home',
				'titulo'     => 'Más de 30 años de trayectoria en el rubro',
				'descripcion'=> 'Especialistas en Envases Plásticos',
				'orden'      => 'aa',
			),
			1 => 
			array (
				'id'         => 2,
				'file_image' => 'sliders__slider2.jpg',
				'seccion'    => 'empresa',
				'titulo'     => 'Si no lo tenemos, lo hacemos',
				'descripcion'=> 'Más de 30 años en el rubro' ,
				'orden'      => 'aa',
			),
		));    
    }
}
