<?php

use Illuminate\Database\Seeder;
use App\MajorClassification;

class MajorClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete
        DB::table('master_ingredient_major_classification')->truncate();

        //insert
        $classifications = [
            [
                'name' => '廃棄率',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'name' => '一般成分',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'name' => '無機質',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'name' => 'ビタミン',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'name' => 'ビタミンA',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ],[
                'name' => 'ビタミンE',
                'create_date'=> new DateTime(),
                'update_date'=> null
            ]
        ];

        foreach($classifications as $classification){
            \App\MajorClassification::create($classification);
        }
    }
}
