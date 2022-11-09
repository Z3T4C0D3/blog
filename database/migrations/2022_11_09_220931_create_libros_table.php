<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id('id_libro');
            $table->string('titulo');
            $table->string('codigo');
            $table->string('slugLibros');
            $table->text('extract');
            $table->longText('body');
            //Estatus BORRADOR 1|PUBLICADO 2
            $table->enum('status', [1,2])->default(1);
            //FOREIGN KEY
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_clasificacion');
            $table->unsignedBigInteger('id_editorial');
            //RESTRICCION DE FK
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_clasificacion')->references('id_clasificacion')->on('clasificaciones')->onDelete('cascade');
            
            $table->foreign('id_editorial')->references('id_editorial')->on('editoriales')->onDelete('cascade');
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
        Schema::dropIfExists('libros');
    }
};
