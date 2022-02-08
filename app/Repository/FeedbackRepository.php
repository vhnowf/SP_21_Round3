<?php

namespace App\Repository;

use App\Contracts\FeedbackRepositoryInterface;
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

    public function create($formData)
    {
        $this->feedback = Feedback::create($formData);
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