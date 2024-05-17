<?php


namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MedicinesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('medicines')->insert([
      1 =>
      array(
        'name' => 'Nexgard 15-30 kg',
        'price' => 1050,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      2 =>
      array(
        'name' => 'Nexgard 30-60 kg',
        'price' => 1200,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      3 =>
      array(
        'name' => 'Bravecto',
        'price' => 2000,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      4 =>
      array(
        'name' => 'Advocate',
        'price' => 750,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      5 =>
      array(
        'name' => 'Coatex',
        'price' => 35,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      6 =>
      array(
        'name' => 'Milbemax',
        'price' => 200,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      7 =>
      array(
        'name' => 'Hematocide',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      8 =>
      array(
        'name' => 'Thrombo Pro',
        'price' => 1000,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      9 =>
      array(
        'name' => 'Supreme Pro',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      10 =>
      array(
        'name' => 'Nova Folha',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      11 =>
      array(
        'name' => 'Liverguard',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      12 =>
      array(
        'name' => 'Auritic',
        'price' => 380,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      13 =>
      array(
        'name' => 'Optryl',
        'price' => 320,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      14 =>
      array(
        'name' => 'Nacalvit C',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      15 =>
      array(
        'name' => 'Multi V',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      16 =>
      array(
        'name' => 'Papi OB',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      17 =>
      array(
        'name' => 'Enmalac',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      18 =>
      array(
        'name' => 'Papi Flavet',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      19 =>
      array(
        'name' => 'Papi Doxy/Lymedox',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      20 =>
      array(
        'name' => 'Canixetin',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      21 =>
      array(
        'name' => 'Bromivet',
        'price' => 260,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      22 =>
      array(
        'name' => 'Canitrim',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      23 =>
      array(
        'name' => 'Contrimed',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      24 =>
      array(
        'name' => 'Medicef',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      25 =>
      array(
        'name' => 'Propyrin',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      26 =>
      array(
        'name' => 'Microflox',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      27 =>
      array(
        'name' => 'Canicef',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      28 =>
      array(
        'name' => 'Broncure',
        'price' => 285,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      29 =>
      array(
        'name' => 'Papi Scour',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      30 =>
      array(
        'name' => 'Tolfenamic Acid',
        'price' => 260,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      31 =>
      array(
        'name' => 'Ener-G',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      32 =>
      array(
        'name' => 'Venoma',
        'price' => 399,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      33 =>
      array(
        'name' => 'Mocutan',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      34 =>
      array(
        'name' => 'Asbrip',
        'price' => 850,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      35 =>
      array(
        'name' => 'Ocoxin',
        'price' => 990,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      36 =>
      array(
        'name' => 'Renalof',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      37 =>
      array(
        'name' => 'Tolpet',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      38 =>
      array(
        'name' => 'Papi Renovet',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      39 =>
      array(
        'name' => 'Wound Cream',
        'price' => 110,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      40 =>
      array(
        'name' => 'Biogenta Drop',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      41 =>
      array(
        'name' => 'Otikoo',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      42 =>
      array(
        'name' => 'Gentamicin',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      43 =>
      array(
        'name' => 'Mupirocin',
        'price' => 280,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      44 =>
      array(
        'name' => 'Rumalox',
        'price' => 30,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      45 =>
      array(
        'name' => 'Gabapentin',
        'price' => 150,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      46 =>
      array(
        'name' => 'Carpropin',
        'price' => 150,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      47 =>
      array(
        'name' => 'Canipil',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      48 =>
      array(
        'name' => 'Enrofloxacin',
        'price' => 30,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      49 =>
      array(
        'name' => 'Marbocyl 20mg',
        'price' => 120,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      50 =>
      array(
        'name' => 'Marbocyl 8mg',
        'price' => 320,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      51 =>
      array(
        'name' => 'Petclav 500',
        'price' => 60,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      52 =>
      array(
        'name' => 'Tolfedine',
        'price' => 90,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      53 =>
      array(
        'name' => 'Scourvet',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      54 =>
      array(
        'name' => 'Lymedox',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      55 =>
      array(
        'name' => 'Canixetin',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      56 =>
      array(
        'name' => 'Bromivet',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      57 =>
      array(
        'name' => 'Canitrim',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      58 =>
      array(
        'name' => 'Biocure',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      59 =>
      array(
        'name' => 'Doxycycline',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      60 =>
      array(
        'name' => 'Macrocal',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      61 =>
      array(
        'name' => 'Pet Defense',
        'price' => 180,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      62 =>
      array(
        'name' => 'Carpropain',
        'price' => 60,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      63 =>
      array(
        'name' => 'Sorvit',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      64 =>
      array(
        'name' => 'Propyrin',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      65 =>
      array(
        'name' => 'Neuro Pro',
        'price' => 20,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      66 =>
      array(
        'name' => 'Neorovet',
        'price' => 20,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      67 =>
      array(
        'name' => 'Dexamethasone',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      68 =>
      array(
        'name' => 'Pet Clav',
        'price' => 60,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      69 =>
      array(
        'name' => 'Pimodin',
        'price' => 100,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      70 =>
      array(
        'name' => 'Enterovet',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      71 =>
      array(
        'name' => 'Prednisone',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      72 =>
      array(
        'name' => 'Cefalexin',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      73 =>
      array(
        'name' => 'Enorama',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      74 =>
      array(
        'name' => 'Melotab',
        'price' => 25,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      75 =>
      array(
        'name' => 'Myclosil',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      76 =>
      array(
        'name' => 'Riphen tab',
        'price' => 25,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      77 =>
      array(
        'name' => 'Riphen bottle',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      78 =>
      array(
        'name' => 'Bisolem',
        'price' => 280,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      79 =>
      array(
        'name' => 'Canibrom',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      80 =>
      array(
        'name' => 'Pulmoquin',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      81 =>
      array(
        'name' => 'Motillex',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      82 =>
      array(
        'name' => 'Ambidazol',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      83 =>
      array(
        'name' => 'Renalof',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      84 =>
      array(
        'name' => 'Nona Folha',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      85 =>
      array(
        'name' => 'Liver Guard',
        'price' => 510,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      86 =>
      array(
        'name' => 'Hepatosure',
        'price' => 300,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      87 =>
      array(
        'name' => 'Tropical Wound Cream',
        'price' => 110,
        'unit' => 'tub',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      88 =>
      array(
        'name' => 'Eye Drop',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      89 =>
      array(
        'name' => 'Ear Drop (Otikoo)',
        'price' => 570,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      90 =>
      array(
        'name' => 'Gentamacin Oinment',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      91 =>
      array(
        'name' => 'Optryl',
        'price' => 320,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      92 =>
      array(
        'name' => 'Mupirocin',
        'price' => 280,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      93 =>
      array(
        'name' => 'Ornipural',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      94 =>
      array(
        'name' => 'Dexa',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      95 =>
      array(
        'name' => 'Tolfine',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      96 =>
      array(
        'name' => 'Coforta',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      97 =>
      array(
        'name' => 'Erythropoietin',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      98 =>
      array(
        'name' => 'Septo',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      99 =>
      array(
        'name' => 'Fercobsang',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      100 =>
      array(
        'name' => 'Cerenia',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      101 =>
      array(
        'name' => 'Tranexamic',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      102 =>
      array(
        'name' => 'Prodox',
        'price' => 100,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      103 =>
      array(
        'name' => 'Marbocyl',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      104 =>
      array(
        'name' => 'Colfine',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
    ]);
  }
}
