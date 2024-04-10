<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('services')->insert([
      1 =>
      array(
        'service' => 'Consultation',
        'isAvailable' => 1,
        'cat_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      2 =>
      array(
        'service' => 'Home Service',
        'isAvailable' => 1,
        'cat_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      3 =>
      array(
        'service' => 'Boarding',
        'isAvailable' => 1,
        'cat_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      4 =>
      array(
        'service' => 'Grooming',
        'isAvailable' => 1,
        'cat_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      5 =>
      array(
        'service' => 'DHLPPI',
        'isAvailable' => 1,
        'cat_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      6 =>
      array(
        'service' => 'BRONCHICINE',
        'isAvailable' => 1,
        'cat_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      7 =>
      array(
        'service' => 'HEARTWORM',
        'isAvailable' => 1,
        'cat_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      8 =>
      array(
        'service' => 'RABIES',
        'isAvailable' => 1,
        'cat_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      9 =>
      array(
        'service' => 'TRICAT',
        'isAvailable' => 1,
        'cat_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      10 =>
      array(
        'service' => 'Deworming',
        'isAvailable' => 1,
        'cat_id' => 6,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      11 =>
      array(
        'service' => 'CBC',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      12 =>
      array(
        'service' => 'BLOOD CHEM',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      13 =>
      array(
        'service' => 'PARVO TEST',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      14 =>
      array(
        'service' => 'DISTEMPER',

        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      15 =>
      array(
        'service' => 'EHRLICHIA',

        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      16 =>
      array(
        'service' => 'HEARTWORM TEST',

        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      17 =>
      array(
        'service' => '4DX',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      18 =>
      array(
        'service' => 'Medicine',
        'isAvailable' => 1,
        'cat_id' => 8,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      19 =>
      array(
        'service' => 'Tick/Flea Treatment',

        'isAvailable' => 1,
        'cat_id' => 11,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      20 =>
      array(
        'service' => 'Admission',

        'isAvailable' => 1,
        'cat_id' => 10,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      21 =>
      array(
        'service' => 'Others',

        'isAvailable' => 1,
        'cat_id' => 12,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      22 =>
      array(
        'service' => 'Leptospirosis Test',

        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      23 =>
      array(
        'service' => 'Flu Test',

        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      24 =>
      array(
        'service' => 'Pregnancy Test',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      25 =>
      array(
        'service' => 'Xray',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      26 =>
      array(
        'service' => 'Urinalysis',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      27 =>
      array(
        'service' => 'Fecalysis',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      28 =>
      array(
        'service' => 'Anaplasma',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      29 =>
      array(
        'service' => 'Lyme Disease',
        'isAvailable' => 1,
        'cat_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      30 =>
      array(
        'service' => 'Doctor\'s Fee',
        'isAvailable' => 1,
        'cat_id' => 12,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      31 =>
      array(
        'service' => 'Miscellaneous Fee',
        'isAvailable' => 1,
        'cat_id' => 12,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      32 =>
      array(
        'service' => 'Emergency Fee',
        'isAvailable' => 1,
        'cat_id' => 12,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      
    ]);
  }
}
