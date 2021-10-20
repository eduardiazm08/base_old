<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCategoriasTienenPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_tienen_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cat');
            $table->unsignedBigInteger('id_post');
            $table->foreign('id_cat')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->foreign('id_post')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_tienen_posts');
    }
}
