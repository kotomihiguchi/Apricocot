@extends('layouts.landlordh')

@section('title', '管理者仕事依頼確認画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>仕事依頼</h2>
                <h3>確認画面</h3>
                <p>{{$body}}</p>
                <img src="{{ asset('storage/image/' . $image_path)}}">
                <form action="{{ action('Admin\JobController@update') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="body" value="{{$body}}">
                     <input type="hidden" name="image_path" value="{{$image_path}}">
                    <button type="submit">変更する</button>
                    @csrf
                </form>
                <footer>
                    <a href="{{ action("Admin\LandlordController@index") }}">管理者一覧に戻る<a>
                </footer>
            </div>
        </div>
    </div>
@endsection