<?php

use Illuminate\Database\Seeder;

class CalidadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('calidads')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'calidad__calidad.jpg',
				'descripcion' => 'Nuestra Política de Calidad prioriza safisfacer las necesidades de nuestros clientes, ofreciéndoles productos y servicios innovadores, conformes a sus requisitos y expectativas. Contribuir con la comunidad, asegurando que nuestra actividad respete y proteja constantemente la integridad de la sociedad y del medio ambiente. Valorar a nuestro personal, procurando su rol y bienestar y seguridad personal. Generar nuevas y mejores oportunidades, que fortalezcan nuestras ventajas competitivas promoviendo en la organización una cultura de mejora continua. ',
			),
		));  
    }
}
