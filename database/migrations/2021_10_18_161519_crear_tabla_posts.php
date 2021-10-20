<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 200);
            $table->string('sub_titulo', 200);
            $table->string('resumen', 200);
            $table->longText('contenido');
            $table->string('slug', 60)->unique();
            $table->enum('estado',[1,2,3])->default(1);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user', 'fk_post_usuario')
                  ->references('id')
                  ->on('usuarios')
                  ->onDelete('no action')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('posts');
    }
}
