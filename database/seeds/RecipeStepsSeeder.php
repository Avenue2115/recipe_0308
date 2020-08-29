<?php

use Illuminate\Database\Seeder;

class RecipeStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        DB::table('recipe_steps')->truncate();

        $recipe_steps = [
            [
                'recipe_id' => 1,
                'number_of_steps' => 1,
                'text_of_steps' => 'テスト用のテキスト',
                'create_date'=> new DateTime(),
                'update_date'=> new DateTime()
            ]
        ];

        //登録実行
        foreach($recipe_steps as $recipe_step){
            \App\RecipeStep::create($recipe_step);
        }
    }
}
