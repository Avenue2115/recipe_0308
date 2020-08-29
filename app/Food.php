<?php
/**
 * 食品情報マスタモデル
 * 20200520
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //対象テーブルを指定する
    //ver.5.7だと複数形で自動的に見つけてくれるって書いてあるのになぁ...
    protected $table = 'foods';
}
