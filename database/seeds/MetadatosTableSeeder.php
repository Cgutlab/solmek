<?php

use Illuminate\Database\Seeder;

class MetadatosTableSeeder extends Seeder
{	
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('metadatos')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'seccion'     => 'Home',
				'keyword'     => 'home',
				'url'         => '/',
				'descripcion' => 'Página principal',
				'file_image'  => null,
			),
			1 => 
			array (
				'id'          => 2,
				'seccion'     => 'Empresa',
				'keyword'     => 'empresa',
				'url'         => '/empresa',
				'descripcion' => 'Descripción de la empresa',
				'file_image'  => null,
			),
			2 => 
			array (
				'id'          => 3,
				'seccion'     => 'Productos',
				'keyword'     => 'productos',
				'url'         => '/productos',
				'descripcion' => 'Catálogo de Productos',
				'file_image'  => 'metadatos__productos.jpg',
			),
			3 => 
			array (
				'id'          => 4,
				'seccion'     => 'Novedades',
				'keyword'     => 'novedades',
				'url'         => '/novedades',
				'descripcion' => 'Publicación de las novedades que brinda la empresa.',
				'file_image'  => 'metadatos__novedades.jpg',
			),
			4 => 
			array (
				'id'          => 5,
				'seccion'     => 'I+D',
				'keyword'     => 'i+d',
				'url'         => '/produccion',
				'descripcion' => 'Sección de información sobre producción.',
				'file_image'  => 'metadatos__produccion.jpg',
			),
			5 => 
			array (
				'id'          => 6,
				'seccion'     => 'Calidad',
				'keyword'     => 'calidad',
				'url'         => '/calidad',
				'descripcion' => 'Información de normas de calidad',
				'file_image'  => 'metadatos__calidad.jpg',
			),
			6 => 
			array (
				'id'          => 7,
				'seccion'     => 'Contacto',
				'keyword'     => 'contacto',
				'url'         => '/contacto',
				'descripcion' => 'Zona de contacto',
				'file_image'  => null,
			),
		));
    }
}
