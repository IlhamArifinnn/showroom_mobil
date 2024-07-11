<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loans')->insert([
            ['id' => 1, 'car_id' => 1, 'user_id' => 1, 'loan_date' => '2023-05-01', 'return_date' => '2023-05-15', 'total_cost' => 1000, 'status' => 'approved'],
            ['id' => 2, 'car_id' => 2, 'user_id' => 2, 'loan_date' => '2023-06-01', 'return_date' => '2023-06-15', 'total_cost' => 800, 'status' => 'pending'],
            ['id' => 3, 'car_id' => 3, 'user_id' => 3, 'loan_date' => '2023-07-01', 'return_date' => '2023-07-15', 'total_cost' => 1200, 'status' => 'pending'],
            ['id' => 4, 'car_id' => 4, 'user_id' => 1, 'loan_date' => '2023-08-01', 'return_date' => '2023-08-15', 'total_cost' => 900, 'status' => 'returned'],
            ['id' => 5, 'car_id' => 5, 'user_id' => 2, 'loan_date' => '2023-09-01', 'return_date' => '2023-09-15', 'total_cost' => 1100, 'status' => 'approved'],
        ]);
    }
}
