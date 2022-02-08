<?php

namespace App\Http\Controllers\Comment;

use App\Models\Comment;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;
use App\Repository\CommentRepository;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::all();
        foreach($comments as $comment){
            $user = User::find($comment['user_id']);
            $comment['username'] = $user->name;
        }

        return view('comment.index', compact('comments'));
    }
      
    public function store(Request $request, CommentRepository $commentRepository)
    {
    
        $formData['product_id'] = 1;
        $formData['comment'] = $request->content;
        $formData['user_id']  = auth()->user()->id;  
        $formData['photo']  = "null";
       // dd($formData);
        $commentRepository->create($formData);
        return redirect()->route('comment.index')->with('success','Send a comment
        successfully');
    }
}
