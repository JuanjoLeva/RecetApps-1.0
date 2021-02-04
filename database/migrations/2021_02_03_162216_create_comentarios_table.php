<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->unsignedBigInteger("id_comentario");
            $table->unsignedBigInteger("id_usuario");
            $table->foreign("id_usuario")->references("id")->on("users");
            $table->unsignedBigInteger("id_receta");
            $table->foreign("id_receta")->references("id")->on("recetas");

            $table->primary(array("id_comentario","id_usuario","id_receta"));

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
        Schema::dropIfExists('comentarios');
    }
}
