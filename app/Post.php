<?php

namespace App;


class Post extends Model
{
    //
    //protected $fillable=['title','body'];
    //protected $guarded=[];
    //Lesson 15
    public function comments(){

        //return $this->hasMany('\App\Comment')
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){
        // Comment::create([
        //     'body' => $body,
        //     'post_id'=> $this->id
        // ]);

        $this->comments()->create(compact('body'));
    }
}
