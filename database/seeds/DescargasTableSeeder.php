<?php

use Illuminate\Database\Seeder;

class DescargasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('descargas')->insert(array (
			0 => 
			array (
				'id'     => 1,
				'file'   => 'calidad1.png',
				'nombre' => 'Certificación ISO 9001:2015',
				'orden'  => 'aa',
			),
			1 => 
			array (
				'id'     => 2,
				'file'   => 'calidad2.png',
				'nombre' => 'Política de Calidad',
				'orden'  => 'bb',
			),
		));
    }
}
