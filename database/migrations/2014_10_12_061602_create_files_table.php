<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->json('carnet_identidad')->nullable();
            $table->json('titulo_profesional')->nullable();
            $table->json('certificado_egreso')->nullable();
            $table->json('titulo_maestria')->nullable();
            $table->json('carta_postulacion')->nullable();
            $table->json('hoja_vida')->nullable();
            $table->timestamps();

            $table->integer('user_id')->insigned();
            //$table->string('boletadecolegiatura');
            //$table->string('matricula_postgrado');
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
