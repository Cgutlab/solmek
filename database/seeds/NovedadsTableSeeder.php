<?php

use Illuminate\Database\Seeder;

class NovedadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('novedads')->insert(array (
			0 => 
			array (
				'id'           => 1,
				'titulo'       => 'Cada Niño su botella',
				'texto'        => 'Durante los últimos tres años hemos realizado la campaña “Cada niño su botella”, contribuyendo a concientizar a los niños que realizan deportes en equipo sobre la Mononucleosis, cuya enfermedad se transmite principalmente por el intercambio de saliva, al beber del mismo vaso o de la misma botella bebidas con otras personas. Algunas instituciones que formaron parte de ella son:
								   Club Almirante Brown, Club Atlético All Boys, Deportivo Laferrere, A.V. Malvinas Alrgentinas, Racing Matanza, Club Deportivo Huracán de San Justo, Club Atlético San Lorenzo de Almagro, Colegio Mekhitarista de Buenos Aires, y muchos más.',
				'file_image'   => 'novedades__novedad1.jpg',
				'galeria'      => 0,
				'orden'        => 'aa',
				'categoria_id' => 1
			),
			1 => 
			array (
				'id'           => 2,
				'titulo'       => 'Nuevo Catálogo de Productos',
				'texto'        => 'Más metros cuadrados, más máquinas y más personal es la apuesta que generamos para una nueva unidad de negocios de nuestra compañía. Algunas instituciones que formaron parte de ella son:
								   Club Almirante Brown, Club Atlético All Boys, Deportivo Laferrere, A.V. Malvinas Alrgentinas, Racing Matanza, Club Deportivo Huracán de San Justo, Club Atlético San Lorenzo de Almagro, Colegio Mekhitarista de Buenos Aires, y muchos más.',
				'file_image'   => 'novedades__novedad1.jpg',
				'galeria'      => 0,
				'orden'        => 'bb',
				'categoria_id' => 2
			),
			2 => 
			array (
				'id'           => 3,
				'titulo'       => 'Nuevos Depósitos Solmek',
				'texto'        => 'Más metros cuadrados, más máquinas y más personal es la apuesta que generamos para una nueva unidad de negocios de nuestra compañía. Algunas instituciones que formaron parte de ella son:
								   Club Almirante Brown, Club Atlético All Boys, Deportivo Laferrere, A.V. Malvinas Alrgentinas, Racing Matanza, Club Deportivo Huracán de San Justo, Club Atlético San Lorenzo de Almagro, Colegio Mekhitarista de Buenos Aires, y muchos más.',
				'file_image'   => 'novedades__novedad1.jpg',
				'galeria'      => 0,
				'orden'        => 'cc',
				'categoria_id' => 2
			),
		));
    }
}
