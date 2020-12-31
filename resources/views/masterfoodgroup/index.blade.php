@extends('MasterFoodGroup/common')
@section('content')
<div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <h3 class="ops-title">食品群一覧</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarEexample">
                <ul class="nav navbar-nav">
                    <li><a href="/food" class="btn btn-link">食品</a></li>
                </ul>
            </div>
        </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
      <table class="table table-striped text-center">
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">食品群名</th>
            <th class="text-center">-</th>
        </tr>
        @foreach($MasterFoodGroups as $MasterFoodGroup)
        <tr>
          <td>
            <a href="/MasterFoodGroup/{{ $MasterFoodGroup->food_group_id }}/edit">{{ $MasterFoodGroup->food_group_id }}</a>
          </td>
          <td>{{ $MasterFoodGroup->food_group_name }}</td>
          <td>
            <form action="/MasterFoodGroup/{{ $MasterFoodGroup->food_group_id }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
      <div><a href="/MasterFoodGroup/create" class="btn btn-default">新規作成</a></div>
    </div>
  </div>
@endsection
