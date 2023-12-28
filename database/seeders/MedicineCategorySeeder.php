<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicine_category')->insert([
            1 =>
            array(
                'category' => 'Antibiotic',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            2 =>
            array(
                'category' => 'Vitamins',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            3 =>
            array(
                'category' => 'Minerals',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            4 =>
            array(
                'category' => 'Others',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
        ]);
    }
}
