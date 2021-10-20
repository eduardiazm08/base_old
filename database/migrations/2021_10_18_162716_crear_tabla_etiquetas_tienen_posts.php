<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEtiquetasTienenPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquetas_tienen_posts', function (Blueprint $table) {

            $table->unsignedBigInteger('id_post');
            $table->unsignedBigInteger('id_tag');
            $table->foreign('id_post')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade')
                  ->onUpdate('restrict');
            $table->foreign('id_tag')
                  ->references('id')
                  ->on('etiquetas')
                  ->onDelete('restrict')
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
        Schema::dropIfExists('etiquetas_tienen_posts');
    }
}
