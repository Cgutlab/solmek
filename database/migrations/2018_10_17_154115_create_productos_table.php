<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('file_image')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('codigo')->nullable();
            $table->text('especificaciones')->nullable();
            $table->string('orden')->nullable();
            $table->boolean('galeria')->default(0);
            $table->unsignedInteger('familia_id');
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade');    
            $table->unsignedInteger('subfamilia_id');
            $table->foreign('subfamilia_id')->references('id')->on('subfamilias')->onDelete('cascade');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
