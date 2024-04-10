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
      //dogs
      0 =>
      array(
        'breed' => 'Aspin',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      1 =>
      array(
        'breed' => 'Undefined',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      2 =>
      array(
        'breed' => 'Shit Tzu',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      3 =>
      array(
        'breed' => 'Dachshund Corgi',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      4 =>
      array(
        'breed' => 'Siberian Husky',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      5 =>
      array(
        'breed' => 'Border Collie / Poodle ',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      6 =>
      array(
        'breed' => 'Mixed Spitz',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      7 =>
      array(
        'breed' => 'Japanese Spitz',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      8 =>
      array(
        'breed' => 'Pomeranian',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      9 =>
      array(
        'breed' => 'Golden Retriever',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      10 =>
      array(
        'breed' => 'Terrier',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      11 =>
      array(
        'breed' => 'Labrador',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      12 =>
      array(
        'breed' => 'Afghan Chon',
        'description' => '  known for a boisterous personality, along with uniquely curly fur. ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      13 =>
      array(
        'breed' => 'Afghan Collie  ',
        'description' => ' they also can both be quite a lot for someone new to dogs',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      14 =>
      array(
        'breed' => 'Afghan Hound ',
        'description' => 'Known for their independence, intelligence, and loyalty, they are a very old dog breed ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      15 =>
      array(
        'breed' => 'Afghan Retriever  ',
        'description' => 'both breeds are still high-energy and need stimulation. ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      16 =>
      array(
        'breed' => 'Afghan Sheepdog ',
        'description' => 'a unique, high-energy mix rising in popularity with many dog parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      17 =>
      array(
        'breed' => 'Afghan Spaniel ',
        'description' => 'They are known to be cuddly companions, ideal for pet parents who like to snuggle with their furry friends. ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      18 =>
      array(
        'breed' => 'Afollie ',
        'description' => ' a dog who performs acts of bravery. Both parent breeds are known to be eager to please their pup parents',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      19 =>
      array(
        'breed' => 'Airedale Shepherd',
        'description' => 'an energetic, intelligent crossbreed beloved by those who maintain active lifestyles ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      20 =>
      array(
        'breed' => 'Airedale Terrier',
        'description' => 'commonly called the “King of Terriers,” is the largest of all terrier breeds ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      21 =>
      array(
        'breed' => 'Airedoodle',
        'description' => 'known as the King of the Terriers. They are a unique-looking sporting breed with a long snout and curly hair ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      22 =>
      array(
        'breed' => 'Akbash ',
        'description' => ' a magnificent and imposing shepherd known for its exceptional guardian instincts and unwavering loyalty',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      23 =>
      array(
        'breed' => 'Akbash Pyrenees',
        'description' => 'a very large and very loyal new crossbreed ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      24 =>
      array(
        'breed' => 'Akbash Rottie ',
        'description' => 'claim to fame is livestock guarding ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      25 =>
      array(
        'breed' => 'Aki-poo ',
        'description' => 'this breed will stay by your side as a protector ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      26 =>
      array(
        'breed' => 'Akita ',
        'description' => ' They are known for their loyalty, courage, and independence',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      27 =>
      array(
        'breed' => 'Akita Basset',
        'description' => 'they serve as guardians and affectionate companions ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      28 =>
      array(
        'breed' => 'Akita Bernard ',
        'description' => 'A mix between the faithful, headstrong Akita and the loyal, easygoing Saint Bernard ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      29 =>
      array(
        'breed' => 'Akita Chow',
        'description' => 'Large, independent, and loyal, these pups inherited some of the best traits from both of their parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      30 =>
      array(
        'breed' => 'Akita Inu ',
        'description' => 'a powerful and noble dog breed hailing from Japan ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      31 =>
      array(
        'breed' => 'Akita Pit',
        'description' => ' Intelligent, protective, and loyal, these pups inherited some of the best traits from both of their parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      32 =>
      array(
        'breed' => 'Akita Shepherd ',
        'description' => 'Stoic, loyal, and hard-working, these pups inherited some of the best traits from both of their parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      33 =>
      array(
        'breed' => 'Akitamatian ',
        'description' => ' A mix between the faithful, headstrong Akita and the goofy, exuberant Dalmatian ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      34 =>
      array(
        'breed' => 'Chihuahua ',
        'description' => '',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      35 =>
      array(
        'breed' => 'Alaskan Husky ',
        'description' => ' have been meticulously bred for their ability to pull heavy loads across vast distances in the harsh conditions of Alaska ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      36 =>
      array(
        'breed' => ' Alaskan Husky Shepherd',
        'description' => ' is an energetic, driven crossbreed beloved by those who maintain active lifestyles',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      37 =>
      array(
        'breed' => 'Doberman Pinscher',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      38 =>
      array(
        'breed' => 'Alaskan Klee Kai ',
        'description' => 'Small, smart, and energetic ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      39 =>
      array(
        'breed' => 'Alaskan Malador ',
        'description' => ' an energetic, boisterous crossbreed beloved by active individuals',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      40 =>
      array(
        'breed' => 'Alaskan Malamute ',
        'description' => 'boasting incredible strength, endurance, and unwavering loyalty ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      41 =>
      array(
        'breed' => 'Alaskan Pit Bull Terrier',
        'description' => ' a good match for active households ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      42 =>
      array(
        'breed' => 'Alaskan Shepherd ',
        'description' => '  an energetic, intelligent crossbreed',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      43 =>
      array(
        'breed' => 'Alaskan Weimsky ',
        'description' => ' an energetic, driven crossbreed beloved by those who maintain active lifestyles ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      44 =>
      array(
        'breed' => 'Alopekis ',
        'description' => ' a small game-hunting dog to track and hunt small prey like rabbits and foxes thanks to its agility, speed, and sharp senses ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      45 =>
      array(
        'breed' => 'Alusky ',
        'description' => ' an energetic, playful crossbreed beloved by those who maintain active lifestyles ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      46 =>
      array(
        'breed' => 'American Bandogge ',
        'description' => 'Its muscular build and well-defined features project an aura of confidence and capability  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      47 =>
      array(
        'breed' => 'American Boston Bull Terrier ',
        'description' => ' originated as a fighting dog ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      48 =>
      array(
        'breed' => 'American Boxer Foxhound ',
        'description' => 'originated as a working dog. ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      49 =>
      array(
        'breed' => 'American Bull Dane ',
        'description' => 'Despite their large size, the Great Dane is a gentle, affectionate companion ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      50 =>
      array(
        'breed' => 'American Bull Dogue De Bordeaux',
        'description' => ' their playfulness and love for their families shines through in their personalities ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      51 =>
      array(
        'breed' => 'American Bull Pei ',
        'description' => ' a strong, energetic crossbreed beloved by those who don’t mind a big body with a bigger attitude (and a heart of gold) ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      52 =>
      array(
        'breed' => 'American Bull Staffy ',
        'description' => ' is a strong, energetic crossbreed beloved by those who don’t mind a big body with a bigger personality (and a heart of gold) ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      53 =>
      array(
        'breed' => 'American Bull-Aussie',
        'description' => ' their playfulness and love for their families shines through in their personalities.',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      54 =>
      array(
        'breed' => 'American Bull-Jack',
        'description' => '  the breed is often a spirited family pet',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      55 =>
      array(
        'breed' => 'American Bulldog ',
        'description' => ' known for their stocky build, muscular body, and distinctive “bulldog” head ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      56 =>
      array(
        'breed' => 'American Bulldog Shepherd',
        'description' => 'often perceived as a bad-boy guard dog, in addition to their use in police work ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      57 =>
      array(
        'breed' => ' American Bullhuahua',
        'description' => 'appreciated for their intense watchdog capabilities in a small package ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      58 =>
      array(
        'breed' => 'American Bullweiler ',
        'description' => 'Often perceived as a bad-boy guard dog ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      59 =>
      array(
        'breed' => 'American Bully ',
        'description' => '  originally created for companionship and as a family pet, rather than for traditional working roles ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      60 =>
      array(
        'breed' => 'American Chow Bulldog ',
        'description' => ' known for their fierce guarding abilities, stopping at nothing to protect their families ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      61 =>
      array(
        'breed' => 'American Eagle Dog ',
        'description' => ' this breed also functions as a small guard dog with strangers ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      62 =>
      array(
        'breed' => 'American English Coonhound ',
        'description' => '  hunting dog breed known for speed, endurance, and loud voice in the field ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      63 =>
      array(
        'breed' => ' American Eskimo Dog',
        'description' => ' known for their intelligence and eagerness to please their owners. They are highly trainable and excel in obedience and agility activities ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      64 =>
      array(
        'breed' => 'American Foxeagle ',
        'description' => 'American Foxhound originated as a working dog. They also possess great family-oriented temperaments  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      65 =>
      array(
        'breed' => 'American Foxhound',
        'description' => ' a breed known for its grace and endurance, originated in the United States ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      66 =>
      array(
        'breed' => 'American Foxy Dane ',
        'description' => ' possess great family-oriented temperaments ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      67 =>
      array(
        'breed' => 'American French Bull Terrier ',
        'description' => ' newer crossbreed originating for dog parents who need a fun-loving but not large pup at their sides ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      68 =>
      array(
        'breed' => ' American Hairless Terrier',
        'description' => ' the breed is known as an active companion dog and an especially great choice for allergy sufferers ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      69 =>
      array(
        'breed' => 'American Lab Foxhound ',
        'description' => ' fun-loving but boundlessly loyal	 ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      70 =>
      array(
        'breed' => 'American Leopard Hound ',
        'description' => '  energetic, sociable, and intelligent pooches who possess all-around great traits ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      71 =>
      array(
        'breed' => ' American Molossus',
        'description' => ' this breed may be very large, they have an equally big personality and a lot of heart  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      72 =>
      array(
        'breed' => 'American Pit Bull Terrier ',
        'description' => ' Pit Bull Terriers have a reputation for being aggressive ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      73 =>
      array(
        'breed' => ' American Pit Corso',
        'description' => 'Their gentle disposition also lent them to being nanny dogs, as they were known to be excellent with children  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      74 =>
      array(
        'breed' => 'American Pugabull ',
        'description' => ' Medium in size, alert, and loyal, these pups inherited some of the best qualities from both of their parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      75 =>
      array(
        'breed' => 'American Rat Pinscher ',
        'description' => ' they’re more frequently a friendly lapdog ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      76 =>
      array(
        'breed' => 'American Staffordshire Terrier ',
        'description' => ' is a muscular breed known for being strong for its size  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      77 =>
      array(
        'breed' => 'American Water Spaniel',
        'description' => ' is prized for its exceptional hunting and retrieving abilities, especially in waterfowl environments ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      78 =>
      array(
        'breed' => 'Amstiff',
        'description' => ' playful, loyal, and intelligent ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      79 =>
      array(
        'breed' => 'Anatolian Pyrenees',
        'description' => ' They are also known for their fierce natures with strangers ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      80 =>
      array(
        'breed' => 'Anatolian Shepherd Dog ',
        'description' => ' where they were bred as a shepherd’s companion and livestock guardian ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      81 =>
      array(
        'breed' => 'Appenzeller Sennenhunde ',
        'description' => ' stayed busy herding the livestock, guarding the farm, and pulling carts in their native Switzerland ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      82 =>
      array(
        'breed' => ' Armenian Gampr',
        'description' => ' is a rare breed of livestock guardian dog originating from the Armenian Highlands ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      83 =>
      array(
        'breed' => 'Auggie ',
        'description' => ' Friendly, energetic, and playful, these mixed breed herding dogs make great companions for the whole family ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      84 =>
      array(
        'breed' => 'Aussalier ',
        'description' => ' This breed is fairly short in stature, but huge in personality. They are a rewarding companion for many different lifestyles ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      85 =>
      array(
        'breed' => 'Aussie Rottie ',
        'description' => ' fun-loving but boundlessly loyal dog ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      86 =>
      array(
        'breed' => 'Aussie Shiba ',
        'description' => ' Known today for its cuteness, Shiba Inus once hunted powerful game like wild boar ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      87 =>
      array(
        'breed' => 'Aussie-Chi ',
        'description' => ' highly intelligent and active breed that is part of the herding group ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      88 =>
      array(
        'breed' => 'Aussiedoodle ',
        'description' => ' Because of their intelligence and adaptability, Aussiedoodles learn quickly and are highly trainable ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      89 =>
      array(
        'breed' => 'Beagle',
        'description' => ' ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      90 =>
      array(
        'breed' => 'Pomeranian ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      91 =>
      array(
        'breed' => 'Australian Boxherd ',
        'description' => ' fun-loving but boundlessly loyal dog ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      92 =>
      array(
        'breed' => 'Australian Cattle Dog ',
        'description' => '  an extremely intelligent, active, and sturdy dog breed that was developed by Australian settlers to handle herds of cattle on expansive ranches ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      93 =>
      array(
        'breed' => 'Australian Kelpie ',
        'description' => 'hardworking dogs for their agility, intelligence, and natural instinct to control livestock   ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      94 =>
      array(
        'breed' => ' Australian Labradoodle',
        'description' => ' With their high energy and athleticism, they excel in various outdoor activities  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      95 =>
      array(
        'breed' => 'Australian Retriever ',
        'description' => ' Loyal, intelligent, and friendly, these pups inherited some of the best traits from both of their parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      96 =>
      array(
        'breed' => 'Australian Shepherd ',
        'description' => ' They are intelligent, energetic, and loyal. Aussies are typically eager to please and are easy to train  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      97 =>
      array(
        'breed' => 'Australian Shepherd Husky ',
        'description' => ' These active dogs are protective and loyal and inherited some of the best traits from both of their parents  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      98 =>
      array(
        'breed' => 'Australian Shepherd Lab Mix ',
        'description' => ' Medium in size, energetic, and loyal, these pups inherited some amazing traits from both of their parents  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      99 =>
      array(
        'breed' => 'Australian Shepherd Pit Bull Mix ',
        'description' => ' Energetic, loyal, and quick to learn new things, these pups inherited some of the best traits from both of their parents  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      100 =>
      array(
        'breed' => ' Australian Stumpy Tail Cattle Dog',
        'description' => '   characteristic short or sometimes non-existent tail, is a descendant of wild dingoes and domesticated herding dogs from the late 19th century ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      101 =>
      array(
        'breed' => 'Australian Terrier ',
        'description' => '  known for its confident and feisty personality. It’s an alert and vigilant watchdog, always ready to alert its family to any potential threats  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      102 =>
      array(
        'breed' => 'Azawakh ',
        'description' => '  These elegant and athletic dogs are known for their impressive speed and agility ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      103 =>
      array(
        'breed' => 'Ba-Shar ',
        'description' => ' talented hunting dog, they are more widely known for their gentle dispositions ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      104 =>
      array(
        'breed' => 'Bagle Hound ',
        'description' => ' admired for their nature as working dogs, but also revered for their great family-oriented temperaments ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      105 =>
      array(
        'breed' => 'Barbado da Terceira ',
        'description' => '  this medium-sized breed is known for being loyal and smart ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      106 =>
      array(
        'breed' => 'Barbet ',
        'description' => 'referred to as the “Water Dog,” is a versatile and friendly breed known for its history of waterfowl hunting  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      107 =>
      array(
        'breed' => ' Bascottie',
        'description' => ' This breed, created for those experienced with stubborn breeds, continues to gain devoted fans due to its loyalty ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      108 =>
      array(
        'breed' => 'Basenji ',
        'description' => ' originally from Central Africa, was bred as a hunting dog. They stand between 16 and 24 inches tall at the shoulder and weigh between 22 and 24 pounds ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      109 =>
      array(
        'breed' => 'Bassador ',
        'description' => 'Loyal, sometimes stubborn, and always sniffing around, these pups inherited some of the best traits from both of their parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      110 =>
      array(
        'breed' => 'Basschshund ',
        'description' => ' also a talented hunting dog, but more widely known for their gentle dispositions ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      111 =>
      array(
        'breed' => 'Basset Bleu de Gascogne ',
        'description' => '  an energetic working hound that loves to follow a scent ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      112 =>
      array(
        'breed' => 'Basset Fauve de Bretagne ',
        'description' => ' These pups are intelligent, friendly, and active, which are great qualities for a hound dog ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      113 =>
      array(
        'breed' => 'Basset Hound ',
        'description' => ' They are known for their distinctive features, including their long, droopy ears, wrinkled foreheads, and sad-looking eyes ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      114 =>
      array(
        'breed' => 'Basset Jack ',
        'description' => ' The Basset Hound is a talented hunting dog, but more widely known for their gentle dispositions ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      115 =>
      array(
        'breed' => ' Basset Retriever',
        'description' => ' a great family dog with a mild-mannered disposition, a willingness to please, and a loving and devoted nature ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      116 =>
      array(
        'breed' => 'Bassetoodle ',
        'description' => ' Basset Hound combined with the intelligence and trainability of the Poodle ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      117 =>
      array(
        'breed' => 'Bavarian Mountain Scent Hound ',
        'description' => 'ideal companion for tracking and hunting in challenging mountain terrains  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      118 =>
      array(
        'breed' => 'Bea-Tzu ',
        'description' => ' Beagle is a talented hunting dog, but more widely known for their gentle dispositions around family members ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      119 =>
      array(
        'breed' => 'Beabull ',
        'description' => ' These cute pups are quite versatile and can adapt to both apartment living or a home with a backyard to run in ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      120 =>
      array(
        'breed' => 'Beagle ',
        'description' => 'They are known for their friendly and playful personalities, and they make great family pets ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      121 =>
      array(
        'breed' => 'Beaglier ',
        'description' => ' Compact, energetic, and loyal, these pups inherited some of the best qualities from both of their parents ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      122 =>
      array(
        'breed' => 'Bearded Collie ',
        'description' => ' Due to their energy and quickness, Bearded Collies excel in competing in obedience, rally, agility, and other dog sports ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      123 =>
      array(
        'breed' => 'Bedlington Terrier ',
        'description' => ' originated as a killer of vermin and hunter’s sidekick. While their unique appearance and dapper lamb-like coat may make them seem a little less ferocious, these dogs excelled as small hunters ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      124 =>
      array(
        'breed' => 'Belgian Laekenois ',
        'description' => ' This breed recently gained international recognition and holds the distinction of being the rarest among the four Belgian Shepherd dogs ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      125 =>
      array(
        'breed' => ' Belgian Malinois',
        'description' => ' a dog breed with a loyal nature, strong work ethic, and herding instincts ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      126 =>
      array(
        'breed' => ' Belgian Sheepdog',
        'description' => ' Belgian Sheepdogs are alert, devoted, and protective ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      127 =>
      array(
        'breed' => 'Belgian Tervuren ',
        'description' => 'They’re intelligent and athletic, making them a versatile performer in any number of activities, including their original job, herding  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      128 =>
      array(
        'breed' => 'Bergamasco Sheepdog',
        'description' => 'the intelligent breed, most famous for their unique matted, mop-like coats, is known as a friendly and social companion and show dog  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      129 =>
      array(
        'breed' => 'Berger Picard ',
        'description' => ' Despite their rustic and independent nature, Berger Picards are affectionate and loyal companions ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      130 =>
      array(
        'breed' => 'Bernedoodle ',
        'description' => '  is a gentle, intelligent, and trainable hybrid dog breed that is a cross between the Bernese Mountain Dog and the Poodle ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      131 =>
      array(
        'breed' => 'Bernese Mountain Dog ',
        'description' => '  a large, sturdy breed with a long, thick tri-colored (black, brown, and white) coat. They have a gentle and affectionate nature, and make great family pets ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      132 =>
      array(
        'breed' => 'Bichon FriseBichon Frise ',
        'description' => 'is a cheerful, small dog breed with a love of mischief and a lot of love to give. Their black eyes and fluffy white coat make them look almost like a child’s toy  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      133 =>
      array(
        'breed' => ' Bichonaranian',
        'description' => ' This breed is short in stature. However, they’re huge in personality, and can be a rewarding companion ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      134 =>
      array(
        'breed' => 'Bidoodle ',
        'description' => ' Bidoodle combine to make an affectionate, spunky small dog. They may be needy and require lots of stimulation and playtime ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      135 =>
      array(
        'breed' => 'Philippine Native Dog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      136 =>
      array(
        'breed' => 'Boxer ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      137 =>
      array(
        'breed' => 'Pug ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      138 =>
      array(
        'breed' => 'Yorkshire Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      139 =>
      array(
        'breed' => 'Cocker Spaniel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      140 =>
      array(
        'breed' => 'Great Dane ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      141 =>
      array(
        'breed' => ' Saint Bernard',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      142 =>
      array(
        'breed' => 'Australian Shepherd ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      143 =>
      array(
        'breed' => 'Shetland Sheepdog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      144 =>
      array(
        'breed' => 'Maltese ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      145 =>
      array(
        'breed' => 'Miniature Schnauzer ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      146 =>
      array(
        'breed' => 'Border Collie ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      147 =>
      array(
        'breed' => 'Chow Chow ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      148 =>
      array(
        'breed' => 'Bichon Frise ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      149 =>
      array(
        'breed' => 'Boston Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      150 =>
      array(
        'breed' => 'Collie ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      151 =>
      array(
        'breed' => 'Cavalier King Charles Spaniel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      152 =>
      array(
        'breed' => 'Bullmastiff ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      153 =>
      array(
        'breed' => 'Bloodhound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      154 =>
      array(
        'breed' => 'Basenji ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      155 =>
      array(
        'breed' => 'Belgian Malinois ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      156 =>
      array(
        'breed' => 'Newfoundland ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      157 =>
      array(
        'breed' => 'Staffordshire Bull Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      158 =>
      array(
        'breed' => 'Pembroke Welsh Corgi ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      159 =>
      array(
        'breed' => 'Old English Sheepdog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      160 =>
      array(
        'breed' => 'Norwegian Elkhound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      161 =>
      array(
        'breed' => 'Lhasa Apso ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      162 =>
      array(
        'breed' => 'Keeshond ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      163 =>
      array(
        'breed' => 'Jack Russell Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      164 =>
      array(
        'breed' => 'Italian Greyhound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      165 =>
      array(
        'breed' => 'Irish Wolfhound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      166 =>
      array(
        'breed' => 'Irish Setter ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      167 =>
      array(
        'breed' => 'Havanese ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      168 =>
      array(
        'breed' => 'Harrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      169 =>
      array(
        'breed' => 'Greyhound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      170 =>
      array(
        'breed' => 'Gordon Setter ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      171 =>
      array(
        'breed' => 'Glen of Imaal Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      172 =>
      array(
        'breed' => ' Fox Terrier',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      173 =>
      array(
        'breed' => 'Flat-Coated Retriever ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      174 =>
      array(
        'breed' => 'English Setter ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      175 =>
      array(
        'breed' => 'English Foxhound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      176 =>
      array(
        'breed' => 'English Cocker Spaniel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      177 =>
      array(
        'breed' => 'English Bulldog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      178 =>
      array(
        'breed' => 'English Boodle ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      179 =>
      array(
        'breed' => 'Dutch Shepherd ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      180 =>
      array(
        'breed' => 'Danish-Swedish Farmdog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      181 =>
      array(
        'breed' => 'Dandie Dinmont Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      182 =>
      array(
        'breed' => 'Curly-Coated Retriever ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      183 =>
      array(
        'breed' => 'Coton de Tulear ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      184 =>
      array(
        'breed' => 'Cockapoo ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      185 =>
      array(
        'breed' => 'Clumber Spaniel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      186 =>
      array(
        'breed' => 'Chinese Crested ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      187 =>
      array(
        'breed' => 'Chesapeake Bay Retriever ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      188 =>
      array(
        'breed' => 'Cavalier King Charles Spaniel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      189 =>
      array(
        'breed' => 'Canaan Dog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      190 =>
      array(
        'breed' => 'Cairn Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      191 =>
      array(
        'breed' => 'Briard ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      192 =>
      array(
        'breed' => 'Boykin Spaniel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      193 =>
      array(
        'breed' => 'Bolognese ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      194 =>
      array(
        'breed' => 'Boerboel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      195 =>
      array(
        'breed' => 'Bernese Mountain Dog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      196 =>
      array(
        'breed' => 'Bedlington Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      197 =>
      array(
        'breed' => 'Beauceron ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      198 =>
      array(
        'breed' => 'Bearded Collie ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      199 =>
      array(
        'breed' => 'Beagle-Harrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      200 =>
      array(
        'breed' => 'Basset Hound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      201 =>
      array(
        'breed' => 'Australian Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      202 =>
      array(
        'breed' => 'Australian Cattle Dog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      203 =>
      array(
        'breed' => 'Appenzeller ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      204 =>
      array(
        'breed' => 'Anatolian Shepherd Dog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      205 =>
      array(
        'breed' => 'American Water Spaniel ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      206 =>
      array(
        'breed' => 'American Staffordshire Terrier ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      207 =>
      array(
        'breed' => 'American Eskimo Dog ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      208 =>
      array(
        'breed' => 'American English Coonhound ',
        'description' => '  ',
        'specie_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      //cats
      209 =>
      array(
        'breed' => 'Persian',
        'description' => 'Long-haired and characterized by their round faces, short noses, and luxurious, thick coats.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      210 =>
      array(
        'breed' => 'Siamese',
        'description' => 'Known for their striking blue almond-shaped eyes, sleek bodies, and short coats with color points on their ears, face, paws, and tail.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      211 =>
      array(
        'breed' => 'Maine Coon',
        'description' => 'Among the largest domesticated breeds, known for their tufted ears, bushy tails, and friendly, sociable nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      212 =>
      array(
        'breed' => 'Ragdoll',
        'description' => 'Large and gentle, they have semi-longhair coats, striking blue eyes, and are known for their relaxed demeanor.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      213 =>
      array(
        'breed' => 'Bengal',
        'description' => 'Athletic and wild-looking with distinctive leopard-like spots or marbling on their coats.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      214 =>
      array(
        'breed' => 'Scottish Fold',
        'description' => 'Their defining feature is their folded ears, giving them an adorable and unique appearance.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      215 =>
      array(
        'breed' => 'British Shorthair',
        'description' => 'Medium to large-sized cats with dense, plush coats and round faces.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      216 =>
      array(
        'breed' => 'Sphynx',
        'description' => 'Hairless cats known for their wrinkled skin, large ears, and energetic personalities.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      217 =>
      array(
        'breed' => 'Russian Blue',
        'description' => 'Elegant and shy with short, dense, shimmering blue-gray coats.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      218 =>
      array(
        'breed' => 'Burmese',
        'description' => 'Affectionate cats with short, silky coats, and expressive eyes.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      219 =>
      array(
        'breed' => 'Abyssinian',
        'description' => 'Sleek and muscular with a distinctly ticked coat and a playful, active personality.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      220 =>
      array(
        'breed' => 'Exotic Shorthair',
        'description' => 'Similar to Persians but with short, plush coats, they have a sweet and gentle demeanor.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      221 =>
      array(
        'breed' => 'Oriental Shorthair',
        'description' => 'Slender and sleek with large ears and a wide variety of coat colors and patterns.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      222 =>
      array(
        'breed' => 'Norwegian Forest Cat',
        'description' => 'Large, long-haired cats with a water-repellent double coat, bushy tails, and tufted ears.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      223 =>
      array(
        'breed' => 'Himalayan',
        'description' => 'Similar to Persians but with color points like Siamese, known for their beautiful, fluffy coats and blue eyes.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      224 =>
      array(
        'breed' => 'Turkish Van',
        'description' => 'Known for their love of water and their semi-longhair coat with a distinctive color pattern on the head and tail.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      225 =>
      array(
        'breed' => 'Cornish Rex',
        'description' => 'Small to medium-sized cats with soft, curly coats and active, playful personalities.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      226 =>
      array(
        'breed' => 'Devon Rex',
        'description' => 'Characterized by their curly coats, large ears, and mischievous personalities.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      227 => array(
        'breed' => 'Tonkinese',
        'description' => 'Cross between Siamese and Burmese, they have striking aqua-colored eyes and a sleek coat.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      228 =>
      array(
        'breed' => 'Manx',
        'description' => 'Tailless or short-tailed cats with a sturdy build and a playful, dog-like personality.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      229 =>
      array(
        'breed' => 'American Shorthair',
        'description' => 'Medium-sized cats with strong, muscular bodies and a wide range of coat colors and patterns.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      230 =>
      array(
        'breed' => 'Balinese',
        'description' => 'Similar to Siamese but with semi-longhair coats and blue almond-shaped eyes.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      231 =>
      array(
        'breed' => 'Japanese Bobtail',
        'description' => 'Known for their distinctive short, bobbed tails and friendly, outgoing nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      232 =>
      array(
        'breed' => 'Egyptian Mau',
        'description' => 'Graceful and athletic with spotted coats and a natural shimmer.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      233 =>
      array(
        'breed' => 'LaPerm',
        'description' => 'Curly-coated cats with a unique, affectionate, and people-oriented personality.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      234 =>
      array(
        'breed' => 'Selkirk Rex',
        'description' => 'Large, curly-coated cats with a muscular build and a sweet, patient temperament.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      235 =>
      array(
        'breed' => 'Pixiebob',
        'description' => 'Bobbed tails, spotted coats, and a wild appearance characterize this breed, known for their intelligence and friendliness.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      236 =>
      array(
        'breed' => 'Singapura',
        'description' => 'Small, energetic cats with ticked coats and large eyes, often called "the smallest lion.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      237 =>
      array(
        'breed' => 'Havana Brown',
        'description' => 'Glossy, chocolate-colored coats and green eyes define this affectionate and playful breed.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      238 =>
      array(
        'breed' => 'Birman',
        'description' => 'Blue-eyed, long-haired cats with striking white gloves on their paws and a sweet, gentle nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      239 =>
      array(
        'breed' => 'Chartreux',
        'description' => 'Medium-sized, blue-gray cats with smiling expressions and dense, water-resistant coats.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      240 =>
      array(
        'breed' => 'American Curl',
        'description' => 'Their unique curled-back ears set them apart, and they\'re known for their playful and affectionate personalities.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      241 =>
      array(
        'breed' => 'Turkish Angora',
        'description' => 'Graceful and elegant, they have long, silky coats and striking blue or amber eyes.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      242 =>
      array(
        'breed' => 'Korat',
        'description' => 'Silver-tipped blue coats, heart-shaped faces, and a playful, affectionate demeanor characterize this breed.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      243 =>
      array(
        'breed' => 'Siamese Orientals',
        'description' => 'A slender, elegant variation of the Siamese breed, with a wide range of coat colors and patterns.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      244 =>
      array(
        'breed' => 'Munchkin',
        'description' => 'Known for their short legs, they have playful and outgoing personalities.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      245 =>
      array(
        'breed' => 'Peterbald',
        'description' => 'Hairless or short-haired cats known for their sleek bodies and affectionate nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      246 =>
      array(
        'breed' => 'Toyger',
        'description' => 'Resembling a miniature tiger, they have striped coats and an affectionate, friendly temperament.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      247 =>
      array(
        'breed' => 'Siberian',
        'description' => 'Large, long-haired cats with thick, triple-layered coats and a friendly, outgoing personality.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      248 =>
      array(
        'breed' => 'Sokoke',
        'description' => 'Slender and wild-looking, they have striking, ticking coats and an active, curious nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      249 =>
      array(
        'breed' => 'Cymric',
        'description' => 'Similar to Manx but with long fur, they\'re playful, intelligent, and known for their fluffy tails.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      250 =>
      array(
        'breed' => 'Australian Mist',
        'description' => 'Known for their spotted coats and affectionate, people-oriented personalities.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      251 =>
      array(
        'breed' => 'Chausie',
        'description' => 'Resembling a jungle cat, they have striking coats and an active, intelligent demeanor.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      252 =>
      array(
        'breed' => 'Savannah',
        'description' => 'A hybrid breed resembling a small leopard, known for their striking appearance and playful nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      253 =>
      array(
        'breed' => 'Ragamuffin',
        'description' => 'Large, sturdy cats with long coats and a gentle, affectionate nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      254 =>
      array(
        'breed' => 'Thai Cat',
        'description' => 'Similar to traditional Siamese but with a more moderate appearance and range of coat colors.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      255 =>
      array(
        'breed' => 'Nebelung',
        'description' => 'Long-haired cats with a striking shimmering blue coat and a reserved but affectionate nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      256 =>
      array(
        'breed' => 'Serengeti',
        'description' => 'Resembling a wild serval, they have spotted coats and an active, playful demeanor.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      257 =>
      array(
        'breed' => 'Chantilly/Tiffany',
        'description' => 'Semi-longhaired cats with silky coats and affectionate, quiet personalities.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      258 =>
      array(
        'breed' => 'Ukrainian Levkoy',
        'description' => 'Unique breed with folded ears and a hairless or short coat, known for their friendly nature.',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      //rabbits
      259 =>
      array(
        'breed' => 'American Fuzzy Lop ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      260 =>
      array(
        'breed' => 'American Sable ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      261 =>
      array(
        'breed' => 'Angora ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      262 =>
      array(
        'breed' => 'Belgian Hare ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      263 =>
      array(
        'breed' => 'Beveren ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      264 =>
      array(
        'breed' => 'Blanc de Hotot ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      265 =>
      array(
        'breed' => 'Britannia Petite ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      266 =>
      array(
        'breed' => 'Californian ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      267 =>
      array(
        'breed' => 'Champagne d’Argent ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      268 =>
      array(
        'breed' => 'Checkered Giant ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      269 =>
      array(
        'breed' => 'Chinchilla ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      270 =>
      array(
        'breed' => 'Cinnamon ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      271 =>
      array(
        'breed' => 'Creme dArgent ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      272 =>
      array(
        'breed' => 'Dutch ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      273 =>
      array(
        'breed' => 'Dwarf Hotot ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      274 =>
      array(
        'breed' => 'English Angora ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      275 =>
      array(
        'breed' => 'English Lop ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      276 =>
      array(
        'breed' => 'English Spot ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      277 =>
      array(
        'breed' => 'Flemish Giant ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      278 =>
      array(
        'breed' => 'Florida White ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      279 =>
      array(
        'breed' => 'French Angora ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      280 =>
      array(
        'breed' => 'French Lop ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      281 =>
      array(
        'breed' => 'Giant Angora ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      282 =>
      array(
        'breed' => 'Giant Chinchilla ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      283 =>
      array(
        'breed' => 'Harlequin ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      284 =>
      array(
        'breed' => 'Havana  ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      285 =>
      array(
        'breed' => 'Himalayan ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      286 =>
      array(
        'breed' => 'Holland Lop ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      287 =>
      array(
        'breed' => 'Jersey Wooly ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      288 =>
      array(
        'breed' => 'Lilac ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      289 =>
      array(
        'breed' => 'Lionhead ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      290 =>
      array(
        'breed' => 'Mini Lop ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      291 =>
      array(
        'breed' => 'Mini Rex ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      292 =>
      array(
        'breed' => 'Netherland Dwarf ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      293 =>
      array(
        'breed' => 'New Zealand ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      294 =>
      array(
        'breed' => 'Palomino ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      295 =>
      array(
        'breed' => 'Polish ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      296 =>
      array(
        'breed' => 'Rex ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      297 =>
      array(
        'breed' => 'Rhinelander ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      298 =>
      array(
        'breed' => 'Satin ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      299 =>
      array(
        'breed' => 'Silver Fox ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      300 =>
      array(
        'breed' => 'Silver Marten ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      301 =>
      array(
        'breed' => 'Standard Chinchilla ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      302 =>
      array(
        'breed' => 'Tan ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      303 =>
      array(
        'breed' => 'Thrianta ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      304 =>
      array(
        'breed' => 'Blanc de Bouscat ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      305 =>
      array(
        'breed' => 'Beveren ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      306 =>
      array(
        'breed' => 'Blue of Ham ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      307 =>
      array(
        'breed' => 'Butterfly ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      308 =>
      array(
        'breed' => 'Castor Rex ',
        'description' => '  ',
        'specie_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      //avians
      309 =>
      array(
        'breed' => 'Amazon Blue-Feather',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      310 =>
      array(
        'breed' => 'Amazon Yellow',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      311 =>
      array(
        'breed' => 'Parrot Eclect',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      312 =>
      array(
        'breed' => 'African Gray',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      313 =>
      array(
        'breed' => 'Budgerigar',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      314 =>
      array(
        'breed' => 'Gray Cheek',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      315 =>
      array(
        'breed' => 'Cockatoo Molu',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      316 =>
      array(
        'breed' => 'Cockatoo Umber',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      317 =>
      array(
        'breed' => 'Cockatiel',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      318 =>
      array(
        'breed' => 'Canary',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      319 =>
      array(
        'breed' => 'Conure',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      320 =>
      array(
        'breed' => 'Macaw Blue',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      321 =>
      array(
        'breed' => 'Macaw Gold',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      322 =>
      array(
        'breed' => 'Macaw Hyacinth',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      323 =>
      array(
        'breed' => 'Macaw Scarlet',
        'description' => '',
        'specie_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      //equine
      324 =>
      array(
        'breed' => 'Akhal- Teke',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      325 =>
      array(
        'breed' => 'Albino',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      326 =>
      array(
        'breed' => 'American Paint Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      327 =>
      array(
        'breed' => 'American Quarter Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      328 =>
      array(
        'breed' => 'American Saddle Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      329 =>
      array(
        'breed' => 'Andalusian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      330 =>
      array(
        'breed' => 'Anglo-Arab',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      331 =>
      array(
        'breed' => 'Appaloosa',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      332 =>
      array(
        'breed' => 'Appaloosa Cross',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      333 =>
      array(
        'breed' => 'Arabian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      334 =>
      array(
        'breed' => 'Arabian Cross',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      335 =>
      array(
        'breed' => 'Australian Brumby',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      336 =>
      array(
        'breed' => 'Australian Stock Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      337 =>
      array(
        'breed' => 'Barb',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      338 =>
      array(
        'breed' => 'Bavarian Warmblood',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      339 =>
      array(
        'breed' => 'Belgian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      340 =>
      array(
        'breed' => 'Belgian Cross',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      341 =>
      array(
        'breed' => 'British Warmblood',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      342 =>
      array(
        'breed' => 'Buckskin',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      343 =>
      array(
        'breed' => 'Canadian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      344 =>
      array(
        'breed' => 'Caspian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      345 =>
      array(
        'breed' => 'Chincoteague Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      346 =>
      array(
        'breed' => 'Cleveland Bay',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      347 =>
      array(
        'breed' => 'Clydesdale',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      348 =>
      array(
        'breed' => 'Conestoga',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      349 =>
      array(
        'breed' => 'Connermara',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      350 =>
      array(
        'breed' => 'Dales Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      351 =>
      array(
        'breed' => 'Dartmoor Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      352 =>
      array(
        'breed' => 'Donkey',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      353 =>
      array(
        'breed' => 'Draft Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      354 =>
      array(
        'breed' => 'Dutch Warmblood',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      355 =>
      array(
        'breed' => 'English Saddle Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      356 =>
      array(
        'breed' => 'Exmoor',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      357 =>
      array(
        'breed' => 'Exmoor Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      358 =>
      array(
        'breed' => 'Fell',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      359 =>
      array(
        'breed' => 'Flemish',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),


      360 =>
      array(
        'breed' => 'Fox Trotter Cross',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      361 =>
      array(
        'breed' => 'Friesian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      362 =>
      array(
        'breed' => 'Gelderlander',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      363 =>
      array(
        'breed' => 'Golden American Saddle Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      364 =>
      array(
        'breed' => 'Grade',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      365 =>
      array(
        'breed' => 'Hackney',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      366 =>
      array(
        'breed' => 'Hackney Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      367 =>
      array(
        'breed' => 'Haflinger',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      368 =>
      array(
        'breed' => 'Hanovarian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      369 =>
      array(
        'breed' => 'Hessian',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      370 =>
      array(
        'breed' => 'Highland',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      371 =>
      array(
        'breed' => 'Hinny',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      372 =>
      array(
        'breed' => 'Hobbies',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      373 =>
      array(
        'breed' => 'Holsteiner',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      374 =>
      array(
        'breed' => 'Hucul',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      375 =>
      array(
        'breed' => 'Hungarian Warmblood',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      376 =>
      array(
        'breed' => 'Icelandic',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      357 =>
      array(
        'breed' => 'Indian Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      358 =>
      array(
        'breed' => 'Irish Hunter',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      359 =>
      array(
        'breed' => 'Irish Sports Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      360 =>
      array(
        'breed' => 'Jack',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      361 =>
      array(
        'breed' => 'Jenny',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      362 =>
      array(
        'breed' => 'Kentucky Thoroughbred',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      363 =>
      array(
        'breed' => 'Lipizzan',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      364 =>
      array(
        'breed' => 'Lusitanno',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      365 =>
      array(
        'breed' => 'Miniature Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      366 =>
      array(
        'breed' => 'Missouri Fox Trotter',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      367 =>
      array(
        'breed' => 'Mixed',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      368 =>
      array(
        'breed' => 'Morab',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      369 =>
      array(
        'breed' => 'Morgan',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      370 =>
      array(
        'breed' => 'Mule',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      371 =>
      array(
        'breed' => 'Mustang',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      372 =>
      array(
        'breed' => 'National Show Horse',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      373 =>
      array(
        'breed' => 'New Forest Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      374 =>
      array(
        'breed' => 'Newfoundland Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      375 =>
      array(
        'breed' => 'Norman',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      376 =>
      array(
        'breed' => 'Northeastem',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      377 =>
      array(
        'breed' => 'Norwegian Fjord',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      378 =>
      array(
        'breed' => 'Orlov Trotter',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      379 =>
      array(
        'breed' => 'Other',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      380 =>
      array(
        'breed' => 'Paint',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      381 =>
      array(
        'breed' => 'Palamino',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      382 =>
      array(
        'breed' => 'Palamino Cross',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      383 =>
      array(
        'breed' => 'Paso Fino',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      384 =>
      array(
        'breed' => 'Percheron',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      385 =>
      array(
        'breed' => 'Pinto',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      386 =>
      array(
        'breed' => 'Pony',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      387 =>
      array(
        'breed' => 'Pony of America',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      388 =>
      array(
        'breed' => 'Przewalski',
        'description' => '',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      389 =>
      array(
        'breed' => 'Quarter Horse Cross',
        'description' => '',
        'specie_id' => 5,

        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

      ),

      390 =>
      array(
        'breed' => 'Rocky Mountain Horse',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      391 =>
      array(
        'breed' => 'Saddle Horse',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      392 =>
      array(
        'breed' => 'Schleswiger Heavy Draft',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      393 =>
      array(
        'breed' => 'Selle Francais',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      394 =>
      array(
        'breed' => 'Shetland Pony',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      395 =>
      array(
        'breed' => 'Shire',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      396 =>
      array(
        'breed' => 'Spanish Mustang',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      397 =>
      array(
        'breed' => 'Standardbred',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      398 =>
      array(
        'breed' => 'Standardbred Cross',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      399 =>
      array(
        'breed' => 'Suffolk Punch',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      400 =>
      array(
        'breed' => 'Swedish Warmblood',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      401 =>
      array(
        'breed' => 'Tannessee Walking Horse',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      402 =>
      array(
        'breed' => 'Thoroughbred',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      403 =>
      array(
        'breed' => 'Thoroughbred Cross',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      404 =>
      array(
        'breed' => 'Trakehner',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      405 =>
      array(
        'breed' => 'Walker',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      406 =>
      array(
        'breed' => 'Walker Cross',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),

      407 =>
      array(
        'breed' => 'Welsh Pony and Cob',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      408 =>
      array(
        'breed' => 'Westland Pony',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      409 =>
      array(
        'breed' => 'Zebra',
        'description' => ' ',
        'specie_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      410 =>
      array(
        'breed' => 'Goat',
        'description' => '',
        'specie_id' => 6,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      411 =>
      array(
        'breed' => 'Puspin',
        'description' => ' ',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      412 =>
      array(
        'breed' => 'Undefined',
        'description' => ' ',
        'specie_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ),
      413 =>
      array(
        'breed' => 'Undefined',
        'description' => ' ',
        'specie_id' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      )

    ]);
  }
}
