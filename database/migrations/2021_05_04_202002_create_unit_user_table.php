<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_user', function (Blueprint $table) {
            $table->id();
            $table->double('nota', 8, 2);
            $table->double('nota_seg_tur', 8, 2);
            $table->double('ponderacion', 8, 2);
            $table->double('nota_monografia', 8, 2);
            $table->double('promedio_monografia', 8, 2);
            $table->string('observacion_academica');
            $table->string('situacion_economica');
            $table->string('situacion_administrativa');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('unit_id');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('unit_id')->references('id')->on('units')
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
        Schema::dropIfExists('unit_user');
    }
}
