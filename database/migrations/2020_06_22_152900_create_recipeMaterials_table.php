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
            $table->foreignId('recipe_summary_id')->constrained('recipe_summaries');
            $table->foreignId('master_foods_id')->constrained('master_foods');
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
        Schema::table('recipe_summaries', function (Blueprint $table) {
            $table->dropForeign(['recipe_materials_recipe_summary_id_foreign']);
        });

        Schema::dropIfExists('recipe_materials');
    }
}
