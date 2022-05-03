<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ secure_asset('css/landlord.css') }}" rel="stylesheet">
        <title>管理者Top</title>
    </head>
    <body>
        <header>
            <h1>Apricocot管理者画面</h1>
            <p>×ログアウト</p>
        <header>
        <main>
            <a>トップ</a>
            <a href="{{ action("Admin\BlogController@add") }}">ブログ</a>
            <a href="{{ action("Admin\jobController@index") }}">仕事依頼</a>
            <a >オンラインショップ</a>
            <a>問い合わせ</a>
            <a>登録者</a>
        </main>
        <footer>
            <a href="{{ action("Admin\LandlordController@index") }}">管理者一覧に戻る<a>
        </footer>
    </body>
    
</html>