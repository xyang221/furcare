<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('species')->insert([
            1 => 
            array (
              'specie' => 'Canine',
              'description' => 'dogs',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            2 => 
            array (
              'specie' => 'Feline',
              'description' => 'cats',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            3 => 
            array (
              'specie' => 'Wildlife',
              'description' => 'rabbits,turtle',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            4 => 
            array (
              'specie' => 'Avian',
              'description' => 'chickens,birds',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
          
        ]);
    }
}
