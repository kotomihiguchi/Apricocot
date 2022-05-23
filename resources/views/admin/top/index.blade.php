{{-- layouts/landlordh.blade.phpを読み込む --}}
@extends('layouts.landlordh')
{{-- landlordh.blade.phpの@yield('title')に埋め込む --}}
@section('title', '管理者Top編集')
{{-- landloadh.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>TOP編集</h2>
        @if($top!=null)
        <p><img src="{{ asset('storage/image/' . $top->image_path)}}"></p>
        @endif
        <a href="{{ action("Admin\TopController@edit") }}">画像を変更する</a>
        <footer>
          <a href="{{ action("Admin\LandlordController@index") }}">管理者一覧に戻る<a>
        </footer>
      </div>
    </div>
  </div>
@endsection