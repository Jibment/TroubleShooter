<?php
//DB::table('photo')->where('id', '111')->update(['name'=> 'Yamada']); 簡単な接続

use App\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

?>

    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thread</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<h1>トラブルシューター</h1>
<input type="button" value="make_class" onClick="make_class(0,0)">
<form action="" method="POST">
    @csrf
    タイトルはここ！
    <textarea name="title"></textarea>
    <div id="wrapper" class="content"></div>
    <input type="submit" value="送信">
</form>
<script type="text/javascript">

    let col = 0;
    let row = 0;

    //クラスの作成

    class Temp {

        constructor(col, row) {
            this.col = col;
            this.row = row;
        }

        make_temp(num1, num2) {

            const id = String(this.col) + "-" + String(this.row);
            //タグの生成
            var top = document.createElement('h2');
            var test = document.createElement('textarea');
            var addunderbutton = document.createElement('input');
            var addrightbutton = document.createElement('input');
            var addLowerRightbutton = document.createElement('input');


            top.innerHTML = id;
            //テキストエリアの設定
            test.name = `comment[${this.col}][${this.row}]`;
            test.cols = 40;

            //ボタンの設定
            addunderbutton.type = 'button';
            addunderbutton.value = '下に追加';
            addunderbutton.addEventListener('click', () => {
                addunderbutton.classList.add('hidden');
            }, false);
            addunderbutton.addEventListener('click', () => {

                new Temp(this.col + 1, this.row).make_temp(); //下に追加　行を1追加

            }, false);

            addrightbutton.type = 'button';
            addrightbutton.value = '右に追加';
            addrightbutton.addEventListener('click', () => {
                addrightbutton.classList.add('hidden');
                test.classList.add('addRight');

            })
            addrightbutton.addEventListener('click', () => {
                new Temp(this.col, this.row + 1).make_temp(); //右に追加 列を1追加
            }, false);

            addLowerRightbutton.type = 'button';
            addLowerRightbutton.value = '右下に追加';
            addLowerRightbutton.addEventListener('click', () => {
                addLowerRightbutton.classList.add('hidden');
            })
            addLowerRightbutton.addEventListener('click', () => {
                new Temp(this.col + 1, this.row + 1).make_temp();//右下に追加 行と列を1追加
            }, false);
            //追加
            document.getElementById('wrapper').appendChild(top);
            document.getElementById('wrapper').appendChild(test);
            document.getElementById('wrapper').appendChild(addunderbutton);
            document.getElementById('wrapper').appendChild(addrightbutton);
            document.getElementById('wrapper').appendChild(addLowerRightbutton);

        }

    }

    function make_class(col, row) {
        new Temp(col, row).make_temp();
    }

</script>
</body>
</html>
