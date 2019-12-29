<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(LogosTableSeeder::class);
         $this->call(MetadatosTableSeeder::class);
         $this->call(DatosTableSeeder::class);
         $this->call(EmpresasTableSeeder::class);
         $this->call(SlidersTableSeeder::class);
         $this->call(InformacionsTableSeeder::class);
         $this->call(CalidadsTableSeeder::class);
         $this->call(DescargasTableSeeder::class);
         $this->call(CategoriaTableSeeder::class);
         $this->call(NovedadsTableSeeder::class);
         $this->call(DestacadosTableSeeder::class);
         $this->call(ProduccionsTableSeeder::class);
         $this->call(VideosTableSeeder::class);
         $this->call(FamiliasTableSeeder::class);
         $this->call(SubfamiliasTableSeeder::class);
         $this->call(ProductosTableSeeder::class);
    }
}
