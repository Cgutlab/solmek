<?php

use Illuminate\Database\Seeder;

class FamiliasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('familias')->insert(array (
			0 => 
			array (
				'id'         => 1,
				'nombre'     => 'Ninguna',
				'orden'      => 'aa',
				'file_image' => null
			),
			1 => 
			array (
				'id'         => 2,
				'nombre'     => 'Botellas',
				'orden'      => 'aa',
				'file_image' => 'familias__familia1.jpg'
			),
			2 => 
			array (
				'id'         => 3,
				'nombre'     => 'Tapas',
				'orden'      => 'bb',
				'file_image' => 'familias__familia2.jpg'
			),
			3 => 
			array (
				'id'         => 4,
				'nombre'     => 'Laboratorios',
				'orden'      => 'cc',
				'file_image' => 'familias__familia3.jpg'
			),
			4 => 
			array (
				'id'         => 5,
				'nombre'     => 'Potes',
				'orden'      => 'dd',
				'file_image' => 'familias__familia4.jpg'
			),
			5 => 
			array (
				'id'         => 6,
				'nombre'     => 'Desarrollos Especiales',
				'orden'      => 'ee',
				'file_image' => 'familias__familia5.jpg'
			),
			6 => 
			array (
				'id'         => 7,
				'nombre'     => 'Bidones',
				'orden'      => 'ff',
				'file_image' => 'familias__familia6.jpg'
			),
		));
    }
}
