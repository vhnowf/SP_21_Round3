<?php

namespace App\Repository;

use App\Contracts\CommentRepositoryInterface;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentRepository implements CommentRepositoryInterface
{
    
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll(){
        return $this->comment->all();
    }
    
    /**
     * Find a comment
     * @param $id
     * @return mixed
     */
    public function find($id){
        return $this->comment->find($id);
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */

    public function create($formData)
    {
        $this->comment = Comment::create($formData);
    }

    /**
     * Delete
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }
}