<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RecipeStep
 *
 * @property int $id
 * @property int $recipe_id
 * @property int $number_of_steps
 * @property string $text_of_steps
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereNumberOfSteps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereTextOfSteps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeStep whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RecipeStep extends Model
{
    //対象テーブルを指定する
    protected $table = 'recipe_steps';
}
