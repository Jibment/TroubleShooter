<?php

  echo url()->current();
  echo route('thread.show',['id'=> 1]);
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
  <meta charset="utf-8">
  <title>トラブルシューター</title>
  <script type="text/javascript" src="{{ asset('js/make_thread.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
  <form action = "save" method ="POST">
    @csrf
    タイトルはここ！
    <textarea name ="title" required></textarea>
    <section  id ="wrapper">
    </section>
    <input type ="submit" value="送信">
  </form>
</body>
</html>