<?php


namespace App\Https\Controllers\Feedback;


interface FeedbackRepositoryInterface
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

    public function create(Request $request);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
}