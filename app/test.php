<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    //データを返すクラス
    public function getData()
    {
        return '名前: '.$this->name.'---メール: '.$this->email; 
    }
}
