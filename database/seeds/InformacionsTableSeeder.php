<?php

use Illuminate\Database\Seeder;

class InformacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('informacions')->insert(array (
            0 => 
            array (
                'id'          => 1,
                'file_image'  => 'home__informacions.jpg',
                'titulo'      => 'Asumiendo Normas Internacionales de Calidad',
                'descripcion' => 'Somos una Industría Plástica especializada en la producción de envases para un gran abanico de rubros. Sector de proyectos especializado en el diseño y fabricación de moldes de inyección y soplado. Empresa certificada con normas ISO 9001:2015”',
            ),
        ));
    }
}
