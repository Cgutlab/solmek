<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('empresas')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'empresa__empresa.jpg',
				'descripcion' => 'SOLMEK SRL es una empresa con mas de 30 años de trayectoria vinculada a la Industria Plástica y en los últimos 20 años especializada en la producción de envases para un gran abanico de rubros. Deseamos transmitir que nuestra filosofía empresarial es alcanzar la satisfacción plena de nuestros clientes a través de la mejora continua de los procesos, para lo cual comprometemos el desempeño máximo en nuestras tareas. Somos una empresa certificada con normas IS0 9001:2015. 
								  Nos dedicamos a la fabricación de envases y tapas plásticas. Contamos con un sector de proyectos especializado en el diseño y fabricación de moldes de inyección y soplado. Nuestra maquinaria CNC nos permite lograr el mecanizado de superficies avanzadas, con excelente nivel de precisión y terminación. Tenemos servicio de serigrafía propio dentro de nuestra planta, lo cual disminuye el costo y facilita tos tiempos de entrega. Desde ya tenga en cuenta que... “Si no lo tenemos, Lo hacemos”.',
			),
		));  
    }
}
