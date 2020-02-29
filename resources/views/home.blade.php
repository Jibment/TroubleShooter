<?php
/*     $data=DB::table('threads')->get();

    foreach($data as $value){
        $url = "http://localhost/thread/$value->thread_id";
        print "<a href = {$url}>{$value->title}</a><br>";
    } */ //dataのタイトル読み込み
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset="utf-8">
    <title>トラブルシューター</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script type="text/javascript" src="js/home.js"></script>
    
</head>
<body>
<header class="header">
  <nav class="navbar navbar-light">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/">トラブルシューター</a>
    </div>
    </nav>
</header>
    <h1>トラブルシューター</h1>
    <form>
    <input type = "button" value="新しいスレッドを作成する" id ="make_thread" onClick="location.href='http://localhost/data'">
    </form>
</body>
</html>