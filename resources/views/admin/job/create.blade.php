@extends('layouts.landlordh')

@section('title', '管理者仕事依頼確認画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>仕事依頼</h2>
                <form action="{{ action('Admin\JobController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                  <div class="form-group row">
                    <label class="col-md-2">本文</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="body" value="{{ old('body') }}">
                        <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    @csrf
                     <input type="submit" class="btn btn-primary" value="投稿">
                </form>  
                <footer>
                    <a href="{{ action("Admin\LandlordController@index") }}">管理者一覧に戻る<a>
                </footer>
            </div>
        </div>
    </div>
@endsection