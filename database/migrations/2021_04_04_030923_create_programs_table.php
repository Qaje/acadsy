<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('description');
            $table->integer('version');
            $table->date('date_begin');
            $table->date('date_end');
            $table->timestamps();

            $table->unsignedBigInteger('id_management');
            $table->unsignedBigInteger('id_zone');
            $table->unsignedBigInteger('id_level');

            $table->foreign('id_management')->references('id')->on('managements')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_zone')->references('id')->on('zones')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_level')->references('id')->on('levels')
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
        Schema::dropIfExists('programs');
    }
}
