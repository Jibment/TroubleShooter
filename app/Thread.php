<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['title'];
    protected $primaryKey = 'thread_id';
    
    public function makeTitle($title){
        Thread::updateOrCreate( //titleが同じならUpdate,なかったらCreate
            ['title'=>$title],
            ['title' => $title]
        );
        
        return Thread::where('title', $title)->first(); //threds_idを返す
    }
}
