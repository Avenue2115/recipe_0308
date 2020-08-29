<div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">食品登録</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
        @include('food/message')
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'store')
            <form action="/food" method="post">
            @elseif ($target == 'update')
            <form action="/food/{{ $food->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">食品名</label>
                    <input type="text" class="form-control" name="name" value="{{ $food->name }}">
                </div>
                <div class="form-group">
                    <label for="price">エネルギー</label>
                    <input type="text" class="form-control" name="price" value="{{ $food->energy }}">
                </div>
                <div class="form-group">
                    <label for="author">タンパク質</label>
                    <input type="text" class="form-control" name="author" value="{{ $food->protein }}">
                </div>
                <div class="form-group">
                    <label for="author">脂質</label>
                    <input type="text" class="form-control" name="author" value="{{ $food->lipid }}">
                </div>
                <div class="form-group">
                    <label for="author">炭水化物</label>
                    <input type="text" class="form-control" name="author" value="{{ $food->carbohydrate }}">
                </div>
                <div class="form-group">
                    <label for="author">食塩相当量</label>
                    <input type="text" class="form-control" name="author" value="{{ $food->salt_equivalent }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/food">戻る</a>
            </form>
        </div>
    </div>
  </div>
