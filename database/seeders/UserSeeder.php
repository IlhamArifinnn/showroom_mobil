<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'fullname' => 'Afifaa', 'username' => 'fifaa', 'password' => bcrypt('password1'), 'email' => 'afifaa@example.com'],
            ['id' => 2, 'fullname' => 'Zahraa', 'username' => 'Araa', 'password' => bcrypt('password2'), 'email' => 'zahraa@example.com'],
            ['id' => 3, 'fullname' => 'Melina', 'username' => 'Melii', 'password' => bcrypt('password3'), 'email' => 'melina@example.com'],
            ['id' => 4, 'fullname' => 'Bintang', 'username' => 'Binn', 'password' => bcrypt('password4'), 'email' => 'bintang@example.com'],
            ['id' => 5, 'fullname' => 'David Lee', 'username' => 'davidlee', 'password' => bcrypt('password5'), 'email' => 'davidlee@example.com'],
        ]);
    }
}
