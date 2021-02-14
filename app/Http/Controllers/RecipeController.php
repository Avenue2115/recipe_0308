<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\RecipeSummary;

class RecipeController extends Controller
{

    //TODO:コントローラーに見合った内容のアクションを作成していく
    public function index()
    {

    }

    public function store(RecipeRequest $request)
    {
        \DB::beginTransaction();
        try {
            //TODO:登録対象のModelクラスを全て空で作成する
            //この処理はサービスクラスに移譲できるのでは？
            $recipe = new RecipeSummary();
            $recipe->title = $request->title;
            $recipe->description = $request->description;
            $recipe->total_energy = $request->total_energy;
            $recipe->comment = $request->comment;
            $recipe->create_date = app()->make('DateTime');
            $recipe->save();

            $recipeMaterials = $recipe->recipeMaterials()->createMany($request->get(''));
            $recipeSteps = $recipe->recipeSteps()->createMany($request->get(''));
            //TODO:名称で食材マスタのIDをひっぱてきて登録する必要がある
            /*
            $recipeMaterial->master_foods_id = $request->food;
            $recipeMaterial->amount_to_use = $request->amount_to_use;
            $recipeMaterial->unit = $request->unit;

            $recipeStep->text_of_steps = $request->step;
            */
        }catch (Exception $e){
            \DB::rollback();
            return back()->withInput();
        }
        //TODO:テストコード
        \DB::rollback();
        \DB::commit();
        return view('welcome');
    }

    public function create()
    {

    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function edit()
    {

    }
}
