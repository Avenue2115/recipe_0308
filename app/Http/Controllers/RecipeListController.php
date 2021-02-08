<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\RecipeSummary;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Integer;

class RecipeListController extends Controller
{
    /**
     * 初回アクセス時処理
     * @return Application|Factory|View
     */
    public function index(){

        $recipeSummaries=RecipeSummary::orderBy("id", "desc")
                                        ->take(10)
                                        ->get();

        //サービスコンテナを使ってモデルクラスのDIを実現
        $modalDetail = app()->make(
            'ModelDetail',
            [
                'id' => 'exampleModal',
                'title' => 'title',
                'body' => 'body',
                'postUrl'=> '#'
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
