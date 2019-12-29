<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('videos')->insert(array (
			0 => 
			array (
				'id'            => 1,
				'titulo'        => 'Inyección I',
				'descripcion'   => 'La mejor tecnología al servicio de nuestros clientes I',
				'video'         => 'https://www.youtube.com/embed/D6bQ58rX1TU',
				'produccion_id' => 1,
				'orden'         => 'aa',
			),
			1 => 
			array (
				'id'            => 2,
				'titulo'        => 'Mecanizado CNC I',
				'descripcion'   => 'La mejor tecnología al servicio de nuestros clientes I',
				'video'         => 'https://www.youtube.com/embed/ynmjwmhbpSM',
				'produccion_id' => 1,
				'orden'         => 'bb',
			),
			2 => 
			array (
				'id'            => 3,
				'titulo'        => 'Mecanizado CNC I',
				'descripcion'   => 'La mejor tecnología al servicio de nuestros clientes I',
				'video'         => 'https://www.youtube.com/embed/S6vVaYNhm7U',
				'produccion_id' => 1,
				'orden'         => 'cc',
			),
			3 => 
			array (
				'id'            => 4,
				'titulo'        => 'Inyección',
				'descripcion'   => 'La mejor tecnología al servicio de nuestros clientes',
				'video'         => 'https://www.youtube.com/embed/D6bQ58rX1TU',
				'produccion_id' => 2,
				'orden'         => 'dd',
			),
			4 => 
			array (
				'id'            => 5,
				'titulo'        => 'Mecanizado CNC',
				'descripcion'   => 'La mejor tecnología al servicio de nuestros clientes',
				'video'         => 'https://www.youtube.com/embed/ynmjwmhbpSM',
				'produccion_id' => 2,
				'orden'         => 'ee',
			),
			5 => 
			array (
				'id'            => 6,
				'titulo'        => 'Mecanizado CNC',
				'descripcion'   => 'La mejor tecnología al servicio de nuestros clientes',
				'video'         => 'https://www.youtube.com/embed/S6vVaYNhm7U',
				'produccion_id' => 2,
				'orden'         => 'ff',
			),
		));
    }
}
