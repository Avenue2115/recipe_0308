<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MasterFood;

/**
 * App\MasterFoodGroup
 *
 * @property int $food_group_id
 * @property string $food_group_name
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup whereFoodGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup whereFoodGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterFoodGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MasterFoodGroup extends Model
{
    //対象テーブルを指定する
    protected $primaryKey = 'food_group_id';
    protected $table = 'master_food_group';

    /**
     * 食品
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function food(){
        return $this->hasOne(MasterFood::class, "food_group_id");
    }
}
