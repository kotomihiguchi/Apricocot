@extends('layouts.landlordh')

@section('title', '管理者仕事依頼')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>仕事依頼</h2>
                 <p>現在表示の仕事依頼</p>
                 <a href="{{ action("Admin\JobController@edit") }}">編集する</a>
                 
                <footer>
                    <a href="{{ action("Admin\LandlordController@index") }}">管理者一覧に戻る<a>
                </footer>
            </div>
        </div>
    </div>
@endsection