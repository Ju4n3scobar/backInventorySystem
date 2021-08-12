<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartAsignamentEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_asignament_equipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('part_son_id');
            $table->unsignedBigInteger('part_father_id');
            $table->unsignedBigInteger('third_party_technician_id');
            $table->timestamps();

            $table->foreign('part_son_id')->references('id')->on('parts');
            $table->foreign('part_father_id')->references('id')->on('parts');
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
        Schema::dropIfExists('part_asignament_equipments');
    }
}
