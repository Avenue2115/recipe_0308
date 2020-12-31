<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecipeSummary;
use App\RecipeStep;
use phpDocumentor\Reflection\Types\Integer;

class RecipeListController extends Controller
{
    /**
     * 初回アクセス時処理
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $recipeSummaries=RecipeSummary::orderBy("id", "desc")
                                        ->take(10)
                                        ->get();

        //レシピ概要最大10を画面に返却
        return view('recipelist/index', ["recipeSummaries" => $recipeSummaries]);
    }

    /**
     * レシピ詳細画面表示処理
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search($id){
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
