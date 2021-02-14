<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;
use App\RecipeSummary;

class RecipeListController extends Controller
{
    /**
     * 初回アクセス時処理
     * @return Application|Factory|View
     */
    public function index(FormBuilder $formBuilder)
    {

        $recipeSummaries=RecipeSummary::orderBy("id", "desc")
                                        ->take(10)
                                        ->get();

        //TODO:後で消す。フォームビルダーを試すためのコード
        $form = $formBuilder->create(\App\Forms\FoodForm::class, [
            'method' => 'POST',
            'url' => route('food.store'),
            'id' => 'foodForm'
        ]) ;

        //TODO:後で消す。フォームビルダーの応用コード
        $recipe_form = $formBuilder->create(\App\Forms\RecipeForm::class, [
            'method' => 'POST',
            'url' => route('recipe.store'),
            'id' => 'recipeForm'
        ]) ;

        //TODO:コンポーネントからフォームビルダーへ渡す情報をまとめるためのコード
        //サービスコンテナを使ってモデルクラスのDIを実現
        $modalDetail = app()->make(
            'ModelDetail',
            [
                'modalId' => 'exampleModal',
                'title' => 'RecipeForm',
                'body' => $recipe_form,
                'formId'=> 'recipeForm'
            ]
        );

        //レシピ概要最大10を画面に返却
        return view('recipelist/index', ["recipeSummaries" => $recipeSummaries, "modelDetail" => $modalDetail]);
    }

    /**
     * レシピ詳細画面表示処理
     * @param $id
     * @return Application|Factory|View
     */
    public function details($id)
    {
        try{
            //\DB::enableQueryLog();
            $recipeSummary=RecipeSummary::findOrFail($id);
            $steps=$recipeSummary->recipeSteps()->get();
            $materials=$recipeSummary->recipeMaterials()
                ->get();
            $foods=array();
            foreach ($materials as $material) {
                array_push($foods, $material->food()->find($material->master_foods_id));
            }
            //dd(\DB::getQueryLog());

            return view('recipe/details',
                [
                    "recipeSummary" => $recipeSummary,
                    "steps" => $steps,
                    "foods"=>$foods
                ]
            );
        }catch(\Exception $ex){
            \Log::alert($ex);
            return view('welcome');
        }
    }
}
