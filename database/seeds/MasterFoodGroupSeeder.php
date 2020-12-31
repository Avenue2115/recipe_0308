<?php

use Illuminate\Database\Seeder;

class MasterFoodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        DB::table('master_food_group')->truncate();

        //データ準備
        $foodGroups = [
            [
                'food_group_id' => 1,
                'food_group_name' => '穀類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 2,
                'food_group_name' => '芋及びでんぷん類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 3,
                'food_group_name' => '砂糖及び甘味類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 4,
                'food_group_name' => '豆類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 5,
                'food_group_name' => '種実類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 6,
                'food_group_name' => '野菜類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 7,
                'food_group_name' => '果実類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 8,
                'food_group_name' => 'きのこ類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 9,
                'food_group_name' => '藻類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 10,
                'food_group_name' => '魚介類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 11,
                'food_group_name' => '肉類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 12,
                'food_group_name' => '卵類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 13,
                'food_group_name' => '乳類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 14,
                'food_group_name' => '油脂類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 15,
                'food_group_name' => '菓子類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 16,
                'food_group_name' => 'し好飲料類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 17,
                'food_group_name' => '調味料及び香辛料類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'food_group_id' => 18,
                'food_group_name' => '調理加工食品類',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ]

        ];

        //登録実行
        foreach($foodGroups as $foodGroup){
            \App\MasterFoodGroup::create($foodGroup);
        }
    }
}
