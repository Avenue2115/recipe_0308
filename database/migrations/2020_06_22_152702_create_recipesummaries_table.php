<?php
/**
 * レシピ概要マスタマイグレーションファイル
 *
 *
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('total_energy');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('recipe_summaries');

    }
}
