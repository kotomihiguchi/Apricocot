{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.toph')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Apricocot')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <p><img src="ApricocotTop1.png" alt="空と海の写真" title="Top画"></p>
@endsection