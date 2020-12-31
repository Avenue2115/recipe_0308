<?php

use Illuminate\Database\Seeder;

class RecipeSummariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        DB::table('recipe_summaries')->truncate();

        //データ準備
        $recipesummaries = [
            [
                "title" => "チャーハン",
                "description" => "一般的なチャーハンのレシピ",
                "total_energy"=> 407,
                "comment" => "テスト用のレシピ",
                'create_date'=> new DateTime(),
                'update_date'=> new DateTime()
            ],
            [
                "title" => "麻婆豆腐",
                "description" => "一般的な麻婆豆腐のレシピ",
                "total_energy"=> 342,
                "comment" => "テスト用のレシピ",
                'create_date'=> new DateTime(),
                'update_date'=> new DateTime()
            ],
            [
                "title" => "青椒肉絲",
                "description" => "一般的な青椒肉絲のレシピ",
                "total_energy"=> 163,
                "comment" => "テスト用のレシピ",
                'create_date'=> new DateTime(),
                'update_date'=> new DateTime()
            ]
        ];
        //登録実行
        foreach($recipesummaries as $recipesummary){
            \App\RecipeSummary::create($recipesummary);
        }
    }
}
