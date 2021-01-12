<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterFoodClassificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_food_classification', function (Blueprint $table) {
            $table->id();
            $table->float('value', 9, 3);
            $table->text('text_value');
            $table->foreignId('major_classification_id')->constrained('master_ingredient_major_classification');
            $table->foreignId('middle_classification_id')->constrained('master_ingredient_middle_classification');
            $table->dateTime('create_date');
            $table->dateTime('update_date')->nullable();
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
        Schema::dropIfExists('master_food_classification');
    }
}
