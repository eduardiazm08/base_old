<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaRolesTieneUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_tiene_usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('usuarios_id','fk_rolusuario_permiso')
                  ->references('id')
                  ->on('usuarios')
                  ->onDelete('cascade')
                  ->onUpdate('restrict');
            $table->foreign('roles_id','fk_rolusuario_rol')
                  ->references('id')
                  ->on('roles')
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
        Schema::dropIfExists('roles_tiene_usuarios');
    }
}
