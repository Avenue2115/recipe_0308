<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterIngredientMiddleClassificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_ingredient_middle_classification', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('another_name');
            $table->text('unit');
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
        Schema::dropIfExists('master_ingredient_middle_classification');
    }
}
