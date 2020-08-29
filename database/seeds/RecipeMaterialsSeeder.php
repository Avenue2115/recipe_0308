<?php

use Illuminate\Database\Seeder;

class RecipeMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        DB::table('recipe_materials')->truncate();

        $recipe_materials = [
            [
                'recipe_id' => 1,
                'food_id' => 1,
                'food_unit' => '本',
                'food_amount_to_use' => 0.5,
                'create_date'=> new DateTime(),
                'update_date'=> new DateTime()
            ]
        ];

        //登録実行
        foreach($recipe_materials as $recipe_material){
            \App\RecipeMaterial::create($recipe_material);
        }
    }
}
