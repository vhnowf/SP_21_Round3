<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [

            [
                'id' => 1,
                'product_id' => 1,
                'user_id' => 2,
                'comment' => 'Sản phẩm này còn màu đỏ không ạ?',
                'photo' => "null"
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'user_id' => 2,
                'comment' => 'Sản phẩm này đẹp quá',
                'photo' => "null"
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'user_id' => 3,
                'comment' => 'Chất lượng đảm bảo, giá phù hợp',
                'photo' => "null"
            ],
            [
                'id' => 4,
                'product_id' => 2,
                'user_id' => 4,
                'comment' => 'Sản phẩm giống hình mẫu, giá hợp lí',
                'photo' => "shorturl.at/qruwF"
            ],
            [
                'id' => 5,
                'product_id' => 2,
                'user_id' => 3,
                'comment' => 'Sản phẩm này đẹp quá',
                'photo' => "null"
            ],

        ];
        Comment::insert($comments);
    }
}
