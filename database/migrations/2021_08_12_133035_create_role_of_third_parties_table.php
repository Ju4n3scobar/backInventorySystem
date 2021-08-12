<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleOfThirdPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_of_third_parties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('third_parties_id');
            $table->unsignedBigInteger('type_third_parties_id');
            $table->timestamps();

            $table->foreign('third_parties_id')->references('id')->on('third_parties');
            $table->foreign('type_third_parties_id')->references('id')->on('type_third_parties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_of_third_parties');
    }
}
