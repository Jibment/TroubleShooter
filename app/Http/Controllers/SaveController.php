<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Thread;
use App\Content;

class SaveController extends Controller
{
    /**
     * 新しいflightインスタンスの生成
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // リクエストのバリデート処理…

        $title = $request->input('title'); //title取得
        $title_class = new Thread;  //thread_id,title,createtime
        $id = $title_class->makeTitle($title);  //thread_idを取得
        $text_ary = $request->input('comment',NULL); //内容を二次元配列で格納
        if($text_ary != NULL){
        foreach($text_ary as $key1=>$col){
            foreach($col as $key2=>$text){
                $contents = new Content; //データのクラス
                $contents->checkdata($id->thread_id,$key1,$key2,$text); //thread_id,行、列、内容
            }
        }
    }

       // echo $request->input('comment.0.0', '何も入力されていません');
      //  return view('thread');
      return view('save')->with('id',$id->thread_id);
    }
}

?>