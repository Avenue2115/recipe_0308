<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodRequest;
use App\Food;

class FoodController extends Controller
{
    //初期表示処理
    public function index()
  {
      // DBよりfoodsテーブルの値を全て取得
      $foods = Food::all();

      // 取得した値をビュー「food/index」に渡す
      return view('food/index', compact('foods'));
  }

  //編集処理
  public function edit($id)
  {
    // DBよりURIパラメータと同じIDを持つfoodの情報を取得
    $food = Food::findOrFail($id);
    
      // food/editに渡す
    return view('food/edit', compact('food'));
  }

  //編集画面繊維処理
  public function update(FoodRequest $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->name = $request->name;
        $food->energy = $request->enerrgy;
        $food->protein = $request->protein;
        $food->lipid = $request->lipid;
        $food->carbohydrate = $request->carbohydrate;
        $food->salt_equivalent = $request->salt_equivalent;
        $food->save();

        return redirect("/food");
    }
    //削除処理
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();

        return redirect("/food");
    }

    //登録処理
    public function create()
    {
        // 空の$foodを渡す
        $food = new Food();
        return view('food/create', compact('food'));
    }

    //
    public function store(FoodRequest $request)
    {
        $food = new Food();
        $food->name = $request->name;
        $food->energy = $request->enerrgy;
        $food->protein = $request->protein;
        $food->lipid = $request->lipid;
        $food->carbohydrate = $request->carbohydrate;
        $food->salt_equivalent = $request->salt_equivalent;
        $food->save();

        return redirect("/food");
    }
}