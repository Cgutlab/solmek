<?php

use Illuminate\Database\Seeder;

class ProduccionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('produccions')->insert(array (
			0 => 
			array (
				'id'         	   => 1,
				'descripcion'      => 'Ofrecemos un verdadero Servicio de Producción Integral. Desde la realización de matrices originales y exclusivas hasta la posibilidad de elegir un formato estándar dentro de la variedad de modelos propios.
									   Nuestros clientes acceden a un mayor control sobre todo el proceso, desde el proyecto y creación del prototipo hasta su realización industrial, con toda la calidad que sus productos y su identidad comercial merecen.
									   Nos dedicamos a la fabricación de envases y tapas plásticas. Contamos con un sector de proyectos especializado en el diseño y fabricación de moldes de inyección y soplado. Nuestra maquinaria CNC nos permite lograr el mecanizado de superficies avanzadas, con excelente nivel de precisión y terminación. Tenemos servicio de serigrafía propio dentro de nuestra planta, lo cual disminuye el costo y facilita tos tiempos de entrega. Desde ya tenga en cuenta que... “Si no lo tenemos, Lo hacemos”.',
				'file_image' 	   => 'producciones__ingenieria.jpg',
				'categoria'   	   => 'ingenieria',
			),
			1 => 
			array (
				'id'        	   => 2,
				'descripcion'      => 'Ofrecemos un verdadero Servicio de Producción Integral. Desde la realización de matrices originales y exclusivas hasta la posibilidad de elegir un formato estándar dentro de la variedad de modelos propios.
									   Nuestros clientes acceden a un mayor control sobre todo el proceso, desde el proyecto y creación del prototipo hasta su realización industrial, con toda la calidad que sus productos y su identidad comercial merecen.
									   Nos dedicamos a la fabricación de envases y tapas plásticas. Contamos con un sector de proyectos especializado en el diseño y fabricación de moldes de inyección y soplado. Nuestra maquinaria CNC nos permite lograr el mecanizado de superficies avanzadas, con excelente nivel de precisión y terminación. Tenemos servicio de serigrafía propio dentro de nuestra planta, lo cual disminuye el costo y facilita tos tiempos de entrega. Desde ya tenga en cuenta que... “Si no lo tenemos, Lo hacemos”.',
				'file_image' 	   => 'producciones__matriceria.jpg',
				'categoria'  	   => 'matriceria',
			),
		));
    }
}
