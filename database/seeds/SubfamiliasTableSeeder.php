<?php

use Illuminate\Database\Seeder;

class SubfamiliasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('subfamilias')->insert(array (
			0 => 
			array (
				'id'         => 1,
				'nombre'     => 'Ninguna',
				'orden'      => 'aa',
				'familia_id' => 1,
				'file_image' => null,
			),
			1 => 
			array (
				'id'         => 2,
				'nombre'     => 'Botellas Cilíndricas',
				'orden'      => 'aa',
				'familia_id' => 2,
				'file_image' => 'subfamilias__subfamilia1.jpg'
			),
			2 => 
			array (
				'id'         => 3,
				'nombre'     => 'Botellas Formato',
				'orden'      => 'bb',
				'familia_id' => 2,
				'file_image' => 'subfamilias__subfamilia2.jpg'
			),
			3 => 
			array (
				'id'         => 4,
				'nombre'     => 'Botellas Químicas',
				'orden'      => 'cc',
				'familia_id' => 2,
				'file_image' => 'subfamilias__subfamilia3.jpg'
			),
			4 => 
			array (
				'id'         => 5,
				'nombre'     => 'Botellas Cosméticas',
				'orden'      => 'dd',
				'familia_id' => 2,
				'file_image' => 'subfamilias__subfamilia4.jpg'
			),
		));
    }
}
