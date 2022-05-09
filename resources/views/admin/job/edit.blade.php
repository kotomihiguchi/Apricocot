@extends('layouts.landlordh')

@section('title', '管理者仕事依頼編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>仕事依頼</h2>
                <h3>編集</h3>
                <main>変更部分</main>
                  <a href="{{ action("Admin\JobController@check") }}">確認画面へ</a>
                <footer>
                    <a href="{{ action("Admin\LandlordController@index") }}">管理者一覧に戻る<a>
                </footer>
            </div>
        </div>
    </div>
@endsection