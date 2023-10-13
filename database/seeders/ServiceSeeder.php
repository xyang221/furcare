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
            array (
              'service' => 'Consultation',
              'price' => 100,
              'status' => 'isAvailable',
              'cat_id' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            2 => 
            array (
                'service' => 'Home Service',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
            3 => 
            array (
                'service' => 'Boarding Fee',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            4 => 
            array (
                'service' => 'Grooming',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
             5 => 
            array (
                'service' => 'Surgery',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
             6 => 
            array (
                'service' => 'DHLPPI',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
              7 => 
              array (
                  'service' => 'BRONCHICINE',
                  'price' => 100,
                  'status' => 'isAvailable',
                  'cat_id' => 6,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                8 => 
                array (
                    'service' => 'HEARTWORM',
                    'price' => 100,
                    'status' => 'isAvailable',
                    'cat_id' => 6,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  ),
                  9 => 
                  array (
                      'service' => 'RABIES',
                      'price' => 100,
                      'status' => 'isAvailable',
                      'cat_id' => 6,
                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ),
            10 => 
                array (
                    'service' => 'TRICAT',
                    'price' => 100,
                    'status' => 'isAvailable',
                    'cat_id' => 6,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
            11 => 
            array (
                'service' => 'CBC',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
              12 => 
              array (
                  'service' => 'BLOOD CHEM',
                  'price' => 100,
                  'status' => 'isAvailable',
                  'cat_id' => 7,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                13 => 
                array (
                    'service' => 'PARVO TEST',
                    'price' => 100,
                    'status' => 'isAvailable',
                    'cat_id' => 7,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  ),
                  14 => 
                  array (
                      'service' => 'DISTEMPER',
                      'price' => 100,
                      'status' => 'isAvailable',
                      'cat_id' => 7,
                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ),
                    15 => 
                    array (
                        'service' => 'EHRLICHIA',
                        'price' => 100,
                        'status' => 'isAvailable',
                        'cat_id' => 7,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                      ),
                      16 => 
                      array (
                          'service' => 'HEARTWORM',
                          'price' => 100,
                          'status' => 'isAvailable',
                          'cat_id' => 7,
                          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        ),
                        17 => 
                        array (
                            'service' => '4DX',
                            'price' => 100,
                            'status' => 'isAvailable',
                            'cat_id' => 7,
                            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                          ),     
                          18 => 
                          array (
                              'service' => 'Medicine',
                              'price' => 100,
                              'status' => 'isAvailable',
                              'cat_id' => 8,
                              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                            ),
            19 => 
            array (
                'service' => 'Tick/Flea Treatment',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
            20 => 
            array (
                'service' => 'Others',
                'price' => 100,
                'status' => 'isAvailable',
                'cat_id' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
        ]);
    }
}
