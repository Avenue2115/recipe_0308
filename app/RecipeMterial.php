<?php
/**
 * レシピ詳細情報マスタモデル
 * 20200623
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeMaterial extends Model
{
    //対象テーブルを指定する
    protected $table = 'recipe_materials';
}
