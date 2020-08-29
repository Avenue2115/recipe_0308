<?php
/**
 * レシピ概要情報マスタモデル
 * 20200623
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeSummary extends Model
{
    //対象テーブルを指定する
    protected $table = 'recipe_summaries';
}
