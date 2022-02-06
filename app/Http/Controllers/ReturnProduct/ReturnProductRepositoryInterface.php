<?php


namespace App\Http\Controllers\ReturnProduct;

interface ReturnProductRepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll();

    /**
     * Find by id
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Create
     * @param array $attributes
     */

    public function create($formData);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
}