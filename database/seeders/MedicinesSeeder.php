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
        'medication' => 0,
        'name' => 'Nexgard 15-30 kg',
        'price' => 1050,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      2 =>
      array(
        'medication' => 0,
        'name' => 'Nexgard 30-60 kg',
        'price' => 1200,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      3 =>
      array(
        'medication' => 0,
        'name' => 'Bravecto',
        'price' => 2000,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      4 =>
      array(
        'medication' => 0,
        'name' => 'Advocate',
        'price' => 750,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      5 =>
      array(
        'medication' => 0,
        'name' => 'Coatex',
        'price' => 35,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      6 =>
      array(
        'medication' => 0,
        'name' => 'Milbemax',
        'price' => 200,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      7 =>
      array(
        'medication' => 0,
        'name' => 'Hematocide',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      8 =>
      array(
        'medication' => 0,
        'name' => 'Thrombo Pro',
        'price' => 1000,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      9 =>
      array(
        'medication' => 0,
        'name' => 'Supreme Pro',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      10 =>
      array(
        'medication' => 0,
        'name' => 'Nova Folha',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      11 =>
      array(
        'medication' => 0,
        'name' => 'Liverguard',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      12 =>
      array(
        'medication' => 0,
        'name' => 'Auritic',
        'price' => 380,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      13 =>
      array(
        'medication' => 0,
        'name' => 'Optryl',
        'price' => 320,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      14 =>
      array(
        'medication' => 0,
        'name' => 'Nacalvit C',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      15 =>
      array(
        'medication' => 0,
        'name' => 'Multi V',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      16 =>
      array(
        'medication' => 0,
        'name' => 'Papi OB',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      17 =>
      array(
        'medication' => 0,
        'name' => 'Enmalac',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      18 =>
      array(
        'medication' => 0,
        'name' => 'Papi Flavet',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      19 =>
      array(
        'medication' => 0,
        'name' => 'Papi Doxy/Lymedox',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      20 =>
      array(
        'medication' => 0,
        'name' => 'Canixetin',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      21 =>
      array(
        'medication' => 0,
        'name' => 'Bromivet',
        'price' => 260,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      22 =>
      array(
        'medication' => 0,
        'name' => 'Canitrim',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      23 =>
      array(
        'medication' => 0,
        'name' => 'Contrimed',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      24 =>
      array(
        'medication' => 0,
        'name' => 'Medicef',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      25 =>
      array(
        'medication' => 0,
        'name' => 'Propyrin',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      26 =>
      array(
        'medication' => 0,
        'name' => 'Microflox',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      27 =>
      array(
        'medication' => 0,
        'name' => 'Canicef',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      28 =>
      array(
        'medication' => 0,
        'name' => 'Broncure',
        'price' => 285,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      29 =>
      array(
        'medication' => 0,
        'name' => 'Papi Scour',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      30 =>
      array(
        'medication' => 0,
        'name' => 'Tolfenamic Acid',
        'price' => 260,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      31 =>
      array(
        'medication' => 0,
        'name' => 'Ener-G',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      32 =>
      array(
        'medication' => 0,
        'name' => 'Venoma',
        'price' => 399,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      33 =>
      array(
        'medication' => 0,
        'name' => 'Mocutan',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      34 =>
      array(
        'medication' => 0,
        'name' => 'Asbrip',
        'price' => 850,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      35 =>
      array(
        'medication' => 0,
        'name' => 'Ocoxin',
        'price' => 990,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      36 =>
      array(
        'medication' => 0,
        'name' => 'Renalof',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      37 =>
      array(
        'medication' => 0,
        'name' => 'Tolpet',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      38 =>
      array(
        'medication' => 0,
        'name' => 'Papi Renovet',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      39 =>
      array(
        'medication' => 0,
        'name' => 'Wound Cream',
        'price' => 110,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      40 =>
      array(
        'medication' => 0,
        'name' => 'Biogenta Drop',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      41 =>
      array(
        'medication' => 0,
        'name' => 'Otikoo',
        'price' => 520,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      42 =>
      array(
        'medication' => 0,
        'name' => 'Gentamicin',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      43 =>
      array(
        'medication' => 0,
        'name' => 'Mupirocin',
        'price' => 280,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      44 =>
      array(
        'medication' => 0,
        'name' => 'Rumalox',
        'price' => 30,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      45 =>
      array(
        'medication' => 0,
        'name' => 'Gabapentin',
        'price' => 150,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      46 =>
      array(
        'medication' => 0,
        'name' => 'Carpropin',
        'price' => 150,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      47 =>
      array(
        'medication' => 0,
        'name' => 'Canipil',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      48 =>
      array(
        'medication' => 0,
        'name' => 'Enrofloxacin',
        'price' => 30,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      49 =>
      array(
        'medication' => 0,
        'name' => 'Marbocyl 20mg',
        'price' => 120,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      50 =>
      array(
        'medication' => 0,
        'name' => 'Marbocyl 8mg',
        'price' => 320,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      51 =>
      array(
        'medication' => 0,
        'name' => 'Petclav 500',
        'price' => 60,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      52 =>
      array(
        'medication' => 0,
        'name' => 'Tolfedine',
        'price' => 90,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      53 =>
      array(
        'medication' => 0,
        'name' => 'Scourvet',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      54 =>
      array(
        'medication' => 0,
        'name' => 'Lymedox',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      55 =>
      array(
        'medication' => 0,
        'name' => 'Canixetin',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      56 =>
      array(
        'medication' => 0,
        'name' => 'Bromivet',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      57 =>
      array(
        'medication' => 0,
        'name' => 'Canitrim',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      58 =>
      array(
        'medication' => 1,
        'name' => 'Biocure',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      59 =>
      array(
        'medication' => 1,
        'name' => 'Doxycycline',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      60 =>
      array(
        'medication' => 1,
        'name' => 'Macrocal',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      61 =>
      array(
        'medication' => 0,
        'name' => 'Pet Defense',
        'price' => 180,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      62 =>
      array(
        'medication' => 1,
        'name' => 'Carpropain',
        'price' => 60,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      63 =>
      array(
        'medication' => 0,
        'name' => 'Sorvit',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      64 =>
      array(
        'medication' => 0,
        'name' => 'Propyrin',
        'price' => 510,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      65 =>
      array(
        'medication' => 1,
        'name' => 'Neuro Pro',
        'price' => 20,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      66 =>
      array(
        'medication' => 1,
        'name' => 'Neorovet',
        'price' => 20,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      67 =>
      array(
        'medication' => 1,
        'name' => 'Dexamethasone',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      68 =>
      array(
        'medication' => 1,
        'name' => 'Pet Clav',
        'price' => 60,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      69 =>
      array(
        'medication' => 1,
        'name' => 'Pimodin',
        'price' => 100,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      70 =>
      array(
        'medication' => 1,
        'name' => 'Enterovet',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      71 =>
      array(
        'medication' => 1,
        'name' => 'Prednisone',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      72 =>
      array(
        'medication' => 1,
        'name' => 'Cefalexin',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      73 =>
      array(
        'medication' => 1,
        'name' => 'Enorama',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      74 =>
      array(
        'medication' => 1,
        'name' => 'Melotab',
        'price' => 25,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      75 =>
      array(
        'medication' => 1,
        'name' => 'Myclosil',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      76 =>
      array(
        'medication' => 1,
        'name' => 'Riphen tab',
        'price' => 25,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      77 =>
      array(
        'medication' => 0,
        'name' => 'Riphen bottle',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      78 =>
      array(
        'medication' => 0,
        'name' => 'Bisolem',
        'price' => 280,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      79 =>
      array(
        'medication' => 0,
        'name' => 'Canibrom',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      80 =>
      array(
        'medication' => 0,
        'name' => 'Pulmoquin',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      81 =>
      array(
        'medication' => 0,
        'name' => 'Motillex',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      82 =>
      array(
        'medication' => 0,
        'name' => 'Ambidazol',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      83 =>
      array(
        'medication' => 0,
        'name' => 'Renalof',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      84 =>
      array(
        'medication' => 0,
        'name' => 'Nona Folha',
        'price' => 950,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      85 =>
      array(
        'medication' => 1,
        'name' => 'Liver Supplement',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      86 =>
      array(
        'medication' => 1,
        'name' => 'Hepatosure',
        'price' => 300,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      87 =>
      array(
        'medication' => 1,
        'name' => 'Tropical Wound Cream',
        'price' => 110,
        'unit' => 'tub',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      88 =>
      array(
        'medication' => 0,
        'name' => 'Eye Drop',
        'price' => 300,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      89 =>
      array(
        'medication' => 0,
        'name' => 'Ear Drop (Otikoo)',
        'price' => 570,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      90 =>
      array(
        'medication' => 0,
        'name' => 'Gentamacin Oinment',
        'price' => 250,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      91 =>
      array(
        'medication' => 0,
        'name' => 'Optryl',
        'price' => 320,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      92 =>
      array(
        'medication' => 0,
        'name' => 'Mupirocin',
        'price' => 280,
        'unit' => 'bottle',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      93 =>
      array(
        'medication' => 1,
        'name' => 'Ornipural',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      94 =>
      array(
        'medication' => 1,
        'name' => 'Dexa',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      95 =>
      array(
        'medication' => 1,
        'name' => 'Tolfine',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      96 =>
      array(
        'medication' => 1,
        'name' => 'Coforta',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      97 =>
      array(
        'medication' => 1,
        'name' => 'Erythropoietin',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      98 =>
      array(
        'medication' => 1,
        'name' => 'Septotryl',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      99 =>
      array(
        'medication' => 1,
        'name' => 'Fercobsang',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      100 =>
      array(
        'medication' => 1,
        'name' => 'Cerenia',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      101 =>
      array(
        'medication' => 1,
        'name' => 'Tranexamic',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      102 =>
      array(
        'medication' => 1,
        'name' => 'Prodox',
        'price' => 100,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      103 =>
      array(
        'medication' => 1,
        'name' => 'Marbocyl',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      104 =>
      array(
        'medication' => 1,
        'name' => 'Colfine',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      105 =>
      array(
        'medication' => 1,
        'name' => 'Calcium',
        'price' => 100,
        'unit' => 'tab/s',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      106 =>
      array(
        'medication' => 1,
        'name' => 'Calphos D3',
        'price' => 100,
        'unit' => 'tab/s',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      107 =>
      array(
        'medication' => 1,
        'name' => 'Dexamethasone',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      108 =>
      array(
        'medication' => 1,
        'name' => 'Plate leaf',
        'price' => 100,
        'unit' => 'shot',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      109 =>
      array(
        'medication' => 1,
        'name' => 'Papi Doxy',
        'price' => 30,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      110 =>
      array(
        'medication' => 1,
        'name' => 'Nefrotec',
        'price' => 80,
        'unit' => 'tab',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
    ]);
  }
}
