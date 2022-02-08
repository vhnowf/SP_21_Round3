<?php

namespace Database\Seeders;

use App\Models\Insurance;
use Illuminate\Database\Seeder;

class InsurancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insurances = [

            [
                'id'        => 1,
                'product_id' => 1,
                'product_name' => 'Quạt sưởi ấm đa năng 2 chiều tiết kiệm điện',
                'user_name'   => 'Lê Văn An',
                'phone' => '0981231234',
                'code'   => 'HD652MI',
                'content' => 'Bảo hành một đổi một trong vòng 1 tháng đầu sử dụng',
                'buy_date' =>  '2022-01-01',
                'start_date' => '2022-01-01',
                'expired_date' => '2022-02-01'
            ],
            [
                'id'        => 2,
                'product_id' => 2,
                'product_name' => 'Máy hấp thực phẩm Magic Korea A64 5L',
                'code'   => '2LE56XY',
                'phone' => '0981235534',
                'user_name'   => 'Hoàng Văn Nghĩa',
                'content' => 'Bảo hành một đổi một trong vòng 3 tháng đầu sử dụng',
                'buy_date' =>  '2022-01-01',
                'start_date' => '2022-01-01',
                'expired_date' => '2022-04-01'
            ],
            [
                'id'        => 3,
                'product_id' => 3,
                'product_name' => 'Máy Vắt Cam 700ml Lock&Lock - AMZO ',
                'user_name'   => 'Nguyễn Thị Mai',
                'phone' => '0961289534',
                'code'   => 'MI233OX',
                'content' => 'Bảo hành một đổi một trong vòng 6 tháng đầu sử dụng',
                'buy_date' =>  '2022-01-01',
                'start_date' => '2022-01-01',
                'expired_date' => '2022-06-01'
            ],

        ];
    
        Insurance::insert($insurances);
    }
}
