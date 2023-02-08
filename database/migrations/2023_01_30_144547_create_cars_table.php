<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->bigInteger('vehicle_id');
            $table->bigInteger('merk_id');
            $table->string('chassis_number');
            $table->string('machine_number');
            $table->string('bpkb_number');
            $table->string('bpkb_name');
            $table->string('stnk_time');
            $table->date('car_date');
            $table->bigInteger('stock');
            $table->double('price_buy');
            $table->double('price_sell');
            $table->double('car_status');
            $table->string('image_stnk');
            $table->string('image_ktp');
            $table->string('image');
            $table->softDeletes();
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
        Schema::dropIfExists('cars');
    }
}
