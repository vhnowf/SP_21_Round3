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
                'content' => 'Bảo hành một đổi một trong vòng 1 tháng đầu sử dụng',
                'start_date' => '2022-01-01',
                'expired_date' => '2022-02-01'
            ],
            [
                'id'        => 2,
                'product_id' => 2,
                'content' => 'Bảo hành một đổi một trong vòng 3 tháng đầu sử dụng',
                'start_date' => '2022-01-01',
                'expired_date' => '2022-02-10'
            ],
            [
                'id'        => 3,
                'product_id' => 3,
                'content' => 'Bảo hành một đổi một trong vòng 6 tháng đầu sử dụng',
                'start_date' => '2022-01-01',
                'expired_date' => '2022-02-15'
            ],

        ];
    
        Insurance::insert($insurances);
    }
}
