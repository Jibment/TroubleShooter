<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['thread_id','text', 'column', 'row'];

    protected $primarykey = null;

    public function checkdata($id,$col,$row,$value){ //同じデータがあったら更新なかったら作る
        Content::updateOrCreate(
            ['thread_id'=>$id,'column'=>$col , 'row'=> $row], //行と列があったら
            ['text'=>$value] //テキストを更新
        );
    }
}
