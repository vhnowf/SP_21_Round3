<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\FeedbackRepositoryInterface;
use App\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FeedbackRepository implements FeedbackRepositoryInterface
{
    
    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll(){
        return $this->feedback->all();
    }
    
    /**
     * Find a feedback
     * @param $id
     * @return mixed
     */
    public function find($id){
        return $this->feedback->find($id);
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */

    public function create(Request $request)
    {
<<<<<<< HEAD
      //  dd($formData);
        $this->feedback = Feedback::create($formData);
=======
        $this->feedback = Feedback::create($request->all());
>>>>>>> ecb3444708ef4fe62338e2130acbff17510f9f95
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