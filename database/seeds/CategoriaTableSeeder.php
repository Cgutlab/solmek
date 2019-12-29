<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('categorias')->insert(array (
			0 => 
			array (
				'id'     => 1,
				'nombre' => 'Eventos',
				'orden'  => 'aa',
			),
			1 => 
			array (
				'id'     => 2,
				'nombre' => 'Productos',
				'orden'  => 'bb',
			),
			2 => 
			array (
				'id'     => 3,
				'nombre' => 'Empresa',
				'orden'  => 'cc',
			),
		));
    }
}
