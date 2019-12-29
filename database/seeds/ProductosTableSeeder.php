<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('productos')->insert(array (
			0 => 
			array (
				'id'               => 1,
				'nombre'           => '60cc',
				'file_image'       => 'productos__producto1.jpg',
				'orden'            => 'aa',
				'descripcion'      => 'Botella con gran estabilidad, apta para productos industriales. Apta para todo tipo de productos de aseo e industriales en base a agua. Con rosca para colocar cánula.',
				'codigo'           => 'B0011-1',
				'especificaciones' => null,
				'familia_id'       => 2,
				'subfamilia_id'    => 2,
				'galeria'          => 0,
			),
			1 => 
			array (
				'id'               => 2,
				'nombre'           => '100cc / 125cc',
				'file_image'       => 'productos__producto2.jpg',
				'orden'            => 'bb',
				'descripcion'      => 'Botella con gran estabilidad, apta para productos industriales. Apta para todo tipo de productos de aseo e industriales en base a agua. Con rosca para colocar cánula.',
				'codigo'           => 'B0011-2',
				'especificaciones' => null,
				'familia_id'       => 2,
				'subfamilia_id'    => 2,
				'galeria'          => 0,
			),
			2 => 
			array (
				'id'               => 3,
				'nombre'           => '1000cc con nervaduras',
				'file_image'       => 'productos__producto3.jpg',
				'orden'            => 'cc',
				'descripcion'      => 'Botella con gran estabilidad, apta para productos industriales. Apta para todo tipo de productos de aseo e industriales en base a agua. Con rosca para colocar cánula.',
				'codigo'           => 'B0011-3',
				'especificaciones' => null,
				'familia_id'       => 2,
				'subfamilia_id'    => 2,
				'galeria'          => 0,
			),
			3 => 
			array (
				'id'               => 4,
				'nombre'           => '250cc p/cánula',
				'file_image'       => 'productos__producto4.jpg',
				'orden'            => 'dd',
				'descripcion'      => 'Botella con gran estabilidad, apta para productos industriales. Apta para todo tipo de productos de aseo e industriales en base a agua. Con rosca para colocar cánula.',
				'codigo'           => 'B0011-4',
				'especificaciones' => null,
				'familia_id'       => 2,
				'subfamilia_id'    => 2,
				'galeria'          => 0,
			),
			4 => 
			array (
				'id'               => 5,
				'nombre'           => '1000cc p/cánula',
				'file_image'       => 'productos__producto5.jpg',
				'orden'            => 'ee',
				'descripcion'      => 'Botella con gran estabilidad, apta para productos industriales. Apta para todo tipo de productos de aseo e industriales en base a agua. Con rosca para colocar cánula.',
				'codigo'           => 'B0011-5',
				'especificaciones' => null,
				'familia_id'       => 2,
				'subfamilia_id'    => 2,
				'galeria'          => 0,
			),
			5 => 
			array (
				'id'               => 6,
				'nombre'           => '1000cc',
				'file_image'       => 'productos__producto6.jpg',
				'orden'            => 'ff',
				'descripcion'      => 'Botella con gran estabilidad, apta para productos industriales. Apta para todo tipo de productos de aseo e industriales en base a agua. Con rosca para colocar cánula.',
				'codigo'           => 'B0011-6',
				'especificaciones' => null,
				'familia_id'       => 2,
				'subfamilia_id'    => 2,
				'galeria'          => 0,
			),
		));
    }
}
