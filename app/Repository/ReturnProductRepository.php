<?php

namespace App\Repository;

use App\Contracts\ReturnProductRepositoryInterface;
use App\Models\ReturnProduct;
use Carbon\Carbon;

class ReturnProductRepository implements ReturnProductRepositoryInterface
{
    
    public function __construct(ReturnProduct $returnproduct)
    {
        $this->returnproduct = $returnproduct;
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll(){
        return $this->returnproduct->all();
    }
    
    /**
     * Find a feedback
     * @param $id
     * @return mixed
     */
    public function find($id){
        return $this->returnproduct->find($id);
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */

    public function create($formData)
    {
     //   dd($formData);
        $this->returnproduct = ReturnProduct::create($formData);
      
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