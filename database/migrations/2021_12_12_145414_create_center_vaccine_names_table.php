<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterVaccineNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center_vaccine_names', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('center_id')->nullable();
            $table->unsignedBigInteger('rapid_pcr_center_id')->nullable();
            $table->string('city_id');
            $table->string('vaccineName');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('center_vaccine_names');
    }
}
