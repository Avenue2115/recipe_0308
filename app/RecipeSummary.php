<?php
/**
 * レシピ概要情報マスタモデル
 * 20200623
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RecipeSummary
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property float $total_energy
 * @property string|null $comment
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereTotalEnergy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeSummary whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RecipeSummary extends Model
{
    //対象テーブルを指定する
    protected $table = 'recipe_summaries';
}
