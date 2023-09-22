<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            0 => 
            array (
              'role' => 'Admin',
              'description' => 'all access',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            1 => 
            array (
              'role' => 'Staff',
              'description' => 'manages the web',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            2 => 
            array (
              'role' => 'PetOwner',
              'description' => 'for mobile',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
          
        ]);
    }
}
