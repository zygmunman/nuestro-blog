<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id', 'fk_usuariorol_rol')->references('id')->on('roles')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('usuarios_id');
            $table->foreign('usuarios_id', 'fk_usuariorol_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('restrict');
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
        Schema::dropIfExists('usuarios_roles');
    }
}
