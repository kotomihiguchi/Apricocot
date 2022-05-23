@extends('layouts.landlordh')
@section('title', '問い合わせ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>問い合わせ一覧</h2>
                <form action="{{ action('Admin\InquiyController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $inquly_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="email" value="{{ $profile_form->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">問い合わせカテゴリ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="category" value="{{ $profile_form->category }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="text" rows="20">{{ $inquiy_form->text }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $profile_form->id }}">
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection