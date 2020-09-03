<?php
/**
 * レシピ詳細情報マスタモデル
 * 20200623
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RecipeMaterial
 *
 * @property int $id
 * @property int $recipe_id
 * @property int $food_id
 * @property float $food_amount_to_use
 * @property string $food_unit
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereFoodAmountToUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereFoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereFoodUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMaterial whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RecipeMaterial extends Model
{
    //対象テーブルを指定する
    protected $table = 'recipe_materials';
}
