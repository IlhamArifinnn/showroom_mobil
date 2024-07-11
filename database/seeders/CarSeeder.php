<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            ['id' => 1, 'name' => 'Toyota Corolla', 'photo' => 'toyota_corolla.jpg', 'type_id' => 1, 'cost_per_day' => 50, 'year' => 2020, 'license_plate' => 'ABC 1234'],
            ['id' => 2, 'name' => 'Honda Civic', 'photo' => 'honda_civic.jpg', 'type_id' => 1, 'cost_per_day' => 55, 'year' => 2021, 'license_plate' => 'DEF 5678'],
            ['id' => 3, 'name' => 'Ford Mustang', 'photo' => 'ford_mustang.jpg', 'type_id' => 2, 'cost_per_day' => 75, 'year' => 2019, 'license_plate' => 'GHI 9012'],
            ['id' => 4, 'name' => 'Nissan Altima', 'photo' => 'nissan_altima.jpg', 'type_id' => 1, 'cost_per_day' => 45, 'year' => 2022, 'license_plate' => 'JKL 3456'],
            ['id' => 5, 'name' => 'Chevrolet Camaro', 'photo' => 'chevrolet_camaro.jpg', 'type_id' => 2, 'cost_per_day' => 80, 'year' => 2018, 'license_plate' => 'MNO 7890'],
        ]);
    }
}
