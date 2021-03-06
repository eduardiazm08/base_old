<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMenusTienenRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_tienen_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('menus_id');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('menus_id','fk_menurol_menu')
                  ->references('id')
                  ->on('menus')
                  ->onDelete('cascade')
                  ->onUpdate('restrict');
            $table->foreign('roles_id','fk_menurol_rol')
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
        Schema::dropIfExists('menus_tienen_roles');
    }
}
