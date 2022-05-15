@extends('layouts.landlordh')
@section('title', '管理者Top編集確認画面')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>仕事依頼</h2>
                <h3>確認画面</h3>
                <main>変更した部分</main>
                <form action="/admin/top/index">
                    <button type="submit">変更する</button>
                </form>
                <footer>
                    <a href="{{ action("Admin\LandlordController@index") }}">管理者一覧に戻る<a>
                </footer>
            </div>
        </div>
    </div>
@endsection