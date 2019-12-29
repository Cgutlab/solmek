<?php

use Illuminate\Database\Seeder;

class DestacadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('destacados')->insert(array (
			0 => 
			array (
				'id'         => 1,
				'novedad_id' => 1,
				'orden'      => 'aa',
			),
			1 => 
			array (
				'id'         => 2,
				'novedad_id' => 2,
				'orden'      => 'bb',
			),
			2 => 
			array (
				'id'         => 3,
				'novedad_id' => 3,
				'orden'      => 'cc',
			),
		));
    }
}
