<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        DB::table('foods')->truncate();

        //データ準備
        $foods = [
            [
                'name' => '玄米',
                'energy'=> 164,
                'protein'=> 4.1,
                'lipid'=> 1.0,
                'carbohydrate'=> 34.3,
                'salt_equivalent'=> 0,
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'name' => '半つき米',
                'energy'=> 166,
                'protein'=> 3.8,
                'lipid'=> 0.6,
                'carbohydrate'=> 35.3,
                'salt_equivalent'=> 0,
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'name' => '七分つき米',
                'energy'=> 168,
                'protein'=> 3.6,
                'lipid'=> 0.5,
                'carbohydrate'=> 35.7,
                'salt_equivalent'=> 0,
                'create_date'=> new DateTime(),
                'update_date'=> null
            ]

        ];

        //登録実行
        foreach($foods as $food){
            \App\Food::create($food);
        }
    }
}
