<?php
  echo url()->current();
  echo route('thread.show',['id'=> $id]);
  echo $id;
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
  <h2>記事が保存されました</h2>
  <a href = "<?php echo route('thread.show',['id'=>$id])?>">URLはここ!</a> 
</body>
</html>