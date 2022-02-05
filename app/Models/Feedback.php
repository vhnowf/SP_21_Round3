<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = ['id','user_id','content'];

    public function createFeedback(array $attributes){
        $feedback = new self();
        $feedback->feedback_id = $attributes["id"];
        $feedback->user_id = $attributes["user_id"];
        $feedback->content = $attributes["content"];
        $feedback->save();
        return $feedback;
    }

}
