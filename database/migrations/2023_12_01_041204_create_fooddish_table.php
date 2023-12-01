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
        Schema::create('food_dishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num', 16)->index();
            $table->string('restaurant_num', 16)->index();
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('price', 8, 2);
            $table->boolean('available')->default(true);
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
        Schema::dropIfExists('food_dishes');
    }
};