<?php

use Illuminate\Database\Seeder;

class DatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('datos')->insert(array (
			0 => 
			array (
				'id'        => 1,
				'telefono'  => '54-11-4651-5734',
				'direccion' => 'Almafuerte 4181 - San Justo Buenos Aires Argentina ',
				'email'     => 'info@solmek.com.ar',
			),
		));
    }
}
