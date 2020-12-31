@extends('food/common')
@section('content')
    <div class="container ops-main">
        <div class="row">
            <div class="col-md-12">
                <h3 class="ops-title">レシピ詳細</h3>
                <a href="/RecipeSummary" class="btn btn-link">レシピ一覧</a>
            </div>
        </div>
        <div class="row">
            <div class="col-4">レシピ名</div>
            <div class="col-lg-8">{{ optional($recipeSummary)->title }}</div>
        </div>
        <div class="row">
            <div class="col-4">詳細</div>
            <div class="col-lg-8">{{ optional($recipeSummary)->description }}</div>
        </div>
        @if(isset($steps))
            <div class="row">
                <div class="col-4">材料</div>
                <div class="col-lg-8"></div>
            </div>
        @endif
        @foreach($foods as $food)
            <div class="row">
                <div class="col-4">{{ optional($food)->id }}</div>
                <div class="col-lg-8">{{ optional($food)->food_name  }}</div>
            </div>
        @endforeach

    @if(isset($steps))
            <div class="row">
                <div class="col-4">手順</div>
                <div class="col-lg-8"></div>
            </div>
        @endif
        @foreach($steps as $step)
            <div class="row">
                <div class="col-4">{{ optional($step) -> id }}</div>
                <div class="col-lg-8">{{ optional($step)->text_of_steps }}</div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-4">摂取カロリー</div>
            <div class="col-lg-8">{{ optional($recipeSummary)->total_energy }}</div>
        </div>
        <div class="row">
            <div class="col-4">備考</div>
            <div class="col-lg-8">{{ optional($recipeSummary)->comment }}</div>
        </div>
    </div>

@endsection
