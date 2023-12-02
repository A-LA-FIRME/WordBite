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
        Schema::table('reservation', function (Blueprint $table) {
            $table->unique(['restaurant_num', 'date', 'time', 'number_persons'])
                  ->where('status', '=', 'created')
                  ->name('unique_reservation_combination');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation', function (Blueprint $table) {
            // Elimina la restricción única condicional
            $table->dropUnique('unique_reservation_combination');
        });
    }
};
