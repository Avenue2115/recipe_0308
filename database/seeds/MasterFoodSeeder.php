<?php

use Illuminate\Database\Seeder;

class MasterFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //テーブルのクリア
        DB::table('master_foods')->truncate();
        //データ準備
        //Todo:食品群名を明記する
        $foods = [
            [
                "id"=> 1001,
                "food_group_id"=> 1,
                "food_name"=> "アマランサス　玄穀",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1002,
                "food_group_id"=> 1,
                "food_name"=> "あわ　精白粒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1003,
                "food_group_id"=> 1,
                "food_name"=> "あわ　あわもち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1004,
                "food_group_id"=> 1,
                "food_name"=> "えんばく オートミール",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1005,
                "food_group_id"=> 1,
                "food_name"=> "おおむぎ 七分つき押麦",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1006,
                "food_group_id"=> 1,
                "food_name"=> "おおむぎ　押麦",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1007,
                "food_group_id"=> 1,
                "food_name"=> "おおむぎ　米粒麦",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1008,
                "food_group_id"=> 1,
                "food_name"=> "おおむぎ　大麦めん　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1009,
                "food_group_id"=> 1,
                "food_name"=> "おおむぎ　大麦めん　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1010,
                "food_group_id"=> 1,
                "food_name"=> "おおむぎ　麦こがし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1011,
                "food_group_id"=> 1,
                "food_name"=> "きび　精白粒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1012,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［玄穀］　国産　普通",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1013,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［玄穀］　輸入　軟質",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1014,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［玄穀］　輸入　硬質",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1015,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　薄力粉　1等",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1016,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　薄力粉　2等",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1018,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　中力粉　1等",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1019,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　中力粉　2等",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1020,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　強力粉　1等",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1021,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　強力粉　2等",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1023,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　強力粉　全粒粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1146,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　プレミックス粉　お好み焼き用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1024,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　プレミックス粉　ホットケーキ用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1147,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　プレミックス粉　から揚げ用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1025,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［小麦粉］　プレミックス粉　天ぷら用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1026,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　食パン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1028,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　コッペパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1030,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　乾パン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1031,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　フランスパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1032,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　ライ麦パン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1033,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　ぶどうパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1034,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　ロールパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1035,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　クロワッサン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1036,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　イングリッシュマフィン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1037,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　ナン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1148,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［パン類］　ベーグル",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1038,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　うどん　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1039,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　うどん　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1041,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　干しうどん　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1042,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　干しうどん　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1043,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　そうめん・ひやむぎ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1044,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　そうめん・ひやむぎ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1045,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　手延そうめん・手延ひやむぎ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1046,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［うどん・そうめん類］　手延そうめん・手延ひやむぎ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1047,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　中華めん　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1048,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　中華めん　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1049,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　蒸し中華めん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1050,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　干し中華めん　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1051,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　干し中華めん　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1052,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　沖縄そば　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1053,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　沖縄そば　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1054,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　干し沖縄そば　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1055,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［中華めん類］　干し沖縄そば　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1056,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［即席めん類］　即席中華めん　油揚げ味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1057,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［即席めん類］　即席中華めん　油揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1058,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［即席めん類］　即席中華めん　非油揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1059,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［即席めん類］　中華スタイル即席カップめん　油揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1060,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［即席めん類］　中華スタイル即席カップめん　油揚げ　焼きそば",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1061,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［即席めん類］　中華スタイル即席カップめん　非油揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1062,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［即席めん類］　和風スタイル即席カップめん　油揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1063,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［マカロニ・スパゲッティ類］　マカロニ・スパゲッティ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1064,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［マカロニ・スパゲッティ類］　マカロニ・スパゲッティ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1149,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［マカロニ・スパゲッティ類］　生パスタ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1065,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［ふ類］　生ふ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1066,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［ふ類］　焼きふ　釜焼きふ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1067,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［ふ類］　焼きふ　板ふ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1068,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［ふ類］　焼きふ　車ふ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1070,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　小麦はいが",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1071,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　小麦たんぱく　粉末状",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1072,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　小麦たんぱく　粒状",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1073,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　小麦たんぱく　ペースト状",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1074,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　ぎょうざの皮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1075,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　しゅうまいの皮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1076,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　ピザ生地",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1069,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　ちくわぶ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1077,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　パン粉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1078,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　パン粉　半生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1079,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　パン粉　乾燥",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1150,
                "food_group_id"=> 1,
                "food_name"=> "こむぎ　［その他］　冷めん　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1080,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1081,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　半つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1082,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　七分つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1083,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　精白米　うるち米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1151,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　精白米　もち米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1152,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　精白米　インディカ米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1084,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　はいが精米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1153,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲穀粒］　発芽玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1085,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲めし］　玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1086,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲めし］　半つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1087,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲めし］　七分つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1088,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲めし］　精白米　うるち米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1154,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲めし］　精白米　もち米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1089,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲めし］　はいが精米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1155,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲めし］　発芽玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1090,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲全かゆ］　玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1091,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲全かゆ］　半つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1092,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲全かゆ］　七分つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1093,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲全かゆ］　精白米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1094,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲五分かゆ］　玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1095,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲五分かゆ］　半つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1096,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲五分かゆ］　七分つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1097,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲五分かゆ］　精白米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1098,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲おもゆ］　玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1099,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲おもゆ］　半つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1100,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲おもゆ］　七分つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1101,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［水稲おもゆ］　精白米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1102,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲穀粒］　玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1103,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲穀粒］　半つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1104,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲穀粒］　七分つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1105,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲穀粒］　精白米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1106,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲めし］　玄米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1107,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲めし］　半つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1108,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲めし］　七分つき米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1109,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［陸稲めし］　精白米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1110,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　アルファ化米　一般用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1156,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　アルファ化米　学校給食用強化品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1111,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　おにぎり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1112,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　焼きおにぎり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1113,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　きりたんぽ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1114,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　上新粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1157,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　玄米粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1158,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　米粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1159,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　米粉パン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1160,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　米粉めん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1115,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　ビーフン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1116,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［うるち米製品］　米こうじ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1117,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［もち米製品］　もち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1118,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［もち米製品］　赤飯",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1119,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［もち米製品］　あくまき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1120,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［もち米製品］　白玉粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1121,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［もち米製品］　道明寺粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1161,
                "food_group_id"=> 1,
                "food_name"=> "こめ　［その他］　米ぬか",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1122,
                "food_group_id"=> 1,
                "food_name"=> "そば　そば粉　全層粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1123,
                "food_group_id"=> 1,
                "food_name"=> "そば　そば粉　内層粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1124,
                "food_group_id"=> 1,
                "food_name"=> "そば　そば粉　中層粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1125,
                "food_group_id"=> 1,
                "food_name"=> "そば　そば粉　表層粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1126,
                "food_group_id"=> 1,
                "food_name"=> "そば　そば米",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1127,
                "food_group_id"=> 1,
                "food_name"=> "そば　そば　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1128,
                "food_group_id"=> 1,
                "food_name"=> "そば　そば　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1129,
                "food_group_id"=> 1,
                "food_name"=> "そば　干しそば　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1130,
                "food_group_id"=> 1,
                "food_name"=> "そば　干しそば　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1131,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　玄穀　黄色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1162,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　玄穀　白色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1132,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　コーンミール　黄色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1163,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　コーンミール　白色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1133,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　コーングリッツ　黄色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1164,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　コーングリッツ　白色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1134,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　コーンフラワー　黄色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1165,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　コーンフラワー　白色種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1135,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　ジャイアントコーン　フライ　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1136,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　ポップコーン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1137,
                "food_group_id"=> 1,
                "food_name"=> "とうもろこし　コーンフレーク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1138,
                "food_group_id"=> 1,
                "food_name"=> "はとむぎ　精白粒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1139,
                "food_group_id"=> 1,
                "food_name"=> "ひえ　精白粒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1140,
                "food_group_id"=> 1,
                "food_name"=> "もろこし　玄穀",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1141,
                "food_group_id"=> 1,
                "food_name"=> "もろこし　精白粒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1142,
                "food_group_id"=> 1,
                "food_name"=> "ライむぎ　全粒粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1143,
                "food_group_id"=> 1,
                "food_name"=> "ライむぎ　ライ麦粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 1166,
                "food_group_id"=> 1,
                "food_name"=> "穀類混合品　五穀",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2001,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞きくいも　塊茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2041,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞きくいも　塊茎　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2002,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞こんにゃく　精粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2003,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞こんにゃく　板こんにゃく　精粉こんにゃく",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2004,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞こんにゃく　板こんにゃく　生いもこんにゃく",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2042,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞こんにゃく　赤こんにゃく",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2043,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞こんにゃく　凍みこんにゃく　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2044,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞こんにゃく　凍みこんにゃく　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2005,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞こんにゃく　しらたき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2006,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）さつまいも　塊根　皮むき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2007,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）さつまいも　塊根　皮むき　蒸し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2008,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）さつまいも　塊根　皮むき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2045,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）さつまいも　塊根　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2046,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）さつまいも　塊根　皮つき　蒸し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2047,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）さつまいも　塊根　皮つき　天ぷら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2009,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）さつまいも　蒸し切干",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2048,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）むらさきいも　塊根　皮むき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2049,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さつまいも類）むらさきいも　塊根　皮むき　蒸し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2010,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　さといも　球茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2011,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　さといも　球茎　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2012,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　さといも　球茎　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2050,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　セレベス　球茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2051,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　セレベス　球茎　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2052,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　たけのこいも　球茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2053,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　たけのこいも　球茎　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2013,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　みずいも　球茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2014,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　みずいも　球茎　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2015,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　やつがしら　球茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2016,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（さといも類）　やつがしら　球茎　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2017,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞じゃがいも　塊茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2018,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞じゃがいも　塊茎　蒸し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2019,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞じゃがいも　塊茎　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2020,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞じゃがいも　フライドポテト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2021,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞じゃがいも　乾燥マッシュポテト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2054,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞ヤーコン　塊根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2055,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞ヤーコン　塊根　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2022,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（やまのいも類）　ながいも　いちょういも　塊根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2023,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（やまのいも類）　ながいも　ながいも　塊根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2024,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（やまのいも類）　ながいも　ながいも　塊根　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2025,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（やまのいも類）　ながいも　やまといも　塊根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2026,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（やまのいも類）　じねんじょ　塊根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2027,
                "food_group_id"=> 2,
                "food_name"=> "＜いも類＞（やまのいも類）　だいじょ　塊根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2028,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　キャッサバでん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2029,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　くずでん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2030,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　米でん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2031,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　小麦でん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2032,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　サゴでん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2033,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　さつまいもでん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2034,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　じゃがいもでん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2035,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉類）　とうもろこしでん粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2036,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　くずきり　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2037,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　くずきり　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2056,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　ごま豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2038,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　タピオカパール　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2057,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　タピオカパール　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2058,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　でん粉めん　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2059,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　でん粉めん　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2060,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　でん粉めん　乾　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2039,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　はるさめ　緑豆はるさめ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2061,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　はるさめ　緑豆はるさめ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2040,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　はるさめ　普通はるさめ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 2062,
                "food_group_id"=> 2,
                "food_name"=> "＜でん粉・でん粉製品＞（でん粉製品）　はるさめ　普通はるさめ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3001,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　黒砂糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3002,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　和三盆糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3003,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　車糖　上白糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3004,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　車糖　三温糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3005,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　ざらめ糖　グラニュー糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3006,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　ざらめ糖　白ざら糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3007,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　ざらめ糖　中ざら糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3008,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　加工糖　角砂糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3009,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　加工糖　氷砂糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3010,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　加工糖　コーヒーシュガー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3011,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　加工糖　粉糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3012,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　液糖　しょ糖型液糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3013,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　液糖　転化型液糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3014,
                "food_group_id"=> 3,
                "food_name"=> "（砂糖類）　氷糖みつ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3015,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　粉あめ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3024,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　水あめ　酵素糖化",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3025,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　水あめ　酸糖化",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3017,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　ぶどう糖　全糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3018,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　ぶどう糖　含水結晶",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3019,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　ぶどう糖　無水結晶",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3020,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　果糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3026,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　異性化液糖　ぶどう糖果糖液糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3027,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　異性化液糖　果糖ぶどう糖液糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3028,
                "food_group_id"=> 3,
                "food_name"=> "（でん粉糖類）　異性化液糖　高果糖液糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3029,
                "food_group_id"=> 3,
                "food_name"=> "（その他）　黒蜜",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3022,
                "food_group_id"=> 3,
                "food_name"=> "（その他）　はちみつ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 3023,
                "food_group_id"=> 3,
                "food_name"=> "（その他）　メープルシロップ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],

            [
                "id"=> 4001,
                "food_group_id"=> 4,
                "food_name"=> "あずき　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4002,
                "food_group_id"=> 4,
                "food_name"=> "あずき　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4003,
                "food_group_id"=> 4,
                "food_name"=> "あずき　ゆで小豆缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4004,
                "food_group_id"=> 4,
                "food_name"=> "あずき　あん　こしあん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4005,
                "food_group_id"=> 4,
                "food_name"=> "あずき　あん　さらしあん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4006,
                "food_group_id"=> 4,
                "food_name"=> "あずき　あん　つぶしあん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4007,
                "food_group_id"=> 4,
                "food_name"=> "いんげんまめ　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4008,
                "food_group_id"=> 4,
                "food_name"=> "いんげんまめ　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4009,
                "food_group_id"=> 4,
                "food_name"=> "いんげんまめ　うずら豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4010,
                "food_group_id"=> 4,
                "food_name"=> "いんげんまめ　こしあん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4011,
                "food_group_id"=> 4,
                "food_name"=> "いんげんまめ　豆きんとん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4012,
                "food_group_id"=> 4,
                "food_name"=> "えんどう　全粒　青えんどう　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4074,
                "food_group_id"=> 4,
                "food_name"=> "えんどう　全粒　赤えんどう　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4013,
                "food_group_id"=> 4,
                "food_name"=> "えんどう　全粒　青えんどう　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4075,
                "food_group_id"=> 4,
                "food_name"=> "えんどう　全粒　赤えんどう　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4014,
                "food_group_id"=> 4,
                "food_name"=> "えんどう　グリンピース（揚げ豆）",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4015,
                "food_group_id"=> 4,
                "food_name"=> "えんどう　塩豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4016,
                "food_group_id"=> 4,
                "food_name"=> "えんどう　うぐいす豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4017,
                "food_group_id"=> 4,
                "food_name"=> "ささげ　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4018,
                "food_group_id"=> 4,
                "food_name"=> "ささげ　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4019,
                "food_group_id"=> 4,
                "food_name"=> "そらまめ　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4020,
                "food_group_id"=> 4,
                "food_name"=> "そらまめ　フライビーンズ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4021,
                "food_group_id"=> 4,
                "food_name"=> "そらまめ　おたふく豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4022,
                "food_group_id"=> 4,
                "food_name"=> "そらまめ　ふき豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4076,
                "food_group_id"=> 4,
                "food_name"=> "そらまめ　しょうゆ豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4023,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　全粒　国産　黄大豆　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4077,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　全粒　国産　黒大豆　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4024,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　全粒　国産　黄大豆　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4025,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　全粒　米国産　黄大豆　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4026,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　全粒　中国産　黄大豆　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4027,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　全粒　ブラジル産　黄大豆　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4078,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　いり大豆　黄大豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4079,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　いり大豆　黒大豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4080,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　いり大豆　青大豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4028,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　水煮缶詰　黄大豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4081,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　蒸し大豆　黄大豆 ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4029,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　きな粉　全粒大豆　黄大豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4082,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　きな粉　全粒大豆　青大豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4030,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　きな粉　脱皮大豆　黄大豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4083,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　大豆はいが",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4031,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［全粒・全粒製品］　ぶどう豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4032,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　木綿豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4033,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　絹ごし豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4034,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　ソフト豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4035,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　充てん豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4036,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　沖縄豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4037,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　ゆし豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4038,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　焼き豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4039,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　生揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4040,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　油揚げ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4084,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　油揚げ　油抜き　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4085,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　油揚げ　油抜き　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4086,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　油揚げ　油抜き　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4041,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　がんもどき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4042,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　凍り豆腐　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4087,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　凍り豆腐　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4043,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　豆腐よう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4044,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　豆腐竹輪　蒸し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4045,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　豆腐竹輪　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4088,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［豆腐・油揚げ類］　ろくじょう豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4046,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［納豆類］　糸引き納豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4047,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［納豆類］　挽きわり納豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4048,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［納豆類］　五斗納豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4049,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［納豆類］　寺納豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4051,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　おから　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4089,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　おから　乾燥",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4052,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　豆乳　豆乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4053,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　豆乳　調製豆乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4054,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　豆乳　豆乳飲料・麦芽コーヒー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4055,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　大豆たんぱく　粒状大豆たんぱく",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4056,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　大豆たんぱく　濃縮大豆たんぱく",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4057,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　大豆たんぱく　分離大豆たんぱく　塩分無調整タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4090,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　大豆たんぱく　分離大豆たんぱく　塩分調整タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4058,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　大豆たんぱく　繊維状大豆たんぱく",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4059,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　湯葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4060,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　湯葉　干し　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4091,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　湯葉　干し　湯戻し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4061,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　金山寺みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4062,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　ひしおみそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4063,
                "food_group_id"=> 4,
                "food_name"=> "だいず　［その他］　テンペ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4064,
                "food_group_id"=> 4,
                "food_name"=> "つるあずき　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4092,
                "food_group_id"=> 4,
                "food_name"=> "つるあずき　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4065,
                "food_group_id"=> 4,
                "food_name"=> "ひよこまめ　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4066,
                "food_group_id"=> 4,
                "food_name"=> "ひよこまめ　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4067,
                "food_group_id"=> 4,
                "food_name"=> "ひよこまめ　全粒　フライ　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4068,
                "food_group_id"=> 4,
                "food_name"=> "べにばないんげん　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4069,
                "food_group_id"=> 4,
                "food_name"=> "べにばないんげん　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4070,
                "food_group_id"=> 4,
                "food_name"=> "らいまめ　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4093,
                "food_group_id"=> 4,
                "food_name"=> "らいまめ　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4071,
                "food_group_id"=> 4,
                "food_name"=> "りょくとう　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4072,
                "food_group_id"=> 4,
                "food_name"=> "りょくとう　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4073,
                "food_group_id"=> 4,
                "food_name"=> "レンズまめ　全粒　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 4094,
                "food_group_id"=> 4,
                "food_name"=> "レンズまめ　全粒　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5001,
                "food_group_id"=> 5,
                "food_name"=> "アーモンド　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5002,
                "food_group_id"=> 5,
                "food_name"=> "アーモンド　フライ 味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5040,
                "food_group_id"=> 5,
                "food_name"=> "アーモンド　いり　無塩",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5003,
                "food_group_id"=> 5,
                "food_name"=> "あさ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5041,
                "food_group_id"=> 5,
                "food_name"=> "あまに　いり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5004,
                "food_group_id"=> 5,
                "food_name"=> "えごま　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5005,
                "food_group_id"=> 5,
                "food_name"=> "カシューナッツ　フライ　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5006,
                "food_group_id"=> 5,
                "food_name"=> "かぼちゃ　いり　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5007,
                "food_group_id"=> 5,
                "food_name"=> "かや　いり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5008,
                "food_group_id"=> 5,
                "food_name"=> "ぎんなん　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5009,
                "food_group_id"=> 5,
                "food_name"=> "ぎんなん　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5010,
                "food_group_id"=> 5,
                "food_name"=> "（くり類）　日本ぐり　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5011,
                "food_group_id"=> 5,
                "food_name"=> "（くり類）　日本ぐり　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5012,
                "food_group_id"=> 5,
                "food_name"=> "（くり類）　日本ぐり　甘露煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5013,
                "food_group_id"=> 5,
                "food_name"=> "（くり類）　中国ぐり　甘ぐり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5014,
                "food_group_id"=> 5,
                "food_name"=> "くるみ　いり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5015,
                "food_group_id"=> 5,
                "food_name"=> "けし　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5016,
                "food_group_id"=> 5,
                "food_name"=> "ココナッツ　ココナッツパウダー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5017,
                "food_group_id"=> 5,
                "food_name"=> "ごま　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5018,
                "food_group_id"=> 5,
                "food_name"=> "ごま　いり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5019,
                "food_group_id"=> 5,
                "food_name"=> "ごま　むき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5042,
                "food_group_id"=> 5,
                "food_name"=> "ごま　ねり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5020,
                "food_group_id"=> 5,
                "food_name"=> "しい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5021,
                "food_group_id"=> 5,
                "food_name"=> "すいか　いり　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5022,
                "food_group_id"=> 5,
                "food_name"=> "とち　蒸し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5023,
                "food_group_id"=> 5,
                "food_name"=> "はす　未熟　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5024,
                "food_group_id"=> 5,
                "food_name"=> "はす　成熟　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5043,
                "food_group_id"=> 5,
                "food_name"=> "はす　成熟　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5025,
                "food_group_id"=> 5,
                "food_name"=> "ひし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5026,
                "food_group_id"=> 5,
                "food_name"=> "ピスタチオ　いり　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5027,
                "food_group_id"=> 5,
                "food_name"=> "ひまわり　フライ　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5028,
                "food_group_id"=> 5,
                "food_name"=> "ブラジルナッツ　フライ　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5029,
                "food_group_id"=> 5,
                "food_name"=> "ヘーゼルナッツ　フライ　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5030,
                "food_group_id"=> 5,
                "food_name"=> "ペカン　フライ　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5031,
                "food_group_id"=> 5,
                "food_name"=> "マカダミアナッツ　いり　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5032,
                "food_group_id"=> 5,
                "food_name"=> "まつ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5033,
                "food_group_id"=> 5,
                "food_name"=> "まつ　いり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5034,
                "food_group_id"=> 5,
                "food_name"=> "らっかせい　乾　大粒種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5044,
                "food_group_id"=> 5,
                "food_name"=> "らっかせい　乾　小粒種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5035,
                "food_group_id"=> 5,
                "food_name"=> "らっかせい　いり　大粒種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5045,
                "food_group_id"=> 5,
                "food_name"=> "らっかせい　いり　小粒種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5036,
                "food_group_id"=> 5,
                "food_name"=> "らっかせい　バターピーナッツ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 5037,
                "food_group_id"=> 5,
                "food_name"=> "らっかせい　ピーナッツバター",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6001,
                "food_group_id"=> 6,
                "food_name"=> "アーティチョーク　花らい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6002,
                "food_group_id"=> 6,
                "food_name"=> "アーティチョーク　花らい　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6003,
                "food_group_id"=> 6,
                "food_name"=> "あさつき　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6004,
                "food_group_id"=> 6,
                "food_name"=> "あさつき　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6005,
                "food_group_id"=> 6,
                "food_name"=> "あしたば　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6006,
                "food_group_id"=> 6,
                "food_name"=> "あしたば　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6007,
                "food_group_id"=> 6,
                "food_name"=> "アスパラガス　若茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6008,
                "food_group_id"=> 6,
                "food_name"=> "アスパラガス　若茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6327,
                "food_group_id"=> 6,
                "food_name"=> "アスパラガス　若茎　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6009,
                "food_group_id"=> 6,
                "food_name"=> "アスパラガス　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6328,
                "food_group_id"=> 6,
                "food_name"=> "アロエ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6010,
                "food_group_id"=> 6,
                "food_name"=> "いんげんまめ　さやいんげん　若ざや　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6011,
                "food_group_id"=> 6,
                "food_name"=> "いんげんまめ　さやいんげん　若ざや　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6012,
                "food_group_id"=> 6,
                "food_name"=> "（うど類）　うど　茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6013,
                "food_group_id"=> 6,
                "food_name"=> "（うど類）　うど　茎　水さらし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6014,
                "food_group_id"=> 6,
                "food_name"=> "（うど類）　やまうど　茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6015,
                "food_group_id"=> 6,
                "food_name"=> "えだまめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6016,
                "food_group_id"=> 6,
                "food_name"=> "えだまめ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6017,
                "food_group_id"=> 6,
                "food_name"=> "えだまめ　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6018,
                "food_group_id"=> 6,
                "food_name"=> "エンダイブ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6019,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　トウミョウ　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6329,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　トウミョウ　芽ばえ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6330,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　トウミョウ　芽ばえ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6331,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　トウミョウ　芽ばえ　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6020,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　さやえんどう　若ざや　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6021,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　さやえんどう　若ざや　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6022,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　スナップえんどう　若ざや　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6023,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　グリンピース　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6024,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　グリンピース　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6025,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　グリンピース　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6026,
                "food_group_id"=> 6,
                "food_name"=> "（えんどう類）　グリンピース　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6027,
                "food_group_id"=> 6,
                "food_name"=> "おおさかしろな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6028,
                "food_group_id"=> 6,
                "food_name"=> "おおさかしろな　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6029,
                "food_group_id"=> 6,
                "food_name"=> "おおさかしろな　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6030,
                "food_group_id"=> 6,
                "food_name"=> "おかひじき　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6031,
                "food_group_id"=> 6,
                "food_name"=> "おかひじき　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6032,
                "food_group_id"=> 6,
                "food_name"=> "オクラ　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6033,
                "food_group_id"=> 6,
                "food_name"=> "オクラ　果実　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6034,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6035,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6036,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　根　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6037,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　根　皮つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6038,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　根　皮むき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6039,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　根　皮むき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6040,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　漬物　塩漬　葉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6041,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　漬物　塩漬　根　皮つき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6042,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　漬物　塩漬　根　皮むき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6043,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　漬物　ぬかみそ漬　葉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6044,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　漬物　ぬかみそ漬　根　皮つき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6045,
                "food_group_id"=> 6,
                "food_name"=> "かぶ　漬物　ぬかみそ漬　根　皮むき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6046,
                "food_group_id"=> 6,
                "food_name"=> "（かぼちゃ類）　日本かぼちゃ　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6047,
                "food_group_id"=> 6,
                "food_name"=> "（かぼちゃ類）　日本かぼちゃ　果実　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6048,
                "food_group_id"=> 6,
                "food_name"=> "（かぼちゃ類）　西洋かぼちゃ　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6049,
                "food_group_id"=> 6,
                "food_name"=> "（かぼちゃ類）　西洋かぼちゃ　果実　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6332,
                "food_group_id"=> 6,
                "food_name"=> "（かぼちゃ類）　西洋かぼちゃ　果実　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6050,
                "food_group_id"=> 6,
                "food_name"=> "（かぼちゃ類）　西洋かぼちゃ　果実　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6051,
                "food_group_id"=> 6,
                "food_name"=> "（かぼちゃ類）　そうめんかぼちゃ　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6052,
                "food_group_id"=> 6,
                "food_name"=> "からしな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6053,
                "food_group_id"=> 6,
                "food_name"=> "からしな　塩漬 ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6054,
                "food_group_id"=> 6,
                "food_name"=> "カリフラワー　花序　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6055,
                "food_group_id"=> 6,
                "food_name"=> "カリフラワー　花序　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6056,
                "food_group_id"=> 6,
                "food_name"=> "かんぴょう　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6057,
                "food_group_id"=> 6,
                "food_name"=> "かんぴょう　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6058,
                "food_group_id"=> 6,
                "food_name"=> "きく　花びら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6059,
                "food_group_id"=> 6,
                "food_name"=> "きく　花びら　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6060,
                "food_group_id"=> 6,
                "food_name"=> "きく　菊のり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6061,
                "food_group_id"=> 6,
                "food_name"=> "（キャベツ類）　キャベツ　結球葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6062,
                "food_group_id"=> 6,
                "food_name"=> "（キャベツ類）　キャベツ　結球葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6333,
                "food_group_id"=> 6,
                "food_name"=> "（キャベツ類）　キャベツ　結球葉　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6063,
                "food_group_id"=> 6,
                "food_name"=> "（キャベツ類）　グリーンボール　結球葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6064,
                "food_group_id"=> 6,
                "food_name"=> "（キャベツ類）　レッドキャベツ　結球葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6065,
                "food_group_id"=> 6,
                "food_name"=> "きゅうり　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6066,
                "food_group_id"=> 6,
                "food_name"=> "きゅうり　漬物　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6067,
                "food_group_id"=> 6,
                "food_name"=> "きゅうり　漬物　しょうゆ漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6068,
                "food_group_id"=> 6,
                "food_name"=> "きゅうり　漬物　ぬかみそ漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6069,
                "food_group_id"=> 6,
                "food_name"=> "きゅうり　漬物　ピクルス　スイート型",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6070,
                "food_group_id"=> 6,
                "food_name"=> "きゅうり　漬物　ピクルス　サワー型",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6071,
                "food_group_id"=> 6,
                "food_name"=> "ぎょうじゃにんにく　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6075,
                "food_group_id"=> 6,
                "food_name"=> "キンサイ　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6076,
                "food_group_id"=> 6,
                "food_name"=> "キンサイ　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6077,
                "food_group_id"=> 6,
                "food_name"=> "クレソン　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6078,
                "food_group_id"=> 6,
                "food_name"=> "くわい　塊茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6079,
                "food_group_id"=> 6,
                "food_name"=> "くわい　塊茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6080,
                "food_group_id"=> 6,
                "food_name"=> "ケール　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6081,
                "food_group_id"=> 6,
                "food_name"=> "コールラビ　球茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6082,
                "food_group_id"=> 6,
                "food_name"=> "コールラビ　球茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6083,
                "food_group_id"=> 6,
                "food_name"=> "こごみ　若芽　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6084,
                "food_group_id"=> 6,
                "food_name"=> "ごぼう　根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6085,
                "food_group_id"=> 6,
                "food_name"=> "ごぼう　根　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6086,
                "food_group_id"=> 6,
                "food_name"=> "こまつな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6087,
                "food_group_id"=> 6,
                "food_name"=> "こまつな　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6088,
                "food_group_id"=> 6,
                "food_name"=> "ザーサイ 　漬物",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6089,
                "food_group_id"=> 6,
                "food_name"=> "さんとうさい　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6090,
                "food_group_id"=> 6,
                "food_name"=> "さんとうさい　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6091,
                "food_group_id"=> 6,
                "food_name"=> "さんとうさい　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6092,
                "food_group_id"=> 6,
                "food_name"=> "しかくまめ　若ざや　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6093,
                "food_group_id"=> 6,
                "food_name"=> "ししとう　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6094,
                "food_group_id"=> 6,
                "food_name"=> "ししとう　果実　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6095,
                "food_group_id"=> 6,
                "food_name"=> "しそ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6096,
                "food_group_id"=> 6,
                "food_name"=> "しそ　実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6097,
                "food_group_id"=> 6,
                "food_name"=> "じゅうろくささげ　若ざや　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6098,
                "food_group_id"=> 6,
                "food_name"=> "じゅうろくささげ　若ざや　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6099,
                "food_group_id"=> 6,
                "food_name"=> "しゅんぎく　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6100,
                "food_group_id"=> 6,
                "food_name"=> "しゅんぎく　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6101,
                "food_group_id"=> 6,
                "food_name"=> "じゅんさい　若葉　水煮びん詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6102,
                "food_group_id"=> 6,
                "food_name"=> "（しょうが類）　葉しょうが　根茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6103,
                "food_group_id"=> 6,
                "food_name"=> "（しょうが類）　しょうが　根茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6104,
                "food_group_id"=> 6,
                "food_name"=> "（しょうが類）　しょうが　漬物　酢漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6105,
                "food_group_id"=> 6,
                "food_name"=> "（しょうが類）　しょうが　漬物　甘酢漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6106,
                "food_group_id"=> 6,
                "food_name"=> "しろうり　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6107,
                "food_group_id"=> 6,
                "food_name"=> "しろうり　漬物　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6108,
                "food_group_id"=> 6,
                "food_name"=> "しろうり　漬物　奈良漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6109,
                "food_group_id"=> 6,
                "food_name"=> "ずいき　生ずいき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6110,
                "food_group_id"=> 6,
                "food_name"=> "ずいき　生ずいき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6111,
                "food_group_id"=> 6,
                "food_name"=> "ずいき　干しずいき　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6112,
                "food_group_id"=> 6,
                "food_name"=> "ずいき　干しずいき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6113,
                "food_group_id"=> 6,
                "food_name"=> "すぐきな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6114,
                "food_group_id"=> 6,
                "food_name"=> "すぐきな　根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6115,
                "food_group_id"=> 6,
                "food_name"=> "すぐきな　すぐき漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6116,
                "food_group_id"=> 6,
                "food_name"=> "ズッキーニ　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6117,
                "food_group_id"=> 6,
                "food_name"=> "せり　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6118,
                "food_group_id"=> 6,
                "food_name"=> "せり　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6119,
                "food_group_id"=> 6,
                "food_name"=> "セロリ　葉柄　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6120,
                "food_group_id"=> 6,
                "food_name"=> "ぜんまい　生ぜんまい　若芽　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6121,
                "food_group_id"=> 6,
                "food_name"=> "ぜんまい　生ぜんまい　若芽　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6122,
                "food_group_id"=> 6,
                "food_name"=> "ぜんまい　干しぜんまい　干し若芽　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6123,
                "food_group_id"=> 6,
                "food_name"=> "ぜんまい　干しぜんまい　干し若芽　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6124,
                "food_group_id"=> 6,
                "food_name"=> "そらまめ　未熟豆　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6125,
                "food_group_id"=> 6,
                "food_name"=> "そらまめ　未熟豆　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6126,
                "food_group_id"=> 6,
                "food_name"=> "タアサイ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6127,
                "food_group_id"=> 6,
                "food_name"=> "タアサイ　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6128,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　かいわれだいこん　芽ばえ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6129,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　葉だいこん　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6130,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　だいこん　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6131,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　だいこん　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6132,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　だいこん　根　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6133,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　だいこん　根　皮つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6134,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　だいこん　根　皮むき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6135,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　だいこん　根　皮むき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6136,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　切干しだいこん　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6334,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　切干しだいこん　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6335,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　切干しだいこん　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6137,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　漬物　ぬかみそ漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6138,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　漬物　たくあん漬　塩押しだいこん漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6139,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　漬物　たくあん漬　干しだいこん漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6140,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　漬物　守口漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6141,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　漬物　べったら漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6142,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　漬物　みそ漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6143,
                "food_group_id"=> 6,
                "food_name"=> "（だいこん類）　漬物　福神漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6144,
                "food_group_id"=> 6,
                "food_name"=> "（たいさい類）　つまみな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6145,
                "food_group_id"=> 6,
                "food_name"=> "（たいさい類）　たいさい　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6146,
                "food_group_id"=> 6,
                "food_name"=> "（たいさい類）　たいさい　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6147,
                "food_group_id"=> 6,
                "food_name"=> "たかな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6148,
                "food_group_id"=> 6,
                "food_name"=> "たかな　たかな漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6149,
                "food_group_id"=> 6,
                "food_name"=> "たけのこ　若茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6150,
                "food_group_id"=> 6,
                "food_name"=> "たけのこ　若茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6151,
                "food_group_id"=> 6,
                "food_name"=> "たけのこ　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6152,
                "food_group_id"=> 6,
                "food_name"=> "たけのこ　めんま　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6153,
                "food_group_id"=> 6,
                "food_name"=> "（たまねぎ類）　たまねぎ　りん茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6154,
                "food_group_id"=> 6,
                "food_name"=> "（たまねぎ類）　たまねぎ　りん茎　水さらし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6155,
                "food_group_id"=> 6,
                "food_name"=> "（たまねぎ類）　たまねぎ　りん茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6336,
                "food_group_id"=> 6,
                "food_name"=> "（たまねぎ類）　たまねぎ　りん茎　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6156,
                "food_group_id"=> 6,
                "food_name"=> "（たまねぎ類）　赤たまねぎ　りん茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6337,
                "food_group_id"=> 6,
                "food_name"=> "（たまねぎ類）　葉たまねぎ　りん茎及び葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6157,
                "food_group_id"=> 6,
                "food_name"=> "たらのめ　若芽　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6158,
                "food_group_id"=> 6,
                "food_name"=> "たらのめ　若芽　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6159,
                "food_group_id"=> 6,
                "food_name"=> "チコリ　若芽　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6160,
                "food_group_id"=> 6,
                "food_name"=> "チンゲンサイ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6161,
                "food_group_id"=> 6,
                "food_name"=> "チンゲンサイ　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6338,
                "food_group_id"=> 6,
                "food_name"=> "チンゲンサイ　葉　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6162,
                "food_group_id"=> 6,
                "food_name"=> "つくし　胞子茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6163,
                "food_group_id"=> 6,
                "food_name"=> "つくし　胞子茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6164,
                "food_group_id"=> 6,
                "food_name"=> "つるな　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6165,
                "food_group_id"=> 6,
                "food_name"=> "つるむらさき　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6166,
                "food_group_id"=> 6,
                "food_name"=> "つるむらさき　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6167,
                "food_group_id"=> 6,
                "food_name"=> "つわぶき　葉柄　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6168,
                "food_group_id"=> 6,
                "food_name"=> "つわぶき　葉柄　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6169,
                "food_group_id"=> 6,
                "food_name"=> "とうがらし　葉･果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6170,
                "food_group_id"=> 6,
                "food_name"=> "とうがらし　葉･果実　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6171,
                "food_group_id"=> 6,
                "food_name"=> "とうがらし　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6172,
                "food_group_id"=> 6,
                "food_name"=> "とうがらし　果実　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6173,
                "food_group_id"=> 6,
                "food_name"=> "とうがん　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6174,
                "food_group_id"=> 6,
                "food_name"=> "とうがん　果実　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6175,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　スイートコーン　未熟種子　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6176,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　スイートコーン　未熟種子　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6339,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　スイートコーン　未熟種子　電子レンジ調理",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6177,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　スイートコーン　未熟種子　穂軸つき　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6178,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　スイートコーン　未熟種子　カーネル　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6179,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　スイートコーン　缶詰　クリームスタイル",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6180,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　スイートコーン　缶詰　ホールカーネルスタイル",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6181,
                "food_group_id"=> 6,
                "food_name"=> "（とうもろこし類）　ヤングコーン　幼雌穂　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6182,
                "food_group_id"=> 6,
                "food_name"=> "（トマト類）　トマト　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6183,
                "food_group_id"=> 6,
                "food_name"=> "（トマト類）　ミニトマト　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6184,
                "food_group_id"=> 6,
                "food_name"=> "（トマト類）　缶詰　ホール　食塩無添加",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6185,
                "food_group_id"=> 6,
                "food_name"=> "（トマト類）　缶詰　トマトジュース　食塩添加",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6340,
                "food_group_id"=> 6,
                "food_name"=> "（トマト類）　缶詰　トマトジュース　食塩無添加",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6186,
                "food_group_id"=> 6,
                "food_name"=> "（トマト類）　缶詰　ミックスジュース　食塩添加",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6341,
                "food_group_id"=> 6,
                "food_name"=> "（トマト類）　缶詰　ミックスジュース　食塩無添加",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6187,
                "food_group_id"=> 6,
                "food_name"=> "トレビス　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6188,
                "food_group_id"=> 6,
                "food_name"=> "とんぶり　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6189,
                "food_group_id"=> 6,
                "food_name"=> "ながさきはくさい　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6190,
                "food_group_id"=> 6,
                "food_name"=> "ながさきはくさい　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6191,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　なす　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6192,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　なす　果実　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6342,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　なす　果実　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6343,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　なす　果実　天ぷら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6193,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　べいなす　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6194,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　べいなす　果実　素揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6195,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　漬物　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6196,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　漬物　ぬかみそ漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6197,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　漬物　こうじ漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6198,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　漬物　からし漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6199,
                "food_group_id"=> 6,
                "food_name"=> "（なす類）　漬物　しば漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6200,
                "food_group_id"=> 6,
                "food_name"=> "なずな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6201,
                "food_group_id"=> 6,
                "food_name"=> "（なばな類）　和種なばな　花らい・茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6202,
                "food_group_id"=> 6,
                "food_name"=> "（なばな類）　和種なばな　花らい・茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6203,
                "food_group_id"=> 6,
                "food_name"=> "（なばな類）　洋種なばな　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6204,
                "food_group_id"=> 6,
                "food_name"=> "（なばな類）　洋種なばな　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6205,
                "food_group_id"=> 6,
                "food_name"=> "にがうり　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6206,
                "food_group_id"=> 6,
                "food_name"=> "にがうり　果実　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7034,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　果実飲料　20 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7035,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　缶詰　果肉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7036,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　缶詰　液汁",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7040,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　ネーブル　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7041,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　バレンシア　米国産　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7042,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　バレンシア　果実飲料　ストレートジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7043,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　バレンシア　果実飲料　濃縮還元ジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7044,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　バレンシア　果実飲料　50 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7045,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　バレンシア　果実飲料　30 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7046,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　バレンシア　マーマレード　高糖度",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7047,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　バレンシア　マーマレード　低糖度",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7161,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オレンジ　福原オレンジ　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7048,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　オロブランコ　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7052,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　かぼす　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7162,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　かわちばんかん　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7163,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　きよみ　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7056,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　きんかん　全果　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7062,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　グレープフルーツ　白肉種　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7164,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　グレープフルーツ　紅肉種　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7063,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　グレープフルーツ　果実飲料　ストレートジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7064,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　グレープフルーツ　果実飲料　濃縮還元ジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7065,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　グレープフルーツ　果実飲料　50 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7066,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　グレープフルーツ　果実飲料　20 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7067,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　グレープフルーツ　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7074,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　さんぼうかん　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7075,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　シークヮーサー　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7076,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　シークヮーサー　10 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7165,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　しらぬひ　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7078,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　すだち　果皮　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7079,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　すだち　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7166,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　せとか　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7085,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　セミノール　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7083,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　だいだい　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7093,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　なつみかん　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7094,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　なつみかん　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7105,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　はっさく　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7167,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　はるみ　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7112,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ひゅうがなつ　じょうのう及びアルベド　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7113,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ひゅうがなつ　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7126,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ぶんたん　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7127,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ぶんたん　ざぼん漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7129,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ぽんかん　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7142,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ゆず　果皮　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7143,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ゆず　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7145,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　ライム　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7155,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　レモン　全果　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7156,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　レモン　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7054,
                "food_group_id"=> 7,
                "food_name"=> "キウイフルーツ　緑肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7168,
                "food_group_id"=> 7,
                "food_name"=> "キウイフルーツ　黄肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],

            [
                "id"=> 6207,
                "food_group_id"=> 6,
                "food_name"=> "（にら類）　にら　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6208,
                "food_group_id"=> 6,
                "food_name"=> "（にら類）　にら　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6344,
                "food_group_id"=> 6,
                "food_name"=> "（にら類）　にら　葉　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6209,
                "food_group_id"=> 6,
                "food_name"=> "（にら類）　花にら　花茎・花らい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6210,
                "food_group_id"=> 6,
                "food_name"=> "（にら類）　黄にら　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6211,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　葉にんじん　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6212,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6213,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　皮つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6214,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　皮むき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6215,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　皮むき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6345,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　皮むき　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6346,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　皮むき　素揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6347,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　皮　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6216,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　根　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6348,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　グラッセ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6217,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　にんじん　ジュース　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6218,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　きんとき　根　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6219,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　きんとき　根　皮つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6220,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　きんとき　根　皮むき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6221,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　きんとき　根　皮むき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6222,
                "food_group_id"=> 6,
                "food_name"=> "（にんじん類）　ミニキャロット　根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6223,
                "food_group_id"=> 6,
                "food_name"=> "（にんにく類）　にんにく　りん茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6349,
                "food_group_id"=> 6,
                "food_name"=> "（にんにく類）　にんにく　りん茎　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6224,
                "food_group_id"=> 6,
                "food_name"=> "（にんにく類）　茎にんにく　花茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6225,
                "food_group_id"=> 6,
                "food_name"=> "（にんにく類）　茎にんにく　花茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6226,
                "food_group_id"=> 6,
                "food_name"=> "（ねぎ類）　根深ねぎ　葉　軟白　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6350,
                "food_group_id"=> 6,
                "food_name"=> "（ねぎ類）　根深ねぎ　葉　軟白　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6351,
                "food_group_id"=> 6,
                "food_name"=> "（ねぎ類）　根深ねぎ　葉　軟白　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6227,
                "food_group_id"=> 6,
                "food_name"=> "（ねぎ類）　葉ねぎ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6352,
                "food_group_id"=> 6,
                "food_name"=> "（ねぎ類）　葉ねぎ　葉　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6228,
                "food_group_id"=> 6,
                "food_name"=> "（ねぎ類）　こねぎ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6229,
                "food_group_id"=> 6,
                "food_name"=> "のざわな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6230,
                "food_group_id"=> 6,
                "food_name"=> "のざわな　漬物　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6231,
                "food_group_id"=> 6,
                "food_name"=> "のざわな　漬物　調味漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6232,
                "food_group_id"=> 6,
                "food_name"=> "のびる　りん茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6233,
                "food_group_id"=> 6,
                "food_name"=> "はくさい　結球葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6234,
                "food_group_id"=> 6,
                "food_name"=> "はくさい　結球葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6235,
                "food_group_id"=> 6,
                "food_name"=> "はくさい　漬物　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6236,
                "food_group_id"=> 6,
                "food_name"=> "はくさい　漬物　キムチ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6237,
                "food_group_id"=> 6,
                "food_name"=> "パクチョイ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6238,
                "food_group_id"=> 6,
                "food_name"=> "バジル　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6239,
                "food_group_id"=> 6,
                "food_name"=> "パセリ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6240,
                "food_group_id"=> 6,
                "food_name"=> "はつかだいこん　根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6241,
                "food_group_id"=> 6,
                "food_name"=> "はやとうり　果実　白色種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6353,
                "food_group_id"=> 6,
                "food_name"=> "はやとうり　果実　緑色種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6242,
                "food_group_id"=> 6,
                "food_name"=> "はやとうり　果実　白色種　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6243,
                "food_group_id"=> 6,
                "food_name"=> "ビーツ　根　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6244,
                "food_group_id"=> 6,
                "food_name"=> "ビーツ　根　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6245,
                "food_group_id"=> 6,
                "food_name"=> "（ピーマン類）　青ピーマン　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6246,
                "food_group_id"=> 6,
                "food_name"=> "（ピーマン類）　青ピーマン　果実　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6247,
                "food_group_id"=> 6,
                "food_name"=> "（ピーマン類）　赤ピーマン　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6248,
                "food_group_id"=> 6,
                "food_name"=> "（ピーマン類）　赤ピーマン　果実　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6249,
                "food_group_id"=> 6,
                "food_name"=> "（ピーマン類）　黄ピーマン　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6250,
                "food_group_id"=> 6,
                "food_name"=> "（ピーマン類）　黄ピーマン　果実　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6251,
                "food_group_id"=> 6,
                "food_name"=> "（ピーマン類）　トマピー　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6252,
                "food_group_id"=> 6,
                "food_name"=> "ひのな　根・茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6253,
                "food_group_id"=> 6,
                "food_name"=> "ひのな　根・茎葉　甘酢漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6254,
                "food_group_id"=> 6,
                "food_name"=> "ひろしまな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6255,
                "food_group_id"=> 6,
                "food_name"=> "ひろしまな　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6256,
                "food_group_id"=> 6,
                "food_name"=> "（ふき類）　ふき　葉柄　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6257,
                "food_group_id"=> 6,
                "food_name"=> "（ふき類）　ふき　葉柄　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6258,
                "food_group_id"=> 6,
                "food_name"=> "（ふき類）　ふきのとう　花序　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6259,
                "food_group_id"=> 6,
                "food_name"=> "（ふき類）　ふきのとう　花序　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6260,
                "food_group_id"=> 6,
                "food_name"=> "ふじまめ　若ざや　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6261,
                "food_group_id"=> 6,
                "food_name"=> "ふだんそう　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6262,
                "food_group_id"=> 6,
                "food_name"=> "ふだんそう　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6263,
                "food_group_id"=> 6,
                "food_name"=> "ブロッコリー　花序　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6264,
                "food_group_id"=> 6,
                "food_name"=> "ブロッコリー　花序　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6354,
                "food_group_id"=> 6,
                "food_name"=> "ブロッコリー　芽ばえ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6265,
                "food_group_id"=> 6,
                "food_name"=> "へちま　果実　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6266,
                "food_group_id"=> 6,
                "food_name"=> "へちま　果実　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6267,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　通年平均　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6355,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　夏採り　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6356,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　冬採り　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6268,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　通年平均　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6357,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　夏採り　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6358,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　冬採り　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6359,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　通年平均　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6269,
                "food_group_id"=> 6,
                "food_name"=> "ほうれんそう　葉　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6270,
                "food_group_id"=> 6,
                "food_name"=> "ホースラディシュ　根茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6271,
                "food_group_id"=> 6,
                "food_name"=> "まこも　茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6272,
                "food_group_id"=> 6,
                "food_name"=> "みずかけな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6273,
                "food_group_id"=> 6,
                "food_name"=> "みずかけな　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6072,
                "food_group_id"=> 6,
                "food_name"=> "みずな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6073,
                "food_group_id"=> 6,
                "food_name"=> "みずな　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6074,
                "food_group_id"=> 6,
                "food_name"=> "みずな　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6274,
                "food_group_id"=> 6,
                "food_name"=> "（みつば類）　切りみつば　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6275,
                "food_group_id"=> 6,
                "food_name"=> "（みつば類）　切りみつば　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6276,
                "food_group_id"=> 6,
                "food_name"=> "（みつば類）　根みつば　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6277,
                "food_group_id"=> 6,
                "food_name"=> "（みつば類）　根みつば　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6278,
                "food_group_id"=> 6,
                "food_name"=> "（みつば類）　糸みつば　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6279,
                "food_group_id"=> 6,
                "food_name"=> "（みつば類）　糸みつば　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6360,
                "food_group_id"=> 6,
                "food_name"=> "みぶな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6280,
                "food_group_id"=> 6,
                "food_name"=> "（みょうが類）　みょうが　花穂　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6281,
                "food_group_id"=> 6,
                "food_name"=> "（みょうが類）　みょうがたけ　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6282,
                "food_group_id"=> 6,
                "food_name"=> "むかご 　肉芽　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6283,
                "food_group_id"=> 6,
                "food_name"=> "めキャベツ　結球葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6284,
                "food_group_id"=> 6,
                "food_name"=> "めキャベツ　結球葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6285,
                "food_group_id"=> 6,
                "food_name"=> "めたで芽ばえ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6286,
                "food_group_id"=> 6,
                "food_name"=> "（もやし類）　アルファルファもやし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6287,
                "food_group_id"=> 6,
                "food_name"=> "（もやし類）　だいずもやし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6288,
                "food_group_id"=> 6,
                "food_name"=> "（もやし類）　だいずもやし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6289,
                "food_group_id"=> 6,
                "food_name"=> "（もやし類）　ブラックマッペもやし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6290,
                "food_group_id"=> 6,
                "food_name"=> "（もやし類）　ブラックマッペもやし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6291,
                "food_group_id"=> 6,
                "food_name"=> "（もやし類）　りょくとうもやし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6292,
                "food_group_id"=> 6,
                "food_name"=> "（もやし類）　りょくとうもやし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6293,
                "food_group_id"=> 6,
                "food_name"=> "モロヘイヤ　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6294,
                "food_group_id"=> 6,
                "food_name"=> "モロヘイヤ　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6295,
                "food_group_id"=> 6,
                "food_name"=> "やまごぼう　みそ漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6296,
                "food_group_id"=> 6,
                "food_name"=> "ゆりね　りん茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6297,
                "food_group_id"=> 6,
                "food_name"=> "ゆりね　りん茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6298,
                "food_group_id"=> 6,
                "food_name"=> "ようさい　茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6299,
                "food_group_id"=> 6,
                "food_name"=> "ようさい　茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6300,
                "food_group_id"=> 6,
                "food_name"=> "よめな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6301,
                "food_group_id"=> 6,
                "food_name"=> "よもぎ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6302,
                "food_group_id"=> 6,
                "food_name"=> "よもぎ　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6303,
                "food_group_id"=> 6,
                "food_name"=> "らっかせい　未熟豆　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6304,
                "food_group_id"=> 6,
                "food_name"=> "らっかせい　未熟豆　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6305,
                "food_group_id"=> 6,
                "food_name"=> "（らっきょう類）　らっきょう　りん茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6306,
                "food_group_id"=> 6,
                "food_name"=> "（らっきょう類）　らっきょう　甘酢漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6307,
                "food_group_id"=> 6,
                "food_name"=> "（らっきょう類）　エシャレット　りん茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6308,
                "food_group_id"=> 6,
                "food_name"=> "リーキ　りん茎葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6309,
                "food_group_id"=> 6,
                "food_name"=> "リーキ　りん茎葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6319,
                "food_group_id"=> 6,
                "food_name"=> "ルッコラ葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6310,
                "food_group_id"=> 6,
                "food_name"=> "ルバーブ　葉柄　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6311,
                "food_group_id"=> 6,
                "food_name"=> "ルバーブ　葉柄　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6312,
                "food_group_id"=> 6,
                "food_name"=> "（レタス類）　レタス　土耕栽培　結球葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6361,
                "food_group_id"=> 6,
                "food_name"=> "（レタス類）　レタス　水耕栽培　結球葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6313,
                "food_group_id"=> 6,
                "food_name"=> "（レタス類）　サラダな　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6314,
                "food_group_id"=> 6,
                "food_name"=> "（レタス類）　リーフレタス　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6315,
                "food_group_id"=> 6,
                "food_name"=> "（レタス類）　サニーレタス　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6362,
                "food_group_id"=> 6,
                "food_name"=> "（レタス類）　サンチュ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6316,
                "food_group_id"=> 6,
                "food_name"=> "（レタス類）　コスレタス　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6317,
                "food_group_id"=> 6,
                "food_name"=> "れんこん　根茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6318,
                "food_group_id"=> 6,
                "food_name"=> "れんこん　根茎　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6320,
                "food_group_id"=> 6,
                "food_name"=> "わけぎ　葉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6321,
                "food_group_id"=> 6,
                "food_name"=> "わけぎ　葉　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6322,
                "food_group_id"=> 6,
                "food_name"=> "わさび　根茎　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6323,
                "food_group_id"=> 6,
                "food_name"=> "わさび　わさび漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6324,
                "food_group_id"=> 6,
                "food_name"=> "わらび　生わらび　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6325,
                "food_group_id"=> 6,
                "food_name"=> "わらび　生わらび　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 6326,
                "food_group_id"=> 6,
                "food_name"=> "わらび　干しわらび　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7001,
                "food_group_id"=> 7,
                "food_name"=> "あけび　果肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7002,
                "food_group_id"=> 7,
                "food_name"=> "あけび　果皮　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7003,
                "food_group_id"=> 7,
                "food_name"=> "アセロラ　酸味種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7159,
                "food_group_id"=> 7,
                "food_name"=> "アセロラ　甘味種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7004,
                "food_group_id"=> 7,
                "food_name"=> "アセロラ　10 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7005,
                "food_group_id"=> 7,
                "food_name"=> "アテモヤ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7006,
                "food_group_id"=> 7,
                "food_name"=> "アボカド　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7007,
                "food_group_id"=> 7,
                "food_name"=> "あんず　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7008,
                "food_group_id"=> 7,
                "food_name"=> "あんず　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7009,
                "food_group_id"=> 7,
                "food_name"=> "あんず　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7010,
                "food_group_id"=> 7,
                "food_name"=> "あんず　ジャム　高糖度",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7011,
                "food_group_id"=> 7,
                "food_name"=> "あんず　ジャム　低糖度",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7012,
                "food_group_id"=> 7,
                "food_name"=> "いちご　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7013,
                "food_group_id"=> 7,
                "food_name"=> "いちご　ジャム　高糖度",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7014,
                "food_group_id"=> 7,
                "food_name"=> "いちご　ジャム　低糖度",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7160,
                "food_group_id"=> 7,
                "food_name"=> "いちご　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7015,
                "food_group_id"=> 7,
                "food_name"=> "いちじく　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7016,
                "food_group_id"=> 7,
                "food_name"=> "いちじく　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7017,
                "food_group_id"=> 7,
                "food_name"=> "いちじく　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7019,
                "food_group_id"=> 7,
                "food_name"=> "うめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7020,
                "food_group_id"=> 7,
                "food_name"=> "うめ　梅漬　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7021,
                "food_group_id"=> 7,
                "food_name"=> "うめ　梅漬　調味漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7022,
                "food_group_id"=> 7,
                "food_name"=> "うめ　梅干し　塩漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7023,
                "food_group_id"=> 7,
                "food_name"=> "うめ　梅干し　調味漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7024,
                "food_group_id"=> 7,
                "food_name"=> "うめ　梅びしお",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7025,
                "food_group_id"=> 7,
                "food_name"=> "うめ　20 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7037,
                "food_group_id"=> 7,
                "food_name"=> "オリーブ　塩漬　グリーンオリーブ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7038,
                "food_group_id"=> 7,
                "food_name"=> "オリーブ　塩漬　ブラックオリーブ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7039,
                "food_group_id"=> 7,
                "food_name"=> "オリーブ　塩漬　スタッフドオリーブ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7049,
                "food_group_id"=> 7,
                "food_name"=> "かき　甘がき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7050,
                "food_group_id"=> 7,
                "food_name"=> "かき　渋抜きがき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7051,
                "food_group_id"=> 7,
                "food_name"=> "かき　干しがき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7053,
                "food_group_id"=> 7,
                "food_name"=> "かりん　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7018,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　いよかん　砂じょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7026,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　じょうのう　早生　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7027,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　じょうのう　普通　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7028,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　砂じょう　早生　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7029,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　砂じょう　普通　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7030,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　果実飲料　ストレートジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7031,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　果実飲料　濃縮還元ジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7032,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　果実飲料　果粒入りジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7033,
                "food_group_id"=> 7,
                "food_name"=> "（かんきつ類）　うんしゅうみかん　果実飲料　50 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7055,
                "food_group_id"=> 7,
                "food_name"=> "キワノ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7057,
                "food_group_id"=> 7,
                "food_name"=> "グァバ　赤肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7169,
                "food_group_id"=> 7,
                "food_name"=> "グァバ　白肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7058,
                "food_group_id"=> 7,
                "food_name"=> "グァバ　果実飲料　20 %果汁入り飲料（ネクター）",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7059,
                "food_group_id"=> 7,
                "food_name"=> "グァバ　果実飲料　10 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7060,
                "food_group_id"=> 7,
                "food_name"=> "グーズベリー　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7061,
                "food_group_id"=> 7,
                "food_name"=> "ぐみ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7157,
                "food_group_id"=> 7,
                "food_name"=> "ココナッツ　ココナッツウォーター",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7158,
                "food_group_id"=> 7,
                "food_name"=> "ココナッツ　ココナッツミルク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7170,
                "food_group_id"=> 7,
                "food_name"=> "ココナッツ　ナタデココ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7070,
                "food_group_id"=> 7,
                "food_name"=> "さくらんぼ　国産　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7071,
                "food_group_id"=> 7,
                "food_name"=> "さくらんぼ　米国産　生　 ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7072,
                "food_group_id"=> 7,
                "food_name"=> "さくらんぼ　米国産　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7073,
                "food_group_id"=> 7,
                "food_name"=> "ざくろ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7077,
                "food_group_id"=> 7,
                "food_name"=> "すいか　赤肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7171,
                "food_group_id"=> 7,
                "food_name"=> "すいか　黄肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7069,
                "food_group_id"=> 7,
                "food_name"=> "スターフルーツ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7080,
                "food_group_id"=> 7,
                "food_name"=> "（すもも類）　にほんすもも　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7081,
                "food_group_id"=> 7,
                "food_name"=> "（すもも類）　プルーン　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7082,
                "food_group_id"=> 7,
                "food_name"=> "（すもも類）　プルーン　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7086,
                "food_group_id"=> 7,
                "food_name"=> "チェリモヤ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7111,
                "food_group_id"=> 7,
                "food_name"=> "ドラゴンフルーツ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7087,
                "food_group_id"=> 7,
                "food_name"=> "ドリアン　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7088,
                "food_group_id"=> 7,
                "food_name"=> "（なし類）　日本なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7089,
                "food_group_id"=> 7,
                "food_name"=> "（なし類）　日本なし　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7090,
                "food_group_id"=> 7,
                "food_name"=> "（なし類）　中国なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7091,
                "food_group_id"=> 7,
                "food_name"=> "（なし類）　西洋なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7092,
                "food_group_id"=> 7,
                "food_name"=> "（なし類）　西洋なし　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7095,
                "food_group_id"=> 7,
                "food_name"=> "なつめ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7096,
                "food_group_id"=> 7,
                "food_name"=> "なつめやし　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7097,
                "food_group_id"=> 7,
                "food_name"=> "パインアップル　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7098,
                "food_group_id"=> 7,
                "food_name"=> "パインアップル　果実飲料　ストレートジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7099,
                "food_group_id"=> 7,
                "food_name"=> "パインアップル　果実飲料　濃縮還元ジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7100,
                "food_group_id"=> 7,
                "food_name"=> "パインアップル　果実飲料　50 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7101,
                "food_group_id"=> 7,
                "food_name"=> "パインアップル　果実飲料　10 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7102,
                "food_group_id"=> 7,
                "food_name"=> "パインアップル　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7103,
                "food_group_id"=> 7,
                "food_name"=> "パインアップル　砂糖漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7104,
                "food_group_id"=> 7,
                "food_name"=> "ハスカップ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7106,
                "food_group_id"=> 7,
                "food_name"=> "パッションフルーツ　果汁　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7107,
                "food_group_id"=> 7,
                "food_name"=> "バナナ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7108,
                "food_group_id"=> 7,
                "food_name"=> "バナナ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7109,
                "food_group_id"=> 7,
                "food_name"=> "パパイア　完熟　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7110,
                "food_group_id"=> 7,
                "food_name"=> "パパイア　未熟　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7114,
                "food_group_id"=> 7,
                "food_name"=> "びわ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7115,
                "food_group_id"=> 7,
                "food_name"=> "びわ　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7116,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7117,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　干しぶどう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7118,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　果実飲料　ストレートジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7119,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　果実飲料　濃縮還元ジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7120,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　果実飲料　70 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7121,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　果実飲料　10 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7122,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7123,
                "food_group_id"=> 7,
                "food_name"=> "ぶどう　ジャム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7124,
                "food_group_id"=> 7,
                "food_name"=> "ブルーベリー　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7125,
                "food_group_id"=> 7,
                "food_name"=> "ブルーベリー　ジャム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7172,
                "food_group_id"=> 7,
                "food_name"=> "ブルーベリー　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7128,
                "food_group_id"=> 7,
                "food_name"=> "ホワイトサポテ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7130,
                "food_group_id"=> 7,
                "food_name"=> "まくわうり　黄肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7173,
                "food_group_id"=> 7,
                "food_name"=> "まくわうり　白肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7131,
                "food_group_id"=> 7,
                "food_name"=> "マルメロ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7132,
                "food_group_id"=> 7,
                "food_name"=> "マンゴー　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7133,
                "food_group_id"=> 7,
                "food_name"=> "マンゴスチン　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7134,
                "food_group_id"=> 7,
                "food_name"=> "メロン　温室メロン　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7135,
                "food_group_id"=> 7,
                "food_name"=> "メロン　露地メロン　緑肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7174,
                "food_group_id"=> 7,
                "food_name"=> "メロン　露地メロン　赤肉種　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7136,
                "food_group_id"=> 7,
                "food_name"=> "（もも類）　もも　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7137,
                "food_group_id"=> 7,
                "food_name"=> "（もも類）　もも　30 %果汁入り飲料（ネクター）",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7138,
                "food_group_id"=> 7,
                "food_name"=> "（もも類）　もも　缶詰　白肉種　果肉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7175,
                "food_group_id"=> 7,
                "food_name"=> "（もも類）　もも　缶詰　黄肉種　果肉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7139,
                "food_group_id"=> 7,
                "food_name"=> "（もも類）　もも　缶詰　液汁",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7140,
                "food_group_id"=> 7,
                "food_name"=> "（もも類）　ネクタリン　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10093,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　加工品　削り節つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10094,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　加工品　角煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10095,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　加工品　塩辛",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10096,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　缶詰　味付け　フレーク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10097,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　缶詰　油漬　フレーク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10098,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かます　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10099,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かます　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10100,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　まがれい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10101,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　まがれい　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10102,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　まがれい　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10103,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　まこがれい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10399,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　まこがれい　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10104,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　子持ちがれい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10105,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　子持ちがれい　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10106,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かれい類）　干しかれい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10107,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かわはぎ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10108,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かんぱち　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10109,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞きす　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10400,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞きす　天ぷら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10110,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞きちじ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10111,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞きびなご　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10112,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞きびなご　調味干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10113,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞キャビア　塩蔵品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10114,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞キングクリップ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10115,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぎんだら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10401,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぎんだら　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10116,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞きんめだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10117,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぐち　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10118,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぐち　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10119,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞こい　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10120,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞こい　養殖　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10121,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞こい　養殖　内臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10122,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（こち類）　まごち　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10123,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（こち類）　めごち　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10124,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞このしろ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10125,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞このしろ　甘酢漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10126,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　からふとます　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10127,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　からふとます　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10128,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　からふとます　塩ます",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10129,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　からふとます　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10130,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　ぎんざけ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10131,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　ぎんざけ　養殖　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7141,
                "food_group_id"=> 7,
                "food_name"=> "やまもも　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7144,
                "food_group_id"=> 7,
                "food_name"=> "ライチー　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7146,
                "food_group_id"=> 7,
                "food_name"=> "ラズベリー　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7147,
                "food_group_id"=> 7,
                "food_name"=> "りゅうがん　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7148,
                "food_group_id"=> 7,
                "food_name"=> "りんご　皮むき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7176,
                "food_group_id"=> 7,
                "food_name"=> "りんご　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7149,
                "food_group_id"=> 7,
                "food_name"=> "りんご　果実飲料　ストレートジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7150,
                "food_group_id"=> 7,
                "food_name"=> "りんご　果実飲料　濃縮還元ジュース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7151,
                "food_group_id"=> 7,
                "food_name"=> "りんご　果実飲料　50 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7152,
                "food_group_id"=> 7,
                "food_name"=> "りんご　果実飲料　30 %果汁入り飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7153,
                "food_group_id"=> 7,
                "food_name"=> "りんご　缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 7154,
                "food_group_id"=> 7,
                "food_name"=> "りんご　ジャム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],[
                "id"=> 8001,
                "food_group_id"=> 8,
                "food_name"=> "えのきたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8002,
                "food_group_id"=> 8,
                "food_name"=> "えのきたけ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8037,
                "food_group_id"=> 8,
                "food_name"=> "えのきたけ　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8003,
                "food_group_id"=> 8,
                "food_name"=> "えのきたけ　味付け瓶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8004,
                "food_group_id"=> 8,
                "food_name"=> "（きくらげ類）　あらげきくらげ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8005,
                "food_group_id"=> 8,
                "food_name"=> "（きくらげ類）　あらげきくらげ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8038,
                "food_group_id"=> 8,
                "food_name"=> "（きくらげ類）　あらげきくらげ　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8006,
                "food_group_id"=> 8,
                "food_name"=> "（きくらげ類）　きくらげ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8007,
                "food_group_id"=> 8,
                "food_name"=> "（きくらげ類）　きくらげ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8008,
                "food_group_id"=> 8,
                "food_name"=> "（きくらげ類）　しろきくらげ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8009,
                "food_group_id"=> 8,
                "food_name"=> "（きくらげ類）　しろきくらげ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8010,
                "food_group_id"=> 8,
                "food_name"=> "くろあわびたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8039,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　生しいたけ　菌床栽培　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8040,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　生しいたけ　菌床栽培　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8041,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　生しいたけ　菌床栽培　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8042,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　生しいたけ　原木栽培　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8043,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　生しいたけ　原木栽培　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8044,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　生しいたけ　原木栽培　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8013,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　乾しいたけ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8014,
                "food_group_id"=> 8,
                "food_name"=> "しいたけ　乾しいたけ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8015,
                "food_group_id"=> 8,
                "food_name"=> "（しめじ類）　はたけしめじ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8045,
                "food_group_id"=> 8,
                "food_name"=> "（しめじ類）　はたけしめじ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8016,
                "food_group_id"=> 8,
                "food_name"=> "（しめじ類）　ぶなしめじ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8017,
                "food_group_id"=> 8,
                "food_name"=> "（しめじ類）　ぶなしめじ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8046,
                "food_group_id"=> 8,
                "food_name"=> "（しめじ類）　ぶなしめじ　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8018,
                "food_group_id"=> 8,
                "food_name"=> "（しめじ類）　ほんしめじ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8047,
                "food_group_id"=> 8,
                "food_name"=> "（しめじ類）　ほんしめじ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8019,
                "food_group_id"=> 8,
                "food_name"=> "たもぎたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8020,
                "food_group_id"=> 8,
                "food_name"=> "なめこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8021,
                "food_group_id"=> 8,
                "food_name"=> "なめこ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8022,
                "food_group_id"=> 8,
                "food_name"=> "なめこ　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8023,
                "food_group_id"=> 8,
                "food_name"=> "ぬめりすぎたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8024,
                "food_group_id"=> 8,
                "food_name"=> "（ひらたけ類）　うすひらたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8025,
                "food_group_id"=> 8,
                "food_name"=> "（ひらたけ類）　エリンギ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8048,
                "food_group_id"=> 8,
                "food_name"=> "（ひらたけ類）　エリンギ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8049,
                "food_group_id"=> 8,
                "food_name"=> "（ひらたけ類）　エリンギ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8050,
                "food_group_id"=> 8,
                "food_name"=> "（ひらたけ類）　エリンギ　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8026,
                "food_group_id"=> 8,
                "food_name"=> "（ひらたけ類）　ひらたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8027,
                "food_group_id"=> 8,
                "food_name"=> "（ひらたけ類）　ひらたけ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8028,
                "food_group_id"=> 8,
                "food_name"=> "まいたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8029,
                "food_group_id"=> 8,
                "food_name"=> "まいたけ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8051,
                "food_group_id"=> 8,
                "food_name"=> "まいたけ　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8030,
                "food_group_id"=> 8,
                "food_name"=> "まいたけ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8031,
                "food_group_id"=> 8,
                "food_name"=> "マッシュルーム　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8032,
                "food_group_id"=> 8,
                "food_name"=> "マッシュルーム　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8052,
                "food_group_id"=> 8,
                "food_name"=> "マッシュルーム　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8033,
                "food_group_id"=> 8,
                "food_name"=> "マッシュルーム　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8034,
                "food_group_id"=> 8,
                "food_name"=> "まつたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 8036,
                "food_group_id"=> 8,
                "food_name"=> "やなぎまつたけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],[
                "id"=> 9001,
                "food_group_id"=> 9,
                "food_name"=> "あおさ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9002,
                "food_group_id"=> 9,
                "food_name"=> "あおのり　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9003,
                "food_group_id"=> 9,
                "food_name"=> "あまのり　ほしのり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9004,
                "food_group_id"=> 9,
                "food_name"=> "あまのり　焼きのり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9005,
                "food_group_id"=> 9,
                "food_name"=> "あまのり　味付けのり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9006,
                "food_group_id"=> 9,
                "food_name"=> "あらめ　蒸し干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9007,
                "food_group_id"=> 9,
                "food_name"=> "いわのり　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9012,
                "food_group_id"=> 9,
                "food_name"=> "うみぶどう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9008,
                "food_group_id"=> 9,
                "food_name"=> "えごのり　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9009,
                "food_group_id"=> 9,
                "food_name"=> "えごのり　おきうと",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9010,
                "food_group_id"=> 9,
                "food_name"=> "おごのり　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9011,
                "food_group_id"=> 9,
                "food_name"=> "かわのり　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9013,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　えながおにこんぶ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9014,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　がごめこんぶ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9015,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　ながこんぶ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9016,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　ほそめこんぶ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9017,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　まこんぶ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9018,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　みついしこんぶ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9019,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　りしりこんぶ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9020,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　刻み昆布",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9021,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　削り昆布",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9022,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　塩昆布",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9023,
                "food_group_id"=> 9,
                "food_name"=> "（こんぶ類）　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9024,
                "food_group_id"=> 9,
                "food_name"=> "すいぜんじのり　素干し　水戻し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9025,
                "food_group_id"=> 9,
                "food_name"=> "てんぐさ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9026,
                "food_group_id"=> 9,
                "food_name"=> "てんぐさ　ところてん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9027,
                "food_group_id"=> 9,
                "food_name"=> "てんぐさ　角寒天",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9028,
                "food_group_id"=> 9,
                "food_name"=> "てんぐさ　寒天",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9049,
                "food_group_id"=> 9,
                "food_name"=> "てんぐさ　粉寒天",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9029,
                "food_group_id"=> 9,
                "food_name"=> "とさかのり　赤とさか　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9030,
                "food_group_id"=> 9,
                "food_name"=> "とさかのり　青とさか　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9050,
                "food_group_id"=> 9,
                "food_name"=> "ひじき　ほしひじき　ステンレス釜　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9051,
                "food_group_id"=> 9,
                "food_name"=> "ひじき　ほしひじき　ステンレス釜　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9052,
                "food_group_id"=> 9,
                "food_name"=> "ひじき　ほしひじき　ステンレス釜　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9053,
                "food_group_id"=> 9,
                "food_name"=> "ひじき　ほしひじき　鉄釜　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9054,
                "food_group_id"=> 9,
                "food_name"=> "ひじき　ほしひじき　鉄釜　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9055,
                "food_group_id"=> 9,
                "food_name"=> "ひじき　ほしひじき　鉄釜　油いため",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9032,
                "food_group_id"=> 9,
                "food_name"=> "ひとえぐさ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9033,
                "food_group_id"=> 9,
                "food_name"=> "ひとえぐさ　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9034,
                "food_group_id"=> 9,
                "food_name"=> "ふのり　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9035,
                "food_group_id"=> 9,
                "food_name"=> "まつも　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9036,
                "food_group_id"=> 9,
                "food_name"=> "むかでのり　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9037,
                "food_group_id"=> 9,
                "food_name"=> "（もずく類）　おきなわもずく　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9038,
                "food_group_id"=> 9,
                "food_name"=> "（もずく類）　もずく　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9039,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　原藻　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9040,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　乾燥わかめ　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9041,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　乾燥わかめ　素干し　水戻し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9042,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　乾燥わかめ　板わかめ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9043,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　乾燥わかめ　灰干し　水戻し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9044,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　カットわかめ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9045,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　湯通し塩蔵わかめ　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9046,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　くきわかめ　湯通し塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 9047,
                "food_group_id"=> 9,
                "food_name"=> "わかめ　めかぶわかめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10001,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あいなめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10002,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あこうだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10003,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　皮つき、生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10389,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　皮なし、刺身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10004,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　皮つき、水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10005,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　皮つき、焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10390,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　皮つき、フライ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10006,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　開き干し　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10007,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　開き干し　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10391,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　小型　骨付き　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10392,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まあじ　小型　骨付き　から揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10393,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まるあじ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10394,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　まるあじ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10008,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　にしまあじ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10009,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　にしまあじ　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10010,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　にしまあじ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10011,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　むろあじ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10012,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　むろあじ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10013,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　むろあじ　開き干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10014,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（あじ類）　むろあじ　くさや",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10015,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あなご　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10016,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あなご　蒸し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10017,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あまご　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10018,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あまだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10019,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あまだい　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10020,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あまだい　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10021,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　天然　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10022,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　天然　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10023,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　天然　内臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10024,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　天然　内臓　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10025,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10026,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　養殖　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10027,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　養殖　内臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10028,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　養殖　内臓　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10029,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あゆ　うるか",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10030,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞アラスカめぬけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10031,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あんこう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10032,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞あんこう　きも　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10033,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いかなご　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10034,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いかなご　煮干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10035,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いかなご　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10036,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いかなご　あめ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10037,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いさき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10038,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いしだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10039,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いとよりだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10040,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いとよりだい　すり身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10041,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いぼだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10042,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　うるめいわし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10043,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　うるめいわし　丸干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10044,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　かたくちいわし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10045,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　かたくちいわし　煮干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10046,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　かたくちいわし　田作り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10047,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　まいわし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10048,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　まいわし　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10049,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　まいわし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10395,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　まいわし　フライ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10050,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　まいわし　塩いわし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10051,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　まいわし　生干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10052,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　まいわし　丸干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10053,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　めざし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10054,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　めざし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10396,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　しらす　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10055,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　しらす干し　微乾燥品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10056,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　しらす干し　半乾燥品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10057,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　たたみいわし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10058,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　みりん干し　かたくちいわし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10059,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　みりん干し　まいわし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10060,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　缶詰　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10061,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　缶詰　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10062,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　缶詰　トマト漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10063,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　缶詰　油漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10064,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　缶詰　かば焼",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10397,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（いわし類）　缶詰　アンチョビ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10065,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞いわな　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10066,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞うぐい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10067,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞うなぎ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10068,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞うなぎ　きも　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10069,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞うなぎ　白焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10070,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞うなぎ　かば焼",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10071,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞うまづらはぎ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10072,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞うまづらはぎ　味付け開き干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10073,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞えい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10074,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞えそ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10075,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞おいかわ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10076,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞おおさが　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10077,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞おこぜ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10078,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞おひょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10079,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かさご　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10080,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かじか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10081,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かじか　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10082,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞かじか　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10083,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かじき類）　くろかじき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10084,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かじき類）　まかじき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10085,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かじき類）　めかじき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10398,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かじき類）　めかじき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10086,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　かつお　春獲り　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10087,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　かつお　秋獲り　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10088,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　そうだがつお　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10089,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　加工品　なまり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10090,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　加工品　なまり節",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10091,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　加工品　かつお節",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10092,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（かつお類）　加工品　削り節",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10132,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　さくらます　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10133,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　さくらます　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10134,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10135,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10136,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10137,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　新巻き　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10138,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　新巻き　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10139,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　塩ざけ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10140,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　イクラ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10141,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　すじこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10142,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　めふん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10143,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　しろさけ　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10144,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　たいせいようさけ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10145,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　たいせいようさけ　養殖　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10146,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　にじます　海面養殖　皮つき、生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10402,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　にじます　海面養殖　皮なし、刺身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10147,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　にじます　海面養殖　皮つき、焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10148,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　にじます　淡水養殖　皮つき、生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10149,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　べにざけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10150,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　べにざけ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10151,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　べにざけ　くん製",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10152,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　ますのすけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10153,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さけ・ます類）　ますのすけ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10154,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　まさば　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10155,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　まさば　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10156,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　まさば　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10403,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　まさば　フライ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10404,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　ごまさば　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10405,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　ごまさば　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10406,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　ごまさば　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10157,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　ごまさば　さば節",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10158,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　たいせいようさば　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10159,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　たいせいようさば　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10160,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　たいせいようさば　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10161,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　加工品　塩さば",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10162,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　加工品　開き干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10163,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　加工品　しめさば",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10164,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　缶詰　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10165,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　缶詰　みそ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10166,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さば類）　缶詰　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10167,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さめ類）　あぶらつのざめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10361,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（たこ類）　まだこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10362,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（たこ類）　まだこ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10363,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞あみ　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10364,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞あみ　塩辛",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10365,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞うに　生うに",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10366,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞うに　粒うに",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10367,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞うに　練りうに",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10368,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞おきあみ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10369,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞おきあみ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10370,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞くらげ　塩蔵　塩抜き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10371,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞しゃこ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10372,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞なまこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10373,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞なまこ　このわた",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10374,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞ほや　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10375,
                "food_group_id"=> 10,
                "food_name"=> "＜その他＞ほや　塩辛",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10168,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さめ類）　よしきりざめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10169,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（さめ類）　ふかひれ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10170,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さより　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10171,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さわら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10172,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さわら　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10173,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さんま　皮つき、生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10407,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さんま　皮なし、刺身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10174,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さんま　皮つき、焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10175,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さんま　開き干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10176,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さんま　みりん干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10177,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さんま　缶詰　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10178,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞さんま　缶詰　かば焼",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10179,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞しいら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10180,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（ししゃも類）　ししゃも　生干し　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10181,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（ししゃも類）　ししゃも　生干し　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10182,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（ししゃも類）　からふとししゃも　生干し　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10183,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（ししゃも類）　からふとししゃも　生干し　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10184,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞したびらめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10185,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞しまあじ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10186,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞しらうお　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10187,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞シルバー　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10188,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞すずき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10189,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　きだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10190,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　くろだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10191,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　ちだい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10192,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　まだい　天然　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10193,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　まだい　養殖　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10408,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　まだい　養殖　皮なし　刺身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10194,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　まだい　養殖　皮つき　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10195,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たい類）　まだい　養殖　皮つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10196,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞たかさご　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10197,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞たかべ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10198,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞たちうお　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10199,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　すけとうだら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10409,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　すけとうだら　フライ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10200,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　すけとうだら　すり身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10201,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　すけとうだら　すきみだら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10202,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　すけとうだら　たらこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10203,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　すけとうだら　たらこ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10204,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　すけとうだら　からしめんたいこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10205,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　まだら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10206,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　まだら　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10207,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　まだら　しらこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10208,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　まだら　塩だら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10209,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　まだら　干しだら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10210,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（たら類）　まだら　でんぶ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10211,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ちか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10213,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞どじょう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10214,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞どじょう　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10215,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞とびうお　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10212,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ナイルティラピア　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10216,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞なまず　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10217,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にぎす　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10218,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にしん　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10219,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にしん　身欠きにしん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10220,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にしん　開き干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10221,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にしん　くん製",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10222,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にしん　かずのこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10223,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にしん　かずのこ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10224,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞にしん　かずのこ　塩蔵　水戻し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10225,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞はぜ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10226,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞はぜ　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10227,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞はぜ　甘露煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10228,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞はたはた　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10229,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞はたはた　生干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10230,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞はまふえふき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10231,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞はも　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10233,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ひらまさ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10234,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ひらめ　天然　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10235,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ひらめ　養殖　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10410,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ひらめ　養殖　皮なし　刺身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10236,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（ふぐ類）　とらふぐ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10237,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（ふぐ類）　まふぐ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10238,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ふな　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10239,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ふな　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10240,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ふな　甘露煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10241,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぶり　成魚　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10242,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぶり　成魚　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10243,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぶり　はまち　養殖　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10411,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぶり　はまち　養殖　皮なし　刺身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10244,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ほうぼう　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10245,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ホキ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10246,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ほっけ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10247,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ほっけ　塩ほっけ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10248,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ほっけ　開き干し　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10412,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ほっけ　開き干し　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10249,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぼら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10250,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ぼら　からすみ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10251,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞ほんもろこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10252,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　きはだ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10253,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　くろまぐろ　赤身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10254,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　くろまぐろ　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10255,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　びんなが　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10256,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　みなみまぐろ　赤身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10257,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　みなみまぐろ　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10258,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　めじまぐろ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10259,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　めばち　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10260,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　缶詰　水煮　フレーク　ライト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10261,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　缶詰　水煮　フレーク　ホワイト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10262,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　缶詰　味付け　フレーク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10263,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　缶詰　油漬　フレーク　ライト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10264,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞（まぐろ類）　缶詰　油漬　フレーク　ホワイト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10265,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞マジェランあいなめ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10266,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞まながつお　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10232,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞みなみくろたち　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10267,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞みなみだら　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10268,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞むつ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10269,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞むつ　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10270,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞めじな　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10271,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞めばる　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10272,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞メルルーサ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10273,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞やつめうなぎ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10274,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞やつめうなぎ　干しやつめ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10275,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞やまめ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10276,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞わかさぎ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10277,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞わかさぎ　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10278,
                "food_group_id"=> 10,
                "food_name"=> "＜魚類＞わかさぎ　あめ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10279,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あかがい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10280,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あげまき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10281,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あさり　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10282,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あさり　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10283,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あさり　缶詰　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10284,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あさり　缶詰　味付け",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10285,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あわび　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10286,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あわび　干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10287,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あわび　塩辛",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10288,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞あわび　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10289,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞いがい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10290,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞いたやがい　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10291,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞エスカルゴ水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10292,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞かき　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10293,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞かき　養殖　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10294,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞かき　くん製油漬缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10295,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞さざえ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10296,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞さざえ　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10318,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞さるぼう　味付け缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10297,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞しじみ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10413,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞しじみ　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10298,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞たいらがい　貝柱　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10299,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞たにし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10300,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞つぶ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10301,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞とこぶし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10303,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞とりがい　斧足　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10304,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ばい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10305,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ばかがい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10306,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞（はまぐり類）　はまぐり　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10307,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞（はまぐり類）　はまぐり　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10308,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞（はまぐり類）　はまぐり　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10309,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞（はまぐり類）　はまぐり　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10310,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞（はまぐり類）　ちょうせんはまぐり　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10311,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ほたてがい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10312,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ほたてがい　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10313,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ほたてがい　貝柱　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10414,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ほたてがい　貝柱　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10314,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ほたてがい　貝柱　煮干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10315,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ほたてがい　貝柱　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10316,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞ほっきがい　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10317,
                "food_group_id"=> 10,
                "food_name"=> "＜貝類＞みるがい　水管　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10319,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　あまえび　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10320,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　いせえび　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10321,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　くるまえび　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10322,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　くるまえび　養殖　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10323,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　くるまえび　養殖　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10324,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　さくらえび　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10325,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　さくらえび　素干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10326,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　さくらえび　煮干し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10327,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　大正えび　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10328,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　しばえび　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10415,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　バナメイエビ　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10416,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　バナメイエビ　養殖　天ぷら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10329,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　ブラックタイガー　養殖　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10330,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　加工品　干しえび",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10331,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（えび類）　加工品　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10332,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　がざみ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10333,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　毛がに　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10334,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　毛がに　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10335,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　ずわいがに　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10336,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　ずわいがに　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10337,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　ずわいがに　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10338,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　たらばがに　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10339,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　たらばがに　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10340,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　たらばがに　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10341,
                "food_group_id"=> 10,
                "food_name"=> "＜えび・かに類＞（かに類）　加工品　がん漬",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10342,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　あかいか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10343,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　けんさきいか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10344,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　こういか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10345,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　するめいか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10346,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　するめいか　水煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10347,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　するめいか　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10417,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　するめいか　胴　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10418,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　するめいか　胴　皮なし　刺身",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10419,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　するめいか　胴　皮なし　天ぷら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10420,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　するめいか　耳・足　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10348,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　ほたるいか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10349,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　ほたるいか　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10350,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　ほたるいか　くん製",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10351,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　ほたるいか　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10352,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　やりいか　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10353,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　加工品　するめ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10354,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　加工品　さきいか",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10355,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　加工品　くん製",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10356,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　加工品　切りいかあめ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10357,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　加工品　いかあられ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10358,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　加工品　塩辛",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10359,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（いか類）　加工品　味付け缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10360,
                "food_group_id"=> 10,
                "food_name"=> "＜いか・たこ類＞（たこ類）　いいだこ　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10376,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞かに風味かまぼこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10377,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞昆布巻きかまぼこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10378,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞す巻きかまぼこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10379,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞蒸しかまぼこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10380,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞焼き抜きかまぼこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10381,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞焼き竹輪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10382,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞だて巻",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10383,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞つみれ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10384,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞なると",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10385,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞はんぺん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10386,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞さつま揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10387,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞魚肉ハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 10388,
                "food_group_id"=> 10,
                "food_name"=> "＜水産練り製品＞魚肉ソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11001,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞いのしし　肉　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11002,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞いのぶた　肉　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11003,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うさぎ　肉　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11004,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　かた　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11005,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　かた　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11006,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　かた　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11007,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　かた　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11008,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　かたロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11009,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　かたロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11010,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　かたロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11011,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　リブロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11248,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　リブロース　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11249,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　リブロース　脂身つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11012,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　リブロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11013,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　リブロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11014,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　リブロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11015,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　サーロイン　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11016,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　サーロイン　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11017,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　サーロイン　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11018,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　ばら　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11019,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11020,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　もも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11250,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　もも　皮下脂肪なし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11251,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　もも　皮下脂肪なし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11021,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　もも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11022,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　もも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11023,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　そともも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11024,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　そともも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11025,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　そともも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11026,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　ランプ　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11027,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　ランプ　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11028,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　ランプ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11029,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［和牛肉］　ヒレ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11030,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　かた　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11031,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　かた　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11032,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　かた　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11033,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　かた　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11034,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　かたロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11035,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　かたロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11036,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　かたロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11037,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　リブロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11038,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　リブロース　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11039,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　リブロース　脂身つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11040,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　リブロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11041,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　リブロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11042,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　リブロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11043,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　サーロイン　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11044,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　サーロイン　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11045,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　サーロイン　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11046,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　ばら　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11252,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　ばら　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11047,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11048,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　もも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11049,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　もも　皮下脂肪なし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11050,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　もも　皮下脂肪なし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11051,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　もも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11052,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　もも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11053,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　そともも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11054,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　そともも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11055,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　そともも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11056,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　ランプ　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11057,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　ランプ　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11058,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　ランプ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11059,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　ヒレ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11253,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［乳用肥育牛肉］　ヒレ　赤肉　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11254,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　リブロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11234,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［副生物］　皮　むね　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11235,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［副生物］　皮　もも　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11236,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［副生物］　軟骨　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11237,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［その他］　焼き鳥缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11292,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［その他］　チキンナゲット",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11293,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［その他］　つくね",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11238,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞はと　肉　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11240,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞ほろほろちょう　肉　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11241,
                "food_group_id"=> 11,
                "food_name"=> "＜その他＞いなご　つくだ煮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11242,
                "food_group_id"=> 11,
                "food_name"=> "＜その他＞かえる　肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11243,
                "food_group_id"=> 11,
                "food_name"=> "＜その他＞すっぽん　肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11244,
                "food_group_id"=> 11,
                "food_name"=> "＜その他＞はち　はちの子缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12020,
                "food_group_id"=> 12,
                "food_name"=> "あひる卵　ピータン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12001,
                "food_group_id"=> 12,
                "food_name"=> "うこっけい卵　全卵　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12002,
                "food_group_id"=> 12,
                "food_name"=> "うずら卵　全卵　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12003,
                "food_group_id"=> 12,
                "food_name"=> "うずら卵　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12004,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　全卵　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12005,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　全卵　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12006,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　全卵　ポーチドエッグ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12007,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　全卵　水煮缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12008,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　全卵　加糖全卵",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12009,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　全卵　乾燥全卵",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12010,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　卵黄　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12011,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　卵黄　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12012,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　卵黄　加糖卵黄",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12013,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　卵黄　乾燥卵黄",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12014,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　卵白　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12015,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　卵白　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12016,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　卵白　乾燥卵白",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12017,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　たまご豆腐",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12018,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　たまご焼　厚焼きたまご",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 12019,
                "food_group_id"=> 12,
                "food_name"=> "鶏卵　たまご焼　だし巻きたまご",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13001,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　生乳　ジャージー種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13002,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　生乳　ホルスタイン種",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13003,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　普通牛乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11255,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　リブロース　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11256,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　リブロース　脂身つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11257,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　リブロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11258,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　リブロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11259,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　リブロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11260,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　ばら　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11261,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11262,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　もも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11263,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　もも　皮下脂肪なし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11264,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　もも　皮下脂肪なし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11265,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　もも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11266,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　もも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11267,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［交雑牛肉］　ヒレ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11060,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　かた　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11061,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　かた　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11062,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　かた　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11063,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　かた　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11064,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　かたロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11065,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　かたロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11066,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　かたロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11067,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　リブロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11268,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　リブロース　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11269,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　リブロース　脂身つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11068,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　リブロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11069,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　リブロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11070,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　リブロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11071,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　サーロイン　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11072,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　サーロイン　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11073,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　サーロイン　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11074,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　ばら　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11075,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11076,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　もも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11270,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　もも　皮下脂肪なし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11271,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　もも　皮下脂肪なし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11077,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　もも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11078,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　もも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11079,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　そともも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11080,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　そともも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11081,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　そともも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11082,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　ランプ　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11083,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　ランプ　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11084,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　ランプ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11085,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［輸入牛肉］　ヒレ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11086,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［子牛肉］　リブロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11087,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［子牛肉］　ばら　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11088,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［子牛肉］　もも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11089,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［ひき肉］　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11272,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［ひき肉］　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11090,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　舌　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11273,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　舌　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11091,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　心臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11092,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　肝臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11093,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　じん臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11094,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　第一胃　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11095,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　第二胃　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11096,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　第三胃　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11097,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　第四胃　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11098,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　小腸　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11099,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　大腸　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11100,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　直腸　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11101,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　腱　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11102,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　子宮　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11103,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　尾　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11274,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［副生物］　横隔膜　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11104,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［加工品］　ローストビーフ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11105,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［加工品］　コンビーフ缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11106,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［加工品］　味付け缶詰",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11107,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［加工品］　ビーフジャーキー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11108,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うし　［加工品］　スモークタン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11109,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞うま　肉　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11110,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞くじら　肉　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11111,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞くじら　うねす　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11112,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞くじら　本皮　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11113,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞くじら　さらしくじら",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11114,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞しか　あかしか　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11275,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞しか　にほんじか　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11115,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かた　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11116,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かた　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11117,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かた　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11118,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かた　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11119,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かたロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11120,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かたロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11121,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かたロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11122,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　かたロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11123,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11124,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ロース　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11125,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ロース　脂身つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11276,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ロース　脂身つき　とんかつ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11126,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11127,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11128,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11129,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ばら　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11277,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ばら　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11130,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11131,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　もも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11132,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　もも　皮下脂肪なし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11133,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　もも　皮下脂肪なし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11134,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　もも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11135,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　もも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11136,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　そともも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11137,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　そともも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11138,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　そともも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11139,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　そともも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11140,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ヒレ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11278,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ヒレ　赤肉　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11279,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［大型種肉］　ヒレ　赤肉　とんかつ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11141,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かた　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11142,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かた　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11143,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かた　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11144,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かた　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11145,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かたロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11146,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かたロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11147,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かたロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11148,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　かたロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11149,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　ロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11150,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　ロース　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11151,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　ロース　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11152,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　ロース　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11153,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　ばら　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11154,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11155,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　もも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11156,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　もも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11157,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　もも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11158,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　そともも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11159,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　そともも　皮下脂肪なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11160,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　そともも　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11161,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　そともも　脂身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11162,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［中型種肉］　ヒレ　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11163,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ひき肉］　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11280,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ひき肉］　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11164,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　舌　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11165,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　心臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11166,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　肝臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11167,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　じん臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11168,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　胃　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11169,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　小腸　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11170,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　大腸　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11171,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　子宮　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11172,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　豚足　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11173,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［副生物］　軟骨　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11174,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ハム類］　骨付きハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11175,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ハム類］　ボンレスハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11176,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ハム類］　ロースハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11177,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ハム類］　ショルダーハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11181,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ハム類］　生ハム　促成",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11182,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ハム類］　生ハム　長期熟成",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11178,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［プレスハム類］　プレスハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11180,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［プレスハム類］　チョップドハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11183,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ベーコン類］　ベーコン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11184,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ベーコン類］　ロースベーコン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11185,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ベーコン類］　ショルダーベーコン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11186,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　ウインナーソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11187,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　セミドライソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11188,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　ドライソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11189,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　フランクフルトソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11190,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　ボロニアソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11191,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　リオナソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11192,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　レバーソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11193,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　混合ソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11194,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［ソーセージ類］　生ソーセージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11195,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［その他］　焼き豚",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11196,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［その他］　レバーペースト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11197,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［その他］　スモークレバー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11198,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞ぶた　［その他］　ゼラチン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11199,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［マトン］　ロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11281,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［マトン］　ロース　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11200,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［マトン］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11201,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［ラム］　かた　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11202,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［ラム］　ロース　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11282,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［ラム］　ロース　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11203,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［ラム］　もも　脂身つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11283,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　［ラム］　もも　脂身つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11179,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞めんよう　混合プレスハム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11204,
                "food_group_id"=> 11,
                "food_name"=> "＜畜肉類＞やぎ　肉　赤肉　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11207,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞うずら　肉　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11239,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞がちょう　フォアグラ　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11208,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞かも　まがも　肉　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11205,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞かも　あいがも　肉　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11206,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞かも　あひる　肉　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11247,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞かも　あひる　肉　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11284,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞かも　あひる　皮　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11209,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞きじ　肉　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11210,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞しちめんちょう　肉　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11211,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞すずめ　肉　骨・皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11212,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［成鶏肉］　手羽　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11213,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［成鶏肉］　むね　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11214,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［成鶏肉］　むね　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11215,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［成鶏肉］　もも　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11216,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［成鶏肉］　もも　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11217,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［成鶏肉］　ささ身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11218,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　手羽　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11285,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　手羽先　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11286,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　手羽元　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11219,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　むね　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11287,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　むね　皮つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11220,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　むね　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11288,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　むね　皮なし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11221,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮つき　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11222,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮つき　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11223,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮つき　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11289,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮つき　から揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11224,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮なし　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11225,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮なし　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11226,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮なし　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11290,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　もも　皮なし　から揚げ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11227,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　ささ身　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11228,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　ささ身　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11229,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［若鶏肉］　ささ身　ゆで",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11230,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［ひき肉］　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11291,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［ひき肉］　焼き",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11231,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［副生物］　心臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11232,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［副生物］　肝臓　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 11233,
                "food_group_id"=> 11,
                "food_name"=> "＜鳥肉類＞にわとり　［副生物］　筋胃　生",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13004,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　加工乳　濃厚",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13005,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　加工乳　低脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13006,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　脱脂乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13007,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　乳飲料　コーヒー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13008,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（液状乳類）　乳飲料　フルーツ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13009,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（粉乳類）　全粉乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13010,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（粉乳類）　脱脂粉乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13011,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（粉乳類）　乳児用調製粉乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13012,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（練乳類）　無糖練乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13013,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（練乳類）　加糖練乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13014,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　クリーム　乳脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13015,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　クリーム　乳脂肪 ・ 植物性脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13016,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　クリーム　植物性脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13017,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　ホイップクリーム　乳脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13018,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　ホイップクリーム　乳脂肪・植物性脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13019,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　ホイップクリーム　植物性脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13020,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　コーヒーホワイトナー　液状　乳脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13021,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　コーヒーホワイトナー　液状　乳脂肪・植物性脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13022,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　コーヒーホワイトナー　液状　植物性脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13023,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　コーヒーホワイトナー　粉末状　乳脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13024,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（クリーム類）　コーヒーホワイトナー　粉末状　植物性脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13025,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　ヨーグルト　全脂無糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13053,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　ヨーグルト　低脂肪無糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13054,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　ヨーグルト　無脂肪無糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13026,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　ヨーグルト　脱脂加糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13027,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　ヨーグルト　ドリンクタイプ　加糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13028,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　乳酸菌飲料　乳製品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13029,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　乳酸菌飲料　殺菌乳製品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13030,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（発酵乳・乳酸菌飲料）　乳酸菌飲料　非乳製品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13031,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　エダム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13032,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　エメンタール",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13033,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　カテージ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13034,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　カマンベール",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13035,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　クリーム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13036,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　ゴーダ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13037,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　チェダー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13038,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　パルメザン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13039,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　ブルー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13055,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　マスカルポーネ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13056,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　モッツァレラ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13057,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　やぎ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13058,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　ナチュラルチーズ　リコッタ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13040,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　プロセスチーズ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13041,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（チーズ類）　チーズスプレッド",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13042,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（アイスクリーム類）　アイスクリーム　高脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13043,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（アイスクリーム類）　アイスクリーム　普通脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13044,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（アイスクリーム類）　アイスミルク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13045,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（アイスクリーム類）　ラクトアイス　普通脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13046,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（アイスクリーム類）　ラクトアイス　低脂肪",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13047,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（アイスクリーム類）　ソフトクリーム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13048,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（その他）　カゼイン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13049,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（その他）　シャーベット",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13050,
                "food_group_id"=> 13,
                "food_name"=> "＜牛乳及び乳製品＞（その他）　チーズホエーパウダー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13051,
                "food_group_id"=> 13,
                "food_name"=> "＜その他＞人乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 13052,
                "food_group_id"=> 13,
                "food_name"=> "＜その他＞やぎ乳",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14023,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　あまに油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14024,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　えごま油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14001,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　オリーブ油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14002,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　ごま油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14003,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　米ぬか油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14004,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　サフラワー油　ハイオレイック",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14025,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　サフラワー油　ハイリノール",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14005,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　大豆油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14006,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　調合油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14007,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　とうもろこし油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14008,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　なたね油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14009,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　パーム油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14010,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　パーム核油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14011,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　ひまわり油　ハイリノール",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14026,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　ひまわり油  ミッドオレイック",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14027,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　ひまわり油　ハイオレイック",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14028,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　ぶどう油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14012,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　綿実油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14013,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　やし油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14014,
                "food_group_id"=> 14,
                "food_name"=> "（植物油脂類）　落花生油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14015,
                "food_group_id"=> 14,
                "food_name"=> "（動物脂類）　牛脂",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14016,
                "food_group_id"=> 14,
                "food_name"=> "（動物脂類）　ラード",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14017,
                "food_group_id"=> 14,
                "food_name"=> "（バター類）　有塩バター",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14018,
                "food_group_id"=> 14,
                "food_name"=> "（バター類）　食塩不使用バター",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14019,
                "food_group_id"=> 14,
                "food_name"=> "（バター類）　発酵バター",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14020,
                "food_group_id"=> 14,
                "food_name"=> "（マーガリン類）　ソフトタイプマーガリン　家庭用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14029,
                "food_group_id"=> 14,
                "food_name"=> "（マーガリン類）　ソフトタイプマーガリン　業務用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14021,
                "food_group_id"=> 14,
                "food_name"=> "（マーガリン類）　ファットスプレッド",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14022,
                "food_group_id"=> 14,
                "food_name"=> "（その他）　ショートニング　家庭用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14030,
                "food_group_id"=> 14,
                "food_name"=> "（その他）　ショートニング　業務用　製菓",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 14031,
                "food_group_id"=> 14,
                "food_name"=> "（その他）　ショートニング　業務用　フライ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15001,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞甘納豆　あずき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15002,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞甘納豆　いんげんまめ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15003,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞甘納豆　えんどう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15005,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞今川焼",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15006,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ういろう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15007,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞うぐいすもち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15008,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞かしわもち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15009,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞カステラ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15010,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞かのこ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15011,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞かるかん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15012,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞きび団子",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15013,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ぎゅうひ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15014,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞きりざんしょ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15015,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞きんぎょく糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15016,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞きんつば",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15017,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞草もち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15018,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞くし団子　あん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15019,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞くし団子　みたらし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15121,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞くずもち　くずでん粉製品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15122,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞くずもち　小麦でん粉製品",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15020,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞げっぺい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15123,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞五平もち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15021,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞桜もち　関東風",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15022,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞桜もち　関西風",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15124,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞笹だんご",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15023,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞大福もち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15024,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞タルト（和菓子）",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15025,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ちまき",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15026,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ちゃつう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15027,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞どら焼",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15004,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞生八つ橋　あん入り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15028,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ねりきり",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15029,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞まんじゅう　カステラまんじゅう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15030,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞まんじゅう　くずまんじゅう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15031,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞まんじゅう　くりまんじゅう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15032,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞まんじゅう　とうまんじゅう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15033,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞まんじゅう　蒸しまんじゅう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15034,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞まんじゅう　中華まんじゅう　あんまん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15035,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞まんじゅう　中華まんじゅう　肉まん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15036,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞もなか",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15037,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ゆべし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15038,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ようかん　練りようかん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15039,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ようかん　水ようかん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15040,
                "food_group_id"=> 15,
                "food_name"=> "＜和生菓子・和半生菓子類＞ようかん　蒸しようかん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15041,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞あめ玉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15042,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞芋かりんとう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15043,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞おこし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15044,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞おのろけ豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15045,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞かりんとう　黒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15046,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞かりんとう　白",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15047,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞ごかぼう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15048,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞小麦粉せんべい　磯部せんべい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15049,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞小麦粉せんべい　かわらせんべい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15050,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞小麦粉せんべい　巻きせんべい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15051,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞小麦粉せんべい　南部せんべい　ごま入り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15052,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞小麦粉せんべい　南部せんべい　落花生入り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15053,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞しおがま",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15055,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞ひなあられ　関東風",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15056,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞ひなあられ　関西風",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15057,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞米菓　揚げせんべい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15058,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞米菓　甘辛せんべい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15059,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞米菓　あられ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15060,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞米菓　しょうゆせんべい",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15061,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞ボーロ　小粒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15062,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞ボーロ　そばボーロ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15063,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞松風",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15064,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞みしま豆",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15065,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞八つ橋",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15066,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞らくがん　らくがん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15067,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞らくがん　麦らくがん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15068,
                "food_group_id"=> 15,
                "food_name"=> "＜和干菓子類＞らくがん　もろこしらくがん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15125,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞揚げパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15069,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞あんパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15126,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞あんパン　薄皮タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15127,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞カレーパン 皮及び具",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15128,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞カレーパン　皮のみ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15129,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞カレーパン　具のみ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15070,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞クリームパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15130,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞クリームパン　薄皮タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15071,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞ジャムパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15072,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞チョココロネ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15131,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞チョコパン　薄皮タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15132,
                "food_group_id"=> 15,
                "food_name"=> "＜菓子パン類＞メロンパン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15073,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞シュークリーム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15074,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞スポンジケーキ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15075,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞ショートケーキ 果実なし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15133,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞タルト（洋菓子）",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15134,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞チーズケーキ　ベイクドチーズケーキ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15135,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞チーズケーキ　レアチーズケーキ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15076,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞デニッシュペストリー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15077,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞ドーナッツ　イーストドーナッツ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15078,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞ドーナッツ　ケーキドーナッツ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15079,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞パイ　パイ皮",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15080,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞パイ　アップルパイ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15081,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞パイ　ミートパイ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15082,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞バターケーキ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15083,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞ホットケーキ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15084,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞ワッフル　カスタードクリーム入り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15085,
                "food_group_id"=> 15,
                "food_name"=> "＜ケーキ・ペストリー類＞ワッフル　ジャム入り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15086,
                "food_group_id"=> 15,
                "food_name"=> "＜デザート菓子類＞カスタードプリン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15136,
                "food_group_id"=> 15,
                "food_name"=> "＜デザート菓子類＞牛乳寒天",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15087,
                "food_group_id"=> 15,
                "food_name"=> "＜デザート菓子類＞ゼリー　オレンジ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15088,
                "food_group_id"=> 15,
                "food_name"=> "＜デザート菓子類＞ゼリー　コーヒー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15089,
                "food_group_id"=> 15,
                "food_name"=> "＜デザート菓子類＞ゼリー　ミルク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15090,
                "food_group_id"=> 15,
                "food_name"=> "＜デザート菓子類＞ゼリー　ワイン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15091,
                "food_group_id"=> 15,
                "food_name"=> "＜デザート菓子類＞ババロア",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15092,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞ウエハース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15141,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞ウエハース、クリーム入り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15093,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞クラッカー　オイルスプレークラッカー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15094,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞クラッカー　ソーダクラッカー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15095,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞サブレ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15054,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞中華風クッキー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15097,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞ビスケット　ハードビスケット",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15098,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞ビスケット　ソフトビスケット",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15099,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞プレッツェル",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15096,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞リーフパイ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15100,
                "food_group_id"=> 15,
                "food_name"=> "＜ビスケット類＞ロシアケーキ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15101,
                "food_group_id"=> 15,
                "food_name"=> "＜スナック類＞小麦粉あられ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15102,
                "food_group_id"=> 15,
                "food_name"=> "＜スナック類＞コーンスナック",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15103,
                "food_group_id"=> 15,
                "food_name"=> "＜スナック類＞ポテトチップス　ポテトチップス",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15104,
                "food_group_id"=> 15,
                "food_name"=> "＜スナック類＞ポテトチップス　成形ポテトチップス",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15109,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞かわり玉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15105,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞キャラメル",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15107,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞ゼリーキャンデー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15108,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞ゼリービーンズ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15110,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞ドロップ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15111,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞バタースコッチ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15112,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞ブリットル",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15113,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞マシュマロ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15106,
                "food_group_id"=> 15,
                "food_name"=> "＜キャンデー類＞ラムネ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15137,
                "food_group_id"=> 15,
                "food_name"=> "＜チョコレート類＞アーモンドチョコレート",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15114,
                "food_group_id"=> 15,
                "food_name"=> "＜チョコレート類＞カバーリングチョコレート",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15115,
                "food_group_id"=> 15,
                "food_name"=> "＜チョコレート類＞ホワイトチョコレート",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15116,
                "food_group_id"=> 15,
                "food_name"=> "＜チョコレート類＞ミルクチョコレート",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15117,
                "food_group_id"=> 15,
                "food_name"=> "＜果実菓子類＞マロングラッセ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15118,
                "food_group_id"=> 15,
                "food_name"=> "＜チューインガム類＞板ガム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15119,
                "food_group_id"=> 15,
                "food_name"=> "＜チューインガム類＞糖衣ガム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15120,
                "food_group_id"=> 15,
                "food_name"=> "＜チューインガム類＞風船ガム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15138,
                "food_group_id"=> 15,
                "food_name"=> "＜その他＞カスタードクリーム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15139,
                "food_group_id"=> 15,
                "food_name"=> "＜その他＞しるこ　こしあん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 15140,
                "food_group_id"=> 15,
                "food_name"=> "＜その他＞しるこ　つぶしあん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16001,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　清酒　普通酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16002,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　清酒　純米酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16003,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　清酒　本醸造酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16004,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　清酒　吟醸酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16005,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　清酒　純米吟醸酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16006,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　ビール　淡色",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16007,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　ビール　黒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16008,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　ビール　スタウト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16009,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　発泡酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16010,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　ぶどう酒　白",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16011,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　ぶどう酒　赤",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16012,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　ぶどう酒　ロゼ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16013,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（醸造酒類）　紹興酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16014,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）しょうちゅう　連続式蒸留しょうちゅう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16015,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）しょうちゅう　単式蒸留しょうちゅう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16016,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）ウイスキー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16017,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）ブランデー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16018,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）ウオッカ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16019,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）ジン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16020,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）ラム",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16021,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（蒸留酒類）マオタイ酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16022,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）梅酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16023,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）合成清酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16024,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）白酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16025,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）みりん　本みりん",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16026,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）みりん　本直し",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16027,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）薬味酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16028,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）キュラソー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16029,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）スイートワイン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16030,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）ペパーミント",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16031,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）ベルモット　甘口タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16032,
                "food_group_id"=> 16,
                "food_name"=> "＜アルコール飲料類＞（混成酒類）ベルモット　辛口タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16033,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　玉露　茶",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16034,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　玉露　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16035,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　抹茶",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16036,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　せん茶　茶",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16037,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　せん茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16038,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　かまいり茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16039,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　番茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16040,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　ほうじ茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16041,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（緑茶類）　玄米茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16042,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（発酵茶類）　ウーロン茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16043,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（発酵茶類）　紅茶　茶",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16044,
                "food_group_id"=> 16,
                "food_name"=> "＜茶類＞　（発酵茶類）　紅茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16045,
                "food_group_id"=> 16,
                "food_name"=> "＜コーヒー・ココア類＞　コーヒー　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16046,
                "food_group_id"=> 16,
                "food_name"=> "＜コーヒー・ココア類＞　コーヒー　インスタントコーヒー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16047,
                "food_group_id"=> 16,
                "food_name"=> "＜コーヒー・ココア類＞　コーヒー　コーヒー飲料　乳成分入り　加糖",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16048,
                "food_group_id"=> 16,
                "food_name"=> "＜コーヒー・ココア類＞　ココア　ピュアココア",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16049,
                "food_group_id"=> 16,
                "food_name"=> "＜コーヒー・ココア類＞　ココア　ミルクココア",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16056,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　青汁　ケール",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16050,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　甘酒",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16051,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　昆布茶",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16057,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　スポーツドリンク",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16052,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　（炭酸飲料類）　果実色飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16053,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　（炭酸飲料類）　コーラ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16054,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　（炭酸飲料類）　サイダー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16058,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　（炭酸飲料類）　ビール風味炭酸飲料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 16055,
                "food_group_id"=> 16,
                "food_name"=> "＜その他＞　麦茶　浸出液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17001,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ウスターソース類）　ウスターソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17002,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ウスターソース類）　中濃ソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17003,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ウスターソース類）　濃厚ソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17085,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ウスターソース類）　お好み焼きソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17004,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（辛味調味料類）　トウバンジャン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17005,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（辛味調味料類）　チリペッパーソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17006,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（辛味調味料類）　ラー油",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17007,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）こいくちしょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17008,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）うすくちしょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17009,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）たまりしょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17010,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）さいしこみしょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17011,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）しろしょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17086,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）減塩しょうゆ　こいくち",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17087,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）だししょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17088,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（しょうゆ類）照りしょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17012,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食塩類）食塩",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17013,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食塩類）並塩",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17014,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食塩類）精製塩　家庭用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17089,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食塩類）精製塩　業務用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17090,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食酢類）黒酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17015,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食酢類）穀物酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17016,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食酢類）米酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17091,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食酢類）果実酢　バルサミコ酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17017,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食酢類）果実酢　ぶどう酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17018,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（食酢類）果実酢　りんご酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17019,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）かつおだし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17020,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）昆布だし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17021,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）かつお・昆布だし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17022,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）しいたけだし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17023,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）煮干しだし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17024,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）鳥がらだし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17025,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）中華だし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17026,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）洋風だし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17027,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）固形ブイヨン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17092,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）顆粒おでん用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17093,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）顆粒中華だし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17028,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）顆粒和風だし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17029,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）めんつゆ　ストレート",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17030,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（だし類）めんつゆ　三倍濃厚",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17094,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）甘酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17095,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）エビチリの素",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17031,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）オイスターソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17096,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）黄身酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17097,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）ごま酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17098,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）ごまだれ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17099,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）三杯酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17100,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）二杯酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17101,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）すし酢　ちらし・稲荷用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17102,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）すし酢　にぎり用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17103,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）すし酢　巻き寿司・箱寿司用",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17104,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）中華風合わせ酢",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17105,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）デミグラスソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17106,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）テンメンジャン",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17107,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）ナンプラー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17108,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）冷やし中華のたれ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17109,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）ホワイトソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17110,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）ぽん酢しょうゆ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17032,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）マーボー豆腐の素",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17111,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）マリネ液",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17033,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）ミートソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17112,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）焼き鳥のたれ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17113,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）焼き肉のたれ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17114,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）みたらしのたれ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17115,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（調味ソース類）ゆずこしょう",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17034,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（トマト加工品類）トマトピューレー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17035,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（トマト加工品類）トマトペースト",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17036,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（トマト加工品類）トマトケチャップ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17037,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（トマト加工品類）トマトソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17038,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（トマト加工品類）チリソース",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17039,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）和風ドレッシングタイプ調味料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17040,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）フレンチドレッシング",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17116,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）和風ドレッシング",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17117,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）ごまドレッシング",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17041,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）サウザンアイランドドレッシング",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17042,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）マヨネーズ　全卵型",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17043,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）マヨネーズ　卵黄型",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17118,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ドレッシング類）マヨネーズタイプ調味料　低カロリータイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17044,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）米みそ　甘みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17045,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）米みそ　淡色辛みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17046,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）米みそ　赤色辛みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17047,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）麦みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17048,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）豆みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17119,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）減塩みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17120,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）だし入りみそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17049,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）即席みそ　粉末タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17050,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）即席みそ　ペーストタイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17121,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）辛子酢みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17122,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）ごまみそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17123,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）酢みそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17124,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（みそ類）練りみそ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17051,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ルウ類）　カレールウ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17052,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（ルウ類）　ハヤシルウ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17125,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（その他）　お茶漬けの素　さけ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17053,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（その他）　酒かす",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17126,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（その他）　即席すまし汁",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17127,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（その他）　ふりかけ　たまご",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17054,
                "food_group_id"=> 17,
                "food_name"=> "＜調味料類＞（その他）　みりん風調味料",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17055,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞オールスパイス　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17056,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞オニオンパウダー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17057,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞からし　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17058,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞からし　練り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17059,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞からし　練りマスタード",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17060,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞からし　粒入りマスタード",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17061,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞カレー粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17062,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞クローブ　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17063,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞こしょう　黒　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17064,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞こしょう　白　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17065,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞こしょう　混合　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17066,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞さんしょう　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17067,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞シナモン　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17068,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞しょうが　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17069,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞しょうが　おろし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17070,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞セージ　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17071,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞タイム　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17072,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞チリパウダー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17073,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞とうがらし　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17074,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞ナツメグ　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17075,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞にんにく　ガーリックパウダー　食塩無添加",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17128,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞にんにく　ガーリックパウダー　食塩添加",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17076,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞にんにく　おろし",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17077,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞バジル　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17078,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞パセリ　乾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17079,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞パプリカ　粉",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17080,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞わさび　粉　からし粉入り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17081,
                "food_group_id"=> 17,
                "food_name"=> "＜香辛料類＞わさび　練り",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17082,
                "food_group_id"=> 17,
                "food_name"=> "＜その他＞酵母　パン酵母　圧搾",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17083,
                "food_group_id"=> 17,
                "food_name"=> "＜その他＞酵母　パン酵母　乾燥",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17129,
                "food_group_id"=> 17,
                "food_name"=> "＜その他＞天ぷら用バッター",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 17084,
                "food_group_id"=> 17,
                "food_name"=> "＜その他＞ベーキングパウダー",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18001,
                "food_group_id"=> 18,
                "food_name"=> "カレー　ビーフ　レトルトパウチ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18002,
                "food_group_id"=> 18,
                "food_name"=> "ぎょうざ　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18003,
                "food_group_id"=> 18,
                "food_name"=> "グラタン　えび　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18004,
                "food_group_id"=> 18,
                "food_name"=> "コーンクリームスープ　粉末タイプ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18005,
                "food_group_id"=> 18,
                "food_name"=> "コーンクリームスープ　レトルトパウチ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18006,
                "food_group_id"=> 18,
                "food_name"=> "コロッケ　クリームタイプ　フライ用　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18017,
                "food_group_id"=> 18,
                "food_name"=> "コロッケ　クリームタイプ　フライ済み　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18007,
                "food_group_id"=> 18,
                "food_name"=> "コロッケ　ポテトタイプ　フライ用　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18018,
                "food_group_id"=> 18,
                "food_name"=> "コロッケ　ポテトタイプ　フライ済み　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18008,
                "food_group_id"=> 18,
                "food_name"=> "（魚フライ類）いかフライ　フライ用　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18019,
                "food_group_id"=> 18,
                "food_name"=> "（魚フライ類）いかフライ　フライ済み　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18009,
                "food_group_id"=> 18,
                "food_name"=> "（魚フライ類）えびフライ　フライ用　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18020,
                "food_group_id"=> 18,
                "food_name"=> "（魚フライ類）えびフライ　フライ済み　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18010,
                "food_group_id"=> 18,
                "food_name"=> "（魚フライ類）白身フライ　フライ用　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18021,
                "food_group_id"=> 18,
                "food_name"=> "（魚フライ類）白身フライ　フライ済み　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18011,
                "food_group_id"=> 18,
                "food_name"=> "シチュー　ビーフ　レトルトパウチ",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18012,
                "food_group_id"=> 18,
                "food_name"=> "しゅうまい　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18013,
                "food_group_id"=> 18,
                "food_name"=> "ハンバーグ　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18014,
                "food_group_id"=> 18,
                "food_name"=> "ピラフ　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18015,
                "food_group_id"=> 18,
                "food_name"=> "ミートボール　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18016,
                "food_group_id"=> 18,
                "food_name"=> "メンチカツ　フライ用　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ],
            [
                "id"=> 18022,
                "food_group_id"=> 18,
                "food_name"=> "メンチカツ　フライ済み　冷凍",
                "create_date"=> new DateTime(),
                "update_date"=> null
            ]
        ];

        //登録実行
        foreach($foods as $food){
            \App\MasterFood::create($food);
        }
    }
}
