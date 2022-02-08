<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    protected $fillable = ['id','product_id','comment','user_id','photo'];

    public function createComment(array $attributes){
      $comment = new self();
      $comment->product_id = $attributes["product_id"];
      $comment->user_id = $attributes["user_id"];
      $comment->comment = $attributes["comment"];
      $comment->photo = $attributes["photo"];
      $comment->save();
      return $comment;
  }
}
