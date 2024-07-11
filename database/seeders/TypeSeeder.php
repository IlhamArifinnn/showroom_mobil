<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['id' => 1, 'name' => 'Toyota Corolla', 'description' => 'Mobil sedan kompak yang dikenal dengan keandalannya dan kenyamanan berkendara.'],
            ['id' => 2, 'name' => 'Honda Civic', 'description' => 'Mobil sedan kompak yang terkenal dengan kualitas, keandalan, dan fitur-fitur modern.'],
            ['id' => 3, 'name' => 'Ford Mustang', 'description' => 'Mobil sport ikon Amerika yang terkenal dengan performa tinggi dan desain yang menawan.'],
            ['id' => 4, 'name' => 'Nissan Altima', 'description' => 'Mobil sedan mid-size yang menawarkan performa, efisiensi, dan fitur-fitur modern.'],
            ['id' => 5, 'name' => 'Chevrolet Camaro', 'description' => 'Mobil sport muscle car yang menawarkan pengalaman mengemudi yang menyenangkan dan bertenaga.'],
        ]);
    }
}
