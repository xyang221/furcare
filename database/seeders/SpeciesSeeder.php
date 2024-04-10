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
      array(
        'specie' => 'Canine',
        'description' => 'Canines tend to be slender and long-legged, with a long muzzle, bushy tail, erect pointed ears, and well-developed canine and cheek teeth.',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      2 =>
      array(
        'specie' => 'Feline',
        'description' => 'Cats are the most highly specialized of the terrestrial flesh-eating mammals. They are powerfully built, with a large brain and strong teeth.',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      3 =>
      array(
        'specie' => 'Rabbits',
        'description' => 'Rabbits have long ears, a short tail, long hind legs, and continuously growing incisors. Any small, bounding, gnawing mammal of the family Leporidae.',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      4 =>
      array(
        'specie' => 'Avian',
        'description' => 'Avian species is a group of warm-blooded vertebrates constituting the class Aves, characterized by feathers, toothless beak, laying of hard-shelled eggs, high metabolic rate, four-chambered heart and a strong but lightweight skeleton.',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      5 =>
      array(
        'specie' => 'Equine',
        'description' => 'Equines are odd-toed ungulates with slender legs, long heads, relatively long necks, manes (erect in most subspecies), and long tails.',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      6 =>
      array(
        'specie' => 'Goat',
        'description' => 'A goat is any ruminant and hollow-horned mammal belonging to the genus Capra. It is lighter in build and has horns that arch backward, a short tail, and straighter hair.',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      7 =>
      array(
        'specie' => 'Undefined',
        'description' => ' ',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

    ]);
  }
}
