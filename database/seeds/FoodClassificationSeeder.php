<?php

use Illuminate\Database\Seeder;
use App\FoodClassification;

class FoodClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete
        DB::table('master_ingredient_middle_classification')->truncate();

        //insert
        $classifications = [
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 1,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>358,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 2,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1498,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 3,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>13.5,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 4,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>12.7,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 5,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>12.5,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 6,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>6.0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 7,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>5.0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 8,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1.18,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 9,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1.48,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 10,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>2.10,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 11,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 12,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>64.9,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 13,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>63.5,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 14,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1.1,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 15,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>6.3,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 16,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>7.4,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 17,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>2.9,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 18,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 19,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>600,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 20,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>160,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 21,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>270,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 22,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>540,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 23,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>9.4,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 24,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>5.8,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 25,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0.92,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 26,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>6.14,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 27,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 28,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>13,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 29,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>7,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 30,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>59,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 31,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 32,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 33,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>2,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 34,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 35,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>2,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 36,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'Tr','major_classification_id' => 1,'middle_classification_id' => 37,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 38,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1.3,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 39,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>2.3,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 40,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0.2,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 41,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0.7,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 42,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 43,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0.04,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 44,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0.14,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 45,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1.0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 46,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0.58,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 47,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 48,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>130,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 49,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>1.69,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 50,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>16.3,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 51,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 52,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 53,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'','major_classification_id' => 1,'middle_classification_id' => 54,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 55,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 56,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 57,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 58,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 59,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 60,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 61,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 62,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 63,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 64,'create_date'=> new DateTime(),'update_date'=> null],
            ['value'=>0,'text_value'=>'-','major_classification_id' => 1,'middle_classification_id' => 65,'create_date'=> new DateTime(),'update_date'=> null]
        ];

        //登録実行
        foreach($classifications as $classification){
            \App\FoodClassification::create($classification);
        }
    }
}
