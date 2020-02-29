<?php
    use App\Thread;
    use App\Content;
 // echo url()->current();
  //echo route('thread.show',['id'=> 1]);

  $item = App\Thread::find($id);
  $text = App\Content::where('thread_id', $id)->orderBy('column','asc')->orderBy('row','asc')->get();
  var_dump($item->title);
  //var_dump($text->text);
  foreach($text as $text){
      print "<h2>$text->text</h2>";
  }
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
  <meta charset="utf-8">
  <title>トラブルシューター</title>
  <script type="text/javascript" src="js/make_thread.js"></script>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="header fixed-top">
  <nav class="navbar navbar-light">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/">トラブルシューター</a>
    </div>
    </nav>
</header>
  <h1>トラブルシューター</h1>
</body>
</html>