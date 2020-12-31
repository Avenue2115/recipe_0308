@extends('food/common')
@section('content')
    <div class="container ops-main">
        <div class="row">
            <div class="col-md-12">
                <h3 class="ops-title">レシピ一覧</h3>
                <li><a href="./food" class="btn btn-link">食品</a></li>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($recipeSummaries as $recipe)
                    <div class="col-sm">
                        <x-card :recipe="$recipe" />
                    </div>
                @endforeach
            </div>
        </div>

@endsection
