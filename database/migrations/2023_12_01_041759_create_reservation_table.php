<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num', 16)->index();
            $table->string('restaurant_num', 16)->index();
            $table->string('table_num', 16)->index();
            $table->string('code', 32)->index();
            $table->string('customer_full_name', 512);
            $table->string('customer_email', 256);
            $table->integer('number_persons');
            $table->date('date');
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
        Schema::dropIfExists('reservations');
    }
};
