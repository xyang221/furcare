<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('service_category')->insert([
      1 =>
      array(
        'category' => 'Consultation',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      2 =>
      array(
        'category' => 'Home Service',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      3 =>
      array(
        'category' => 'Boarding',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      4 =>
      array(
        'category' => 'Grooming',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      5 =>
      array(
        'category' => 'Vaccination',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      6 =>
      array(
        'category' => 'Deworming',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      7 =>
      array(
        'category' => 'Tests',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      8 =>
      array(
        'category' => 'Medicines',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      9 =>
      array(
        'category' => 'Products',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      10 =>
      array(
        'category' => 'Admission',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      11 =>
      array(
        'category' => 'Tick/Flea Treatment',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      12 =>
      array(
        'category' => 'Others',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
    ]);
  }
}
