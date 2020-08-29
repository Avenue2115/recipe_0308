<?php
/**
 * レシピの材料テーブルマイグレーションファイル
 * 
 * 
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')->constrained('recipe_summaries');
            $table->foreignId('food_id')->constrained('foods');
            $table->float('food_amount_to_use', 8, 3);
            $table->char('food_unit', 5);
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
        Schema::dropIfExists('recipe_materials');
    }
}
