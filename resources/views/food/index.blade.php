@extends('food/common')
@section('content')
<div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">食品一覧</h3>
        <a href="/MasterFoodGroup" class="btn btn-link">食品群</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
      <table class="table table-striped text-center">
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">食品名</th>
          <th class="text-center">エネルギー</th>
          <th class="text-center">タンパク質</th>
          <th class="text-center">脂質</th>
          <th class="text-center">炭水化物</th>
          <th class="text-center">食塩相当量</th>
            <th class="text-center">-</th>
        </tr>
        @foreach($foods as $food)
        <tr>
          <td>
            <a href="/food/{{ $food->id }}/edit">{{ $food->id }}</a>
          </td>
          <td>{{ $food->name }}</td>
          <td>{{ $food->energy }}</td>
          <td>{{ $food->protein }}</td>
          <td>{{ $food->lipid }}</td>
          <td>{{ $food->carbohydrate }}</td>
          <td>{{ $food->salt_equivalent }}</td>
          <td>
            <form action="/food/{{ $food->id }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-danger">削除<span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
        <div class="container">
            <div class="row">
                <div class="col-auto"><a href="/food/create" class="btn btn-primary">新規作成</a></div>
                <div class="col-auto"><a href="/RecipeSummary" class="btn btn-primary">レシピ</a></div>
            </div>
        </div>
    </div>
  </div>

@endsection
