<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;
use App\MasterFoodGroup;
use App\RecipeMaterial;


/**
 * Class MasterFood
 * App\MasterFood
 *
 * @property int $id
 * @property int $food_group_id
 * @property string $food_name
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood query()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereFoodAmountToUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereFoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereFoodUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFood whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MasterFood extends Model
{
    //対象テーブルを指定する
    protected $table = 'master_foods';
    protected $primaryKey = 'id';

    /**
     * 食品群
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function foodGroup(){
        return $this->belongsTo(MasterFoodGroup::class, "food_group_id");
    }

    public function recipeMaterial(){
        return $this->belongsTo(RecipeMaterial::class);
    }

    /**
     * 食品群名で検索
     * @param Integer $id
     * @return mixed
     */
    public function searchByFoodGroup(Integer $id){
        return MasterFood::join("master_food_group", "master_foods.food_group_id", "master_food_group.food_group_id")
            ->where('master_food_group.food_group_name')
            ->findOrfail();
    }
}
