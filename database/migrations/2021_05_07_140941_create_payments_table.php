<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->double('mat_1', 8,2);
            $table->date('mat_1_date');
            $table->string('comprobante_mat_1');
            $table->double('mat_2', 8,2);
            $table->date('mat_2_date');
            $table->string('comprobante_mat_2');
            $table->double('mat_3', 8,2);
            $table->date('mat_3_date');
            $table->string('comprobante_mat_3');
            $table->double('pago_subtotal_matricula', 8,2);
            $table->double('cuo_ini_uni', 8,2);
            $table->date('cuo_ini_uni_date');
            $table->string('comprobante_cuo_in');
            $table->double('cuota1', 8,2);
            $table->date('cuota1_date');
            $table->string('comprobante_cuota1');
            $table->double('cuota2', 8,2);
            $table->date('cuota2_date');
            $table->string('comprobante_cuota2');
            $table->double('cuota3', 8,2);
            $table->date('cuota3_date');
            $table->string('comprobante_cuota3');
            $table->double('cuota4', 8,2);
            $table->date('cuota4_date');
            $table->string('comprobante_cuota4');
            $table->double('cuota5', 8,2);
            $table->date('cuota5_date');
            $table->string('comprobante_cuota5');
            $table->double('cuota6', 8,2);
            $table->date('cuota6_date');
            $table->string('comprobante_cuota6');
            $table->double('cuota7', 8,2);
            $table->date('cuota7_date');
            $table->string('comprobante_cuota7');
            $table->double('cuota8', 8,2);
            $table->date('cuota8_date');
            $table->string('comprobante_cuota8');
            $table->double('cuota9', 8,2);
            $table->date('cuota9_date');
            $table->string('comprobante_cuota9');
            $table->double('cuota10', 8,2);
            $table->date('cuota10_date');
            $table->string('comprobante_cuota10');
            $table->double('cuota11', 8,2);
            $table->date('cuota11_date');
            $table->string('comprobante_cuota11');
            $table->double('cuota12', 8,2);
            $table->date('cuota12_date');
            $table->string('comprobante_cuota12');
            $table->double('pago_subtotal_colegiatura', 8,2);
            $table->double('pago_total', 8,2);
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
        Schema::dropIfExists('payments');
    }
}
