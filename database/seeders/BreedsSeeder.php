<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class BreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('breeds')->insert([
            0 => 
            array (
              'breed' => 'Labrador',
              'description' => 'atleast one sentence nga magdescribe',
              'specie_id' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            0 => 
            array (
              'breed' => 'Persian Cat',
              'description' => 'atleast one sentence nga magdescribe',
              'specie_id' => 2,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
          
        ]);
    }
}
