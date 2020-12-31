<div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">食品登録</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
        @include('MasterFoodGroup/message')
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'store')
            <form action="/MasterFoodGroup" method="post">
            @elseif ($target == 'update')
            <form action="/MasterFoodGroup/{{ $MasterFoodGroups->food_group_id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">食品群名</label>
                    <input type="text" class="form-control" name="name" value="{{ $MasterFoodGroups->food_group_name }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/MasterFoodGroup">戻る</a>
            </form>
        </div>
    </div>
  </div>
</div>
