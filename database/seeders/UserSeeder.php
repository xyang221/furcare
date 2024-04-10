<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            array(
                'email' => 'admin@test.com',
                'password' => bcrypt('abcd1234'),
                'role_id' => 1
            ),

        ]);
    }
}
