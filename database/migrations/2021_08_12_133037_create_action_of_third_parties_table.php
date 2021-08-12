<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionOfThirdPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_of_third_parties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parts_id');
            $table->unsignedBigInteger('third_party_supplier_id');
            $table->unsignedBigInteger('third_party_employee_id');
            $table->unsignedBigInteger('third_party_technician_id');
            $table->timestamps();

            $table->foreign('parts_id')->references('id')->on('parts');
            $table->foreign('third_party_supplier_id')->references('id')->on('role_of_third_parties');
            $table->foreign('third_party_employee_id')->references('id')->on('role_of_third_parties');
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
        Schema::dropIfExists('action_of_third_parties');
    }
}
