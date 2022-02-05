<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = [

            [
                'id'  => 1,
                'user_id'      => 1, 
                'content'      => 'Tư vấn nhiệt tình',
            ],
            [
                'id'  => 2,
                'user_id'      => 2, 
                'content'      => 'Gói hàng cẩn thận',
            ],
            [
                'id'  => 3,
                'user_id'      => 3, 
                'content'      => 'Giao hàng nhanh chóng',
            ]

        ];
    
        Feedback::insert($feedbacks);
    }
}
