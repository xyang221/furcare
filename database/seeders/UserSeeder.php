<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders;
use Illuminate\Support\Facades\DB; 


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           0 => 
           array( 'email' => 'dianne@test.com',
            'password' => bcrypt('abcd1234'),
            'role_id' => 1),

        ]);
    }
}
