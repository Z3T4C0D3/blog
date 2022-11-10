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
        Schema::create('libros_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libros_id');
            $table->unsignedBigInteger('tags_id');

            $table->foreign('libros_id')->references('id_libro')->on('libros')->onDelete('cascade');
            $table->foreign('tags_id')->references('id_tag')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('libros_tags');
    }
};
