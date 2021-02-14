<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\MasterFoodGroupRequest;
use App\MasterFoodGroup;

class MasterFoodGroupController extends Controller
{
    //初期表示処理
    public function index()
    {
        // DBよりfoodsテーブルの値を全て取得
        $MasterFoodGroups = MasterFoodGroup::all();

        // 取得した値をビュー「food/index」に渡す
        return view('MasterFoodGroup/index', compact('MasterFoodGroups'));
    }

    //編集処理
    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つfoodの情報を取得
        $MasterFoodGroups = MasterFoodGroup::findOrFail($id);

        // food/editに渡す
        return view('MasterFoodGroup/edit', compact('MasterFoodGroups'));
    }


    //編集画面繊維処理
    public function update(MasterFoodGroupRequest $request, $id)
    {
    $MasterFoodGroups = MasterFoodGroup::findOrFail($id);
    $MasterFoodGroups->food_group_id = $request->food_group_id;
    $MasterFoodGroups->food_group_name = $request->food_group_name;
    $MasterFoodGroups->save();

    return redirect("/MasterFoodGroup");
    }
    //削除処理
    public function destroy($id)
    {
    $MasterFoodGroups = MasterFoodGroup::findOrFail($id);
    $MasterFoodGroups->delete();

    return redirect("/MasterFoodGroup");
    }

    //登録処理
    public function create()
    {
    // 空の$MasterFoodGroupsを渡す
    $MasterFoodGroups = new MasterFoodGroup();
    return view('MasterFoodGroup/create', compact('MasterFoodGroups'));
    }

    //
    public function store(MasterFoodGroupRequest $request)
    {
    $MasterFoodGroups = new MasterFoodGroup();
    $MasterFoodGroups->food_group_id = $request->food_group_id;
    $MasterFoodGroups->food_group_name = $request->food_group_name;
    $MasterFoodGroups->save();

    return redirect("/MasterFoodGroups");
    }
}
