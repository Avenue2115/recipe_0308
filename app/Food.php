<?php
/**
 * 食品情報マスタモデル
 * 20200520
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Food
 *
 * @property int $id
 * @property string $name
 * @property float $energy
 * @property float $protein
 * @property float $lipid
 * @property float $carbohydrate
 * @property float $salt_equivalent
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Food newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Food newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Food query()
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereCarbohydrate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereEnergy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereLipid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereProtein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereSaltEquivalent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Food extends Model
{
    //対象テーブルを指定する
    //ver.5.7だと複数形で自動的に見つけてくれるって書いてあるのになぁ...
    protected $table = 'foods';
}
