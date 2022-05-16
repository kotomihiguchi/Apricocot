@extends('layouts.landlordh')

@section('title', '管理者画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <main>
           　        <a href="{{ action("Admin\TopController@index") }}">トップ</a>
                    <a href="{{ action("Admin\BlogController@add") }}">ブログ</a>
                    <a href="{{ action("Admin\JobController@index") }}">仕事依頼</a>
                    <a >オンラインショップ</a>
                    <a >問い合わせ</a>
                    <a >登録者</a>
                </main>
            </div>
        </div>
    </div>
@endsection
