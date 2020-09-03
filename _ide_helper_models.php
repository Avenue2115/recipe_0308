<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class Food extends \Eloquent {}
}

namespace App{
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
	class MasterFoodGroup extends \Eloquent {}
}

namespace App{
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
	class RecipeMaterial extends \Eloquent {}
}

namespace App{
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
	class RecipeStep extends \Eloquent {}
}

namespace App{
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
	class RecipeSummary extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

