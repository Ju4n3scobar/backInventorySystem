<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_active');
            $table->string('serial');
            $table->string('responsible_employee');
            $table->string('comment');
            $table->integer('price');
            $table->unsignedBigInteger('model_devices_id');
            $table->unsignedBigInteger('third_party_employee_id');
            $table->unsignedBigInteger('third_party_supplier_id');
            $table->unsignedBigInteger('third_party_technician_id');
            $table->timestamps();
            
            $table->foreign('model_devices_id')->references('id')->on('model_devices');
            $table->foreign('third_party_employee_id')->references('id')->on('role_of_third_parties');
            $table->foreign('third_party_supplier_id')->references('id')->on('role_of_third_parties');
            $table->foreign('third_party_technician_id')->references('id')->on('role_of_third_parties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts');
    }
}
