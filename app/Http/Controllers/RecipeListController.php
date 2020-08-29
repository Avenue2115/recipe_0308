<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeListController extends Controller
{
    //初回アクセス時にレシピ概要を表示するようにする
    public function index(){
        return view('recipelist/index');
    }

    //レシピ検索時の返却
    public function search(){
        
    }
}
