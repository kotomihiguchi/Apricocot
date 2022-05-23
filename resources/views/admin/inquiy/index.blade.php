@extends('layouts.landloadh')
@section('title', '問い合わせ')

@section('content')
    <div class="container">
        <div class="row">
            <h2>問い合わせ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\InquiyController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\InquiyController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">名前</th>
                                <th width="10%">メールアドレス</th>
                                <th width="30%">カテゴリ</th>
                                <th width="30%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $inquiy)
                                <tr>
                                    <th>{{ $inquiy->id }}</th>
                                    <td>{{ \Str::limit($inquiy->name, 20) }}</td>
                                    <td>{{ \Str::limit($inquiy->email, 20) }}</td>
                                    <td>{{ \Str::limit($inquiy->category, 100) }}</td>
                                    <td>{{ \Str::limit($inquiy->text, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection