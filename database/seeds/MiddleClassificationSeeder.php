<?php

use Illuminate\Database\Seeder;
use App\MiddleClassification;

class MiddleClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //delete
        DB::table('master_ingredient_middle_classification')->truncate();

        //データ準備
        $classifications = [
            ['name'=>'REFUSE','another_name'=>'REFUSE','unit' => '%','create_date'=> new DateTime(),'update_date'=> null],
            ['name'=>'エネルギー（kcal）','another_name'=>'ENERC_','unit'=>'kJ/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'KCAL','another_name'=>'kcal/100 g','unit'=>'kJ/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'エネルギー（kJ)','another_name'=>'ENERC','unit'=>'kJ/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'水   分','another_name'=>'WATER','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'たんぱく質','another_name'=>'－','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'アミノ酸組成によるたんぱく質','another_name'=>'PROTCAA','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'脂   質','another_name'=>'－','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'トリアシルグリセロール当量','another_name'=>'FATNLEA','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'飽和脂肪酸','another_name'=>'FASAT','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'一価不飽和脂肪酸','another_name'=>'FAMS','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'多価不飽和脂肪酸','another_name'=>'FAPU','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'コレステロール','another_name'=>'CHOLE','unit'=>'mg/100 ｇ','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'炭水化物','another_name'=>'－','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'利用可能炭水化物（単糖当量）','another_name'=>'CHOAVLM','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'水溶性食物繊維','another_name'=>'FIBSOL','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'不溶性食物繊維','another_name'=>'FIBINS','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'食物繊維総量','another_name'=>' FIBTG','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'灰   分','another_name'=>'ASH','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ナトリウム','another_name'=>'NA','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'カリウム','another_name'=>'K','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'カルシウム','another_name'=>'CA','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'マグネシウム','another_name'=>'MG','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'リン','another_name'=>'P','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'鉄','another_name'=>'FE','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'亜鉛','another_name'=>'ZN','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'銅','another_name'=>'CU','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'マンガン','another_name'=>'MN','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ヨウ素','another_name'=>'ID','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'セレン','another_name'=>'SE','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'クロム','another_name'=>'CR','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'モリブデン','another_name'=>'MO','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'レチノール','another_name'=>'RETOL','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'α-カロテン','another_name'=>'CARTA ','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'β-カロテン','another_name'=>'CARTB ','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'β-クリプトキサンチン','another_name'=>'CRYPXB','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'β-カロテン当量','another_name'=>'CARTBEQ','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'レチノール活性当量','another_name'=>'VITA_RAE','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビタミンD','another_name'=>'VITD','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'α-トコフェロール','another_name'=>'TOCPHA','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'β-トコフェロール','another_name'=>'TOCPHB ','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'γ-トコフェロール','another_name'=>'TOCPHG','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'δ-トコフェロール','another_name'=>'TOCPHD','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビタミンK','another_name'=>'VITK','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビタミンB1','another_name'=>'THIAHCL ','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビタミンB2','another_name'=>'RIBF','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ナイアシン','another_name'=>'NIA','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビタミンB6','another_name'=>'VITB6A','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビタミンB12','another_name'=>'VITB12','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'葉酸','another_name'=>'FOL','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'パントテン酸','another_name'=>'PANTAC','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビオチン','another_name'=>'BIOT','unit'=>'μg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ビタミンC','another_name'=>'VITC','unit'=>'mg/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'食塩相当量','another_name'=>'NACL_EQ','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'アルコール','another_name'=>'ALC','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'硝酸イオン','another_name'=>'NITRA ','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'テオブロミン','another_name'=>'THEBRN','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'カフェイン','another_name'=>'CAFFN ','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'タンニン','another_name'=>'TAN','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'ポリフェノール','another_name'=>'POLYPHENT','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'酢酸','another_name'=>'ACEAC','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'調理油','another_name'=>'－','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'有機酸','another_name'=>'OA','unit'=>'g/100 g','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'重量変化率','another_name'=>'－','unit'=>'%','create_date'=> new DateTime(), 'update_date'=> null],
            ['name'=>'備考','another_name'=>'－','unit'=>'','create_date'=> new DateTime(), 'update_date'=> null]
        ];

        //登録実行
        foreach($classifications as $classification){
            \App\MiddleClassification::create($classification);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
