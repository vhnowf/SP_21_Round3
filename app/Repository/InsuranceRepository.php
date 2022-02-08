<?php

namespace App\Repository;

use App\Contracts\InsuranceRepositoryInterface;
use App\Models\Insurance;
use Carbon\Carbon;

class InsuranceRepository implements InsuranceRepositoryInterface
{
    
    public function __construct(Insurance $insurance)
    {
        $this->insurance = $insurance;
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll(){
        return $this->insurance->all();
    }
    
    /**
     * Find a feedback
     * @param $id
     * @return mixed
     */
    public function find($id){
        $result = Insurance::where('code',$id)->first();
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */

    public function create($formData)
    {
     //   dd($formData);
        $this->insurance = Insurance::create($formData);
      
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