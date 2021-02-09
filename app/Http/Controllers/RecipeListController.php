<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use App\RecipeSummary;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class RecipeListController extends Controller
{
    /**
     * 初回アクセス時処理
     * @return Application|Factory|View
     */
    public function index(FormBuilder $formBuilder){

        $recipeSummaries=RecipeSummary::orderBy("id", "desc")
                                        ->take(10)
                                        ->get();

        $form = $formBuilder->create(\App\Forms\FoodForm::class, [
            'method' => 'POST',
            'url' => route('food.create')
        ]) ;

        //サービスコンテナを使ってモデルクラスのDIを実現
        $modalDetail = app()->make(
            'ModelDetail',
            [
                'id' => 'exampleModal',
                'title' => 'Food',
                'body' => $form,
                'postUrl'=> '#'
            ]
        );

        //レシピ概要最大10を画面に返却
        return view('recipelist/index', ["recipeSummaries" => $recipeSummaries, "modelDetail" => $modalDetail, "form" => $form]);
    }

    /**
     * レシピ詳細画面表示処理
     * @param $id
     * @return Application|Factory|View
     */
    public function details($id){
        try{
            //\DB::enableQueryLog();
            $recipeSummary=RecipeSummary::findOrFail($id);
            $steps=$recipeSummary->recipeSteps()->get();
            $materials=$recipeSummary->recipeMaterials()
                ->get();
            $foods=array();
            foreach ($materials as $material) {
                array_push($foods,$material->food()->find($material->master_foods_id));
            }
            //dd(\DB::getQueryLog());

            return view('recipe/details',
                [
                    "recipeSummary" => $recipeSummary,
                    "steps" => $steps,
                    "foods"=>$foods
                ]);
        }catch(\Exception $ex){
            \Log::alert($ex);
            return view('welcome');
        }
    }
}
