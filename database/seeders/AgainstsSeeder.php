<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AgainstsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('againsts')->insert([
            1 => 
            array (
              'acronym' => 'D',
              'description' => 'Canine Distemper',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            2 => 
            array (
              'acronym' => 'H',
              'description' => 'Hepatitis',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            3 => 
            array (
              'acronym' => 'L',
              'description' => 'Leptospirosis',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            4 => 
            array (
              'acronym' => 'P',
              'description' => 'Canine Parvovirus',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            5 => 
            array (
              'acronym' => 'PI',
              'description' => 'Parainfluenza',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            6 => 
            array (
              'acronym' => 'C',
              'description' => 'Coronavirus',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
          
        ]);
    }
}
