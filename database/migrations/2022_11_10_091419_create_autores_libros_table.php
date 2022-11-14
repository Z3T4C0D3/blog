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
        Schema::create('autores_libros', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('autores_id');
            $table->unsignedBigInteger('libros_id');

            $table->foreign('libros_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('autores_id')->references('id')->on('autores')->onDelete('cascade');
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
        Schema::dropIfExists('autores_libros');
    }
};
