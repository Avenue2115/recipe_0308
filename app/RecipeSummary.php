<?php
/**
 * レシピ概要情報マスタモデル
 * 20200623
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\String_;
use App\RecipeMaterial;
use App\RecipeStep;

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
    protected $fillable = [
        'number_of_steps',
        'text_of_steps'
    ];

    /**
     * 材料を取得
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeMaterials()
    {
        return $this->hasMany(RecipeMaterial::class);
    }

    /**
     * 説明を取得
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeSteps()
    {
        return $this->hasMany(RecipeStep::class);
        //, 'recipe_steps.recipe_summary_id', 'recipe_summaries.id'
    }

    /**
     * タイトルで検索
     * @param String $tittle
     * @return RecipeSummary|RecipeSummary[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model|null
     *
     */
    public function searchByTittle(String $tittle)
    {
        return RecipeSummary::where("tittle", $tittle)->get();
    }

    /**
     * 材料で検索
     * @param String $material
     * @return mixed
     */
    public function searchByMaterial(String $material)
    {
        return RecipeSummary::join("recipe_materials", "recipe_summaries.id" , "=", "recipe_materials.recipe_id")
            ->join("foods","recipe_summaries.food_id","=","foods.id")
            ->where("foods.name", $material)
            ->get();
    }
}
