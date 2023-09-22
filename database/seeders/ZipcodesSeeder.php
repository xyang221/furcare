<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZipcodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zipcodes')->insert([
                0 => 
                array (
                  'zipcode' => '400',
                  'area' => 'International Correspondence School',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1 => 
                array (
                  'zipcode' => '401',
                  'area' => 'Asian Development Bank',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2 => 
                array (
                  'zipcode' => '410',
                  'area' => 'Radio Bible Class',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                3 => 
                array (
                  'zipcode' => '420',
                  'area' => 'Bible School on the Air',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                4 => 
                array (
                  'zipcode' => '540',
                  'area' => 'Febias College of Bible',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                5 => 
                array (
                  'zipcode' => '560',
                  'area' => 'Far East Broadcasting Corporation',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                6 => 
                array (
                  'zipcode' => '700',
                  'area' => 'Plain Truth Ministries',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                7 => 
                array (
                  'zipcode' => '701',
                  'area' => 'Colgate Palmolive Philippines',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                8 => 
                array (
                  'zipcode' => '702',
                  'area' => 'Citibank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                9 => 
                array (
                  'zipcode' => '703',
                  'area' => 'Sarmiento Enterprises',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                10 => 
                array (
                  'zipcode' => '704',
                  'area' => 'Producers Bank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                11 => 
                array (
                  'zipcode' => '705',
                  'area' => 'Union Ajinomoto',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                12 => 
                array (
                  'zipcode' => '706',
                  'area' => 'Faith Embassy',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                13 => 
                array (
                  'zipcode' => '707',
                  'area' => 'Canadian Embassy',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                14 => 
                array (
                  'zipcode' => '708',
                  'area' => 'Philippine National Oil Company',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                15 => 
                array (
                  'zipcode' => '709',
                  'area' => 'A Z Direct Marketing',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                16 => 
                array (
                  'zipcode' => '710',
                  'area' => 'American Express',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                17 => 
                array (
                  'zipcode' => '711',
                  'area' => 'Land Bank of the Philippines',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                18 => 
                array (
                  'zipcode' => '712',
                  'area' => 'Prudential Bank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                19 => 
                array (
                  'zipcode' => '713',
                  'area' => 'BPI Family Savings Bank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                20 => 
                array (
                  'zipcode' => '714',
                  'area' => 'Philippine Manila Mission',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                21 => 
                array (
                  'zipcode' => '715',
                  'area' => 'Marcopper Mining Corporation',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                22 => 
                array (
                  'zipcode' => '717',
                  'area' => 'Diners Club',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                23 => 
                array (
                  'zipcode' => '718',
                  'area' => 'International Center for Aquatic Resources',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                24 => 
                array (
                  'zipcode' => '719',
                  'area' => 'Security Bank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                25 => 
                array (
                  'zipcode' => '720',
                  'area' => 'Bank of the Philippine Islands',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                26 => 
                array (
                  'zipcode' => '721',
                  'area' => 'Philippine Long Distance Telephone Company',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                27 => 
                array (
                  'zipcode' => '722',
                  'area' => 'World Executive Digest',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                28 => 
                array (
                  'zipcode' => '723',
                  'area' => 'Japanese Embassy',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                29 => 
                array (
                  'zipcode' => '724',
                  'area' => 'Sun Life Financial',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                30 => 
                array (
                  'zipcode' => '725',
                  'area' => 'Insular Life Assurance Company',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                31 => 
                array (
                  'zipcode' => '726',
                  'area' => 'Equitable PCI Bank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                32 => 
                array (
                  'zipcode' => '727',
                  'area' => 'Rizal Commercial Banking Corporation',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                33 => 
                array (
                  'zipcode' => '728',
                  'area' => 'United Coconut Planters Bank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                34 => 
                array (
                  'zipcode' => '730',
                  'area' => 'Zuellig Pharma',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                35 => 
                array (
                  'zipcode' => '731',
                  'area' => 'BCD Direct Marketing',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                36 => 
                array (
                  'zipcode' => '732',
                  'area' => 'Export and Industry Bank',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                37 => 
                array (
                  'zipcode' => '740',
                  'area' => 'Sycip, Gorres, Velayo and Co.',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                38 => 
                array (
                  'zipcode' => '750',
                  'area' => 'Philippine Airlines',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                39 => 
                array (
                  'zipcode' => '760',
                  'area' => 'Pilipinas Shell',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                40 => 
                array (
                  'zipcode' => '770',
                  'area' => 'ACCRA Law Offices',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                41 => 
                array (
                  'zipcode' => '780',
                  'area' => 'Mead Johnson Philippines',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                42 => 
                array (
                  'zipcode' => '788',
                  'area' => 'Directories Philippines Corporation',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                43 => 
                array (
                  'zipcode' => '790',
                  'area' => 'Atlantic, Gulf and Pacific',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                44 => 
                array (
                  'zipcode' => '800',
                  'area' => 'Social Security System',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                45 => 
                array (
                  'zipcode' => '801',
                  'area' => 'Camp Crame',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                46 => 
                array (
                  'zipcode' => '802',
                  'area' => 'Camp Aguinaldo',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                47 => 
                array (
                  'zipcode' => '810',
                  'area' => 'Araneta Center',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                48 => 
                array (
                  'zipcode' => '820',
                  'area' => 'Bureau of Internal Revenue',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                49 => 
                array (
                  'zipcode' => '830',
                  'area' => 'National Irrigation Administration',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                50 => 
                array (
                  'zipcode' => '840',
                  'area' => 'V. Luna Hospital',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                51 => 
                array (
                  'zipcode' => '850',
                  'area' => 'Philippine Heart Center',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                52 => 
                array (
                  'zipcode' => '860',
                  'area' => 'Quezon City Hall',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                53 => 
                array (
                  'zipcode' => '870',
                  'area' => 'Veterans Hospital',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                54 => 
                array (
                  'zipcode' => '880',
                  'area' => 'Commission on Audit',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                55 => 
                array (
                  'zipcode' => '900',
                  'area' => 'Manila Bulletin',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                56 => 
                array (
                  'zipcode' => '901',
                  'area' => 'Adventist University of the Philippines',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                57 => 
                array (
                  'zipcode' => '902',
                  'area' => 'Far East Broadcasting Company',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                58 => 
                array (
                  'zipcode' => '903',
                  'area' => 'Manila Pavilion Hotel',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                59 => 
                array (
                  'zipcode' => '904',
                  'area' => 'Midland Plaza Manila Hotel',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                60 => 
                array (
                  'zipcode' => '905',
                  'area' => 'The Philippine Star',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                61 => 
                array (
                  'zipcode' => '906',
                  'area' => 'Manila Medical Center',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                62 => 
                array (
                  'zipcode' => '907',
                  'area' => 'San Miguel Corporation',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                63 => 
                array (
                  'zipcode' => '908',
                  'area' => 'Pan Filipino Shipping',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                64 => 
                array (
                  'zipcode' => '909',
                  'area' => 'Summer Institute of Linguistics',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                65 => 
                array (
                  'zipcode' => '910',
                  'area' => 'Department of Labor and Employment',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                66 => 
                array (
                  'zipcode' => '911',
                  'area' => 'Philippine Statistics Authority',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                67 => 
                array (
                  'zipcode' => '912',
                  'area' => 'Bureau of Plant Industry',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                68 => 
                array (
                  'zipcode' => '913',
                  'area' => 'Manila Hotel',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                69 => 
                array (
                  'zipcode' => '914',
                  'area' => 'Philippine Refining Company and Unilever Philippines',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                70 => 
                array (
                  'zipcode' => '915',
                  'area' => 'International Correspondence Institute',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                71 => 
                array (
                  'zipcode' => '916',
                  'area' => 'Radio Veritas',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                72 => 
                array (
                  'zipcode' => '917',
                  'area' => 'Ateneo de Manila University',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                73 => 
                array (
                  'zipcode' => '918',
                  'area' => 'Fil Japan Shipping Company',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                74 => 
                array (
                  'zipcode' => '919',
                  'area' => 'Manila Police District',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                75 => 
                array (
                  'zipcode' => '920',
                  'area' => 'Sunbursts Publications',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                76 => 
                array (
                  'zipcode' => '921',
                  'area' => 'Sofitel Philippine Plaza',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                77 => 
                array (
                  'zipcode' => '922',
                  'area' => 'De La Salle University',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                78 => 
                array (
                  'zipcode' => '923',
                  'area' => 'Don Stewart Evangelistic Association',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                79 => 
                array (
                  'zipcode' => '924',
                  'area' => 'World Map',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                80 => 
                array (
                  'zipcode' => '925',
                  'area' => 'Chinabank',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                81 => 
                array (
                  'zipcode' => '926',
                  'area' => 'Caltex Philippines',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                82 => 
                array (
                  'zipcode' => '927',
                  'area' => 'Philippine Veterans Affairs Office',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                83 => 
                array (
                  'zipcode' => '928',
                  'area' => 'Philippine Campus Crusade for Christ',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                84 => 
                array (
                  'zipcode' => '930',
                  'area' => 'United States Embassy',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                85 => 
                array (
                  'zipcode' => '940',
                  'area' => 'Philippine National Bank',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                86 => 
                array (
                  'zipcode' => '960',
                  'area' => 'International Rice Research Institute',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                87 => 
                array (
                  'zipcode' => '970',
                  'area' => 'Department of Justice',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                88 => 
                array (
                  'zipcode' => '980',
                  'area' => 'Asian Development Bank',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                89 => 
                array (
                  'zipcode' => '990',
                  'area' => 'Philippine American Life and General Insurance Company',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                90 => 
                array (
                  'zipcode' => '1000',
                  'area' => 'Manila Central Post Office',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                91 => 
                array (
                  'zipcode' => '1001',
                  'area' => 'Quiapo',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                92 => 
                array (
                  'zipcode' => '1002',
                  'area' => 'Intramuros',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                93 => 
                array (
                  'zipcode' => '1003',
                  'area' => 'Santa Cruz (South)',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                94 => 
                array (
                  'zipcode' => '1004',
                  'area' => 'Malate',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                95 => 
                array (
                  'zipcode' => '1005',
                  'area' => 'San Miguel',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                96 => 
                array (
                  'zipcode' => '1006',
                  'area' => 'Binondo',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                97 => 
                array (
                  'zipcode' => '1007',
                  'area' => 'Paco',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                98 => 
                array (
                  'zipcode' => '1008',
                  'area' => 'Sampaloc (East)',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                99 => 
                array (
                  'zipcode' => '1009',
                  'area' => 'Santa Ana',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                100 => 
                array (
                  'zipcode' => '1010',
                  'area' => 'San Nicolas',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                101 => 
                array (
                  'zipcode' => '1011',
                  'area' => 'Pandacan',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                102 => 
                array (
                  'zipcode' => '1012',
                  'area' => 'Tondo (South)',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                103 => 
                array (
                  'zipcode' => '1013',
                  'area' => 'Tondo (North)',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                104 => 
                array (
                  'zipcode' => '1014',
                  'area' => 'Santa Cruz (North)',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                105 => 
                array (
                  'zipcode' => '1015',
                  'area' => 'Sampaloc (West)',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                106 => 
                array (
                  'zipcode' => '1016',
                  'area' => 'Santa Mesa',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                107 => 
                array (
                  'zipcode' => '1017',
                  'area' => 'San Andres',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                108 => 
                array (
                  'zipcode' => '1018',
                  'area' => 'Port Area (South)',
                  'province' => 'Manila',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                109 => 
                array (
                  'zipcode' => '1100',
                  'area' => 'Central',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                110 => 
                array (
                  'zipcode' => '1100',
                  'area' => 'Piñahan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                111 => 
                array (
                  'zipcode' => '1100',
                  'area' => 'Project 6',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                112 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'Botocan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                113 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'Diliman',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                114 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'Krus na Ligas',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                115 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'Malaya',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                116 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'Old Capitol Site',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                117 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'San Vicente',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                118 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'Sikatuna Village',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                119 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'Teachers Village',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                120 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'University of the Philippines Post Office',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                121 => 
                array (
                  'zipcode' => '1101',
                  'area' => 'University of the Philippines Village',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                122 => 
                array (
                  'zipcode' => '1102',
                  'area' => 'Amihan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                123 => 
                array (
                  'zipcode' => '1102',
                  'area' => 'Claro',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                124 => 
                array (
                  'zipcode' => '1102',
                  'area' => 'Duyan Duyan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                125 => 
                array (
                  'zipcode' => '1102',
                  'area' => 'E. Rodriguez',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                126 => 
                array (
                  'zipcode' => '1102',
                  'area' => 'Kamias',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                127 => 
                array (
                  'zipcode' => '1102',
                  'area' => 'Quirino District (Project 2 and 3)',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                128 => 
                array (
                  'zipcode' => '1102',
                  'area' => 'Silangan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                129 => 
                array (
                  'zipcode' => '1103',
                  'area' => 'Kamuning',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                130 => 
                array (
                  'zipcode' => '1103',
                  'area' => 'Laging Handa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                131 => 
                array (
                  'zipcode' => '1103',
                  'area' => 'Obrero',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                132 => 
                array (
                  'zipcode' => '1103',
                  'area' => 'Paligsahan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                133 => 
                array (
                  'zipcode' => '1103',
                  'area' => 'Roxas District',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                134 => 
                array (
                  'zipcode' => '1103',
                  'area' => 'Sacred Heart',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                135 => 
                array (
                  'zipcode' => '1103',
                  'area' => 'South Triangle',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                136 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'Damayan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                137 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'Mariblo',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                138 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'Nayon Kaunlaran',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                139 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'Paraiso',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                140 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'Phil Am',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                141 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'Santa Cruz',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                142 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'Talayan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                143 => 
                array (
                  'zipcode' => '1104',
                  'area' => 'West Triangle',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                144 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Alicia',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                145 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Bagong Pag Asa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                146 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Bungad',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                147 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Del Monte',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                148 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Katipunan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                149 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Paltok',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                150 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Project 7 (Veterans Village)',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                151 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'R. Magsaysay',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                152 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'San Antonio',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                153 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Santo Cristo',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                154 => 
                array (
                  'zipcode' => '1105',
                  'area' => 'Veterans Village',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                155 => 
                array (
                  'zipcode' => '1106',
                  'area' => 'Apolonio Samson',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                156 => 
                array (
                  'zipcode' => '1106',
                  'area' => 'Baesa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                157 => 
                array (
                  'zipcode' => '1106',
                  'area' => 'Bahay Toro',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                158 => 
                array (
                  'zipcode' => '1106',
                  'area' => 'Balintawak',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                159 => 
                array (
                  'zipcode' => '1106',
                  'area' => 'Balumbato',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                160 => 
                array (
                  'zipcode' => '1106',
                  'area' => 'Project 8',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                161 => 
                array (
                  'zipcode' => '1106',
                  'area' => 'Unang Sigaw',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                162 => 
                array (
                  'zipcode' => '1107',
                  'area' => 'New Era',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                163 => 
                array (
                  'zipcode' => '1107',
                  'area' => 'Pasong Tamo',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                164 => 
                array (
                  'zipcode' => '1108',
                  'area' => 'Loyola Heights',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                165 => 
                array (
                  'zipcode' => '1108',
                  'area' => 'Pansol',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                166 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Bagumbuhay',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                167 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Bayanihan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                168 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Blue Ridge',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                169 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Cubao',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                170 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Dioquino Zobel',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                171 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Escopa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                172 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Mangga',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                173 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Marilag',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                174 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Masagana',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                175 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Milagrosa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                176 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Project 4',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                177 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'San Roque',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                178 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Socorro',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                179 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Tagumpay',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                180 => 
                array (
                  'zipcode' => '1109',
                  'area' => 'Villa Maria Clara',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                181 => 
                array (
                  'zipcode' => '1110',
                  'area' => 'Bagumbayan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                182 => 
                array (
                  'zipcode' => '1110',
                  'area' => 'Camp Aguinaldo',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                183 => 
                array (
                  'zipcode' => '1110',
                  'area' => 'Libis',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                184 => 
                array (
                  'zipcode' => '1110',
                  'area' => 'St. Ignatius',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                185 => 
                array (
                  'zipcode' => '1110',
                  'area' => 'Talampas',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                186 => 
                array (
                  'zipcode' => '1110',
                  'area' => 'Ugong Norte',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                187 => 
                array (
                  'zipcode' => '1110',
                  'area' => 'White Plains',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                188 => 
                array (
                  'zipcode' => '1111',
                  'area' => 'Bagong Lipunan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                189 => 
                array (
                  'zipcode' => '1111',
                  'area' => 'Crame',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                190 => 
                array (
                  'zipcode' => '1111',
                  'area' => 'Immaculate Concepcion',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                191 => 
                array (
                  'zipcode' => '1111',
                  'area' => 'Kaunlaran',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                192 => 
                array (
                  'zipcode' => '1111',
                  'area' => 'Pinagkaisahan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                193 => 
                array (
                  'zipcode' => '1111',
                  'area' => 'St. Martin de Porres',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                194 => 
                array (
                  'zipcode' => '1112',
                  'area' => 'Damayang Lagi',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                195 => 
                array (
                  'zipcode' => '1112',
                  'area' => 'Horseshoe',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                196 => 
                array (
                  'zipcode' => '1112',
                  'area' => 'Kalusugan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                197 => 
                array (
                  'zipcode' => '1112',
                  'area' => 'Kristong Hari',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                198 => 
                array (
                  'zipcode' => '1112',
                  'area' => 'Mariana',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                199 => 
                array (
                  'zipcode' => '1112',
                  'area' => 'Valencia',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                200 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'Don Manuel',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                201 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'Doña Aurora',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                202 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'Doña Imelda',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                203 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'Doña Josefa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                204 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'San Isidro',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                205 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'Santo Niño',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                206 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'Santol',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                207 => 
                array (
                  'zipcode' => '1113',
                  'area' => 'Tatalon',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                208 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'N.S Amoranto (Gintong Silahis)',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                209 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'La Loma',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                210 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'Lourdes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                211 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'Maharlika',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                212 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'Sto. Domingo (Matalahib)',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                213 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'Paang Bundok',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                214 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'Salvacion',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                215 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'San Isidro Labrador',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                216 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'Santa Teresita',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                217 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'Sienna',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                218 => 
                array (
                  'zipcode' => '1114',
                  'area' => 'St. Peter',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                219 => 
                array (
                  'zipcode' => '1115',
                  'area' => 'Balingasa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                220 => 
                array (
                  'zipcode' => '1115',
                  'area' => 'Damar',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                221 => 
                array (
                  'zipcode' => '1115',
                  'area' => 'Manresa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                222 => 
                array (
                  'zipcode' => '1115',
                  'area' => 'Masambong',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                223 => 
                array (
                  'zipcode' => '1115',
                  'area' => 'Pag ibig sa Nayon',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                224 => 
                array (
                  'zipcode' => '1115',
                  'area' => 'San Jose',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                225 => 
                array (
                  'zipcode' => '1116',
                  'area' => 'Bagbag',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                226 => 
                array (
                  'zipcode' => '1116',
                  'area' => 'San Bartolome',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                227 => 
                array (
                  'zipcode' => '1116',
                  'area' => 'Sangandaan (GSIS Village)',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                228 => 
                array (
                  'zipcode' => '1116',
                  'area' => 'Sauyo',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                229 => 
                array (
                  'zipcode' => '1116',
                  'area' => 'Talipapa',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                230 => 
                array (
                  'zipcode' => '1116',
                  'area' => 'Tandang Sora',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                231 => 
                array (
                  'zipcode' => '1117',
                  'area' => 'Capri',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                232 => 
                array (
                  'zipcode' => '1117',
                  'area' => 'Gulod',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                233 => 
                array (
                  'zipcode' => '1117',
                  'area' => 'San Agustin',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                234 => 
                array (
                  'zipcode' => '1117',
                  'area' => 'Santa Lucia',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                235 => 
                array (
                  'zipcode' => '1117',
                  'area' => 'Santa Monica',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                236 => 
                array (
                  'zipcode' => '1118',
                  'area' => 'Fairview',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                237 => 
                array (
                  'zipcode' => '1118',
                  'area' => 'Pasong Putik',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                238 => 
                array (
                  'zipcode' => '1119',
                  'area' => 'Bagong Silangan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                239 => 
                array (
                  'zipcode' => '1119',
                  'area' => 'Matandang Balara',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                240 => 
                array (
                  'zipcode' => '1119',
                  'area' => 'Payatas',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                241 => 
                array (
                  'zipcode' => '1120',
                  'area' => 'BF Homes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                242 => 
                array (
                  'zipcode' => '1120',
                  'area' => 'Violago Homes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                243 => 
                array (
                  'zipcode' => '1121',
                  'area' => 'Commonwealth',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                244 => 
                array (
                  'zipcode' => '1121',
                  'area' => 'Fairview (North)',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                245 => 
                array (
                  'zipcode' => '1122',
                  'area' => 'Fairview (South)',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                246 => 
                array (
                  'zipcode' => '1123',
                  'area' => 'Damong Maliit',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                247 => 
                array (
                  'zipcode' => '1123',
                  'area' => 'Novaliches Proper',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                248 => 
                array (
                  'zipcode' => '1124',
                  'area' => 'Kaligayahan',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                249 => 
                array (
                  'zipcode' => '1125',
                  'area' => 'Doña Faustina Subdivision',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                250 => 
                array (
                  'zipcode' => '1125',
                  'area' => 'Nagkaisang Nayon',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                251 => 
                array (
                  'zipcode' => '1126',
                  'area' => 'Batasan Hills',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                252 => 
                array (
                  'zipcode' => '1126',
                  'area' => 'Capitol Hills/Park',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                253 => 
                array (
                  'zipcode' => '1127',
                  'area' => 'Holy Spirit',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                254 => 
                array (
                  'zipcode' => '1128',
                  'area' => 'Culiat',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                255 => 
                array (
                  'zipcode' => '1128',
                  'area' => 'Vasra',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                256 => 
                array (
                  'zipcode' => '1135',
                  'area' => 'Araneta Center P.O. Boxes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                257 => 
                array (
                  'zipcode' => '1138',
                  'area' => 'Murphy District P.O. Boxes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                258 => 
                array (
                  'zipcode' => '1141',
                  'area' => 'Broadway Center P.O. Boxes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                259 => 
                array (
                  'zipcode' => '1144',
                  'area' => 'University of the Philippines P.O. Boxes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                260 => 
                array (
                  'zipcode' => '1147',
                  'area' => 'Novaliches P.O. Boxes',
                  'province' => 'Quezon City',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                261 => 
                array (
                  'zipcode' => '1200',
                  'area' => 'Makati Central Post Office',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                262 => 
                array (
                  'zipcode' => '1201',
                  'area' => 'Fort Bonifacio',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                263 => 
                array (
                  'zipcode' => '1202',
                  'area' => 'Fort Bonifacio Naval Station',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                264 => 
                array (
                  'zipcode' => '1203',
                  'area' => 'San Antonio Village',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                265 => 
                array (
                  'zipcode' => '1204',
                  'area' => 'La Paz, Singkamas, and Tejeros',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                266 => 
                array (
                  'zipcode' => '1205',
                  'area' => 'Santa Cruz',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                267 => 
                array (
                  'zipcode' => '1206',
                  'area' => 'Kasilawan',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                268 => 
                array (
                  'zipcode' => '1207',
                  'area' => 'Carmona Olympia',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                269 => 
                array (
                  'zipcode' => '1208',
                  'area' => 'Valenzuela',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                270 => 
                array (
                  'zipcode' => '1209',
                  'area' => 'Bel Air',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                271 => 
                array (
                  'zipcode' => '1210',
                  'area' => 'Poblacion',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                272 => 
                array (
                  'zipcode' => '1211',
                  'area' => 'Guadalupe Viejo',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                273 => 
                array (
                  'zipcode' => '1212',
                  'area' => 'Guadalupe Nuevo',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                274 => 
                array (
                  'zipcode' => '1213',
                  'area' => 'Pinagkaisahan Pitogo',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                275 => 
                array (
                  'zipcode' => '1214',
                  'area' => 'Cembo and South Cembo',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                276 => 
                array (
                  'zipcode' => '1215',
                  'area' => 'West Rembo',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                277 => 
                array (
                  'zipcode' => '1216',
                  'area' => 'East Rembo Malapad na Bato',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                278 => 
                array (
                  'zipcode' => '1217',
                  'area' => 'Comembo',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                279 => 
                array (
                  'zipcode' => '1218',
                  'area' => 'Pembo',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                280 => 
                array (
                  'zipcode' => '1219',
                  'area' => 'Forbes Park North',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                281 => 
                array (
                  'zipcode' => '1220',
                  'area' => 'Forbes Park South',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                282 => 
                array (
                  'zipcode' => '1221',
                  'area' => 'Dasmariñas Village North',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                283 => 
                array (
                  'zipcode' => '1222',
                  'area' => 'Dasmariñas Village South',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                284 => 
                array (
                  'zipcode' => '1223',
                  'area' => 'San Lorenzo Village',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                285 => 
                array (
                  'zipcode' => '1224',
                  'area' => 'Makati Commercial Center (Ayala Center)',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                286 => 
                array (
                  'zipcode' => '1225',
                  'area' => 'Urdaneta Village',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                287 => 
                array (
                  'zipcode' => '1226',
                  'area' => 'Ayala Avenue Paseo de Roxas',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                288 => 
                array (
                  'zipcode' => '1227',
                  'area' => 'Salcedo Village',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                289 => 
                array (
                  'zipcode' => '1228',
                  'area' => 'Greenbelt',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                290 => 
                array (
                  'zipcode' => '1229',
                  'area' => 'Legaspi Village',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                291 => 
                array (
                  'zipcode' => '1230',
                  'area' => 'Pio del Pilar',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                292 => 
                array (
                  'zipcode' => '1231',
                  'area' => 'Chino Roces',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                293 => 
                array (
                  'zipcode' => '1231',
                  'area' => 'Pasong Tamo Ecology Village',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                294 => 
                array (
                  'zipcode' => '1232',
                  'area' => 'Magallanes Village',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                295 => 
                array (
                  'zipcode' => '1233',
                  'area' => 'Bangkal',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                296 => 
                array (
                  'zipcode' => '1234',
                  'area' => 'San Isidro',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                297 => 
                array (
                  'zipcode' => '1235',
                  'area' => 'Palanan',
                  'province' => 'Makati',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                298 => 
                array (
                  'zipcode' => '1300',
                  'area' => 'Pasay City Central Post Office',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                299 => 
                array (
                  'zipcode' => '1301',
                  'area' => 'Domestic Airport P.O.',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                300 => 
                array (
                  'zipcode' => '1302',
                  'area' => 'San Rafael',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                301 => 
                array (
                  'zipcode' => '1303',
                  'area' => 'San Roque',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                302 => 
                array (
                  'zipcode' => '1304',
                  'area' => 'Santa Clara',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                303 => 
                array (
                  'zipcode' => '1305',
                  'area' => 'San Jose',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                304 => 
                array (
                  'zipcode' => '1306',
                  'area' => 'San Isidro',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                305 => 
                array (
                  'zipcode' => '1307',
                  'area' => 'Philippine International Convention Center',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                306 => 
                array (
                  'zipcode' => '1308',
                  'area' => 'Bay City',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                307 => 
                array (
                  'zipcode' => '1309',
                  'area' => 'Villamor Airbase',
                  'province' => 'Pasay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                308 => 
                array (
                  'zipcode' => '1400',
                  'area' => 'Caloocan Central Post Office',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                309 => 
                array (
                  'zipcode' => '1401',
                  'area' => 'Baesa',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                310 => 
                array (
                  'zipcode' => '1402',
                  'area' => 'Santa Quiteria',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                311 => 
                array (
                  'zipcode' => '1403',
                  'area' => 'Grace Park East',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                312 => 
                array (
                  'zipcode' => '1404',
                  'area' => 'San Jose',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                313 => 
                array (
                  'zipcode' => '1405',
                  'area' => 'First Avenue Seventh Avenue West',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                314 => 
                array (
                  'zipcode' => '1406',
                  'area' => 'Grace Park West',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                315 => 
                array (
                  'zipcode' => '1407',
                  'area' => 'University Hills',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                316 => 
                array (
                  'zipcode' => '1408',
                  'area' => 'Sangandaan',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                317 => 
                array (
                  'zipcode' => '1409',
                  'area' => 'Kaunlaran Village',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                318 => 
                array (
                  'zipcode' => '1409',
                  'area' => 'Kaunlaran Village',
                  'province' => 'Navotas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                319 => 
                array (
                  'zipcode' => '1410',
                  'area' => 'Maypajo',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                320 => 
                array (
                  'zipcode' => '1411',
                  'area' => 'Fish Market',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                321 => 
                array (
                  'zipcode' => '1411',
                  'area' => 'Fish Market',
                  'province' => 'Navotas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                322 => 
                array (
                  'zipcode' => '1412',
                  'area' => 'Isla de Cocomo',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                323 => 
                array (
                  'zipcode' => '1412',
                  'area' => 'Isla de Cocomo',
                  'province' => 'Navotas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                324 => 
                array (
                  'zipcode' => '1413',
                  'area' => 'Kapitbahayan',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                325 => 
                array (
                  'zipcode' => '1413',
                  'area' => 'Kapitbahayan (East)',
                  'province' => 'Navotas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                326 => 
                array (
                  'zipcode' => '1420',
                  'area' => 'Laguna',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                327 => 
                array (
                  'zipcode' => '1421',
                  'area' => 'Bagumbong Villa Crystal',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                328 => 
                array (
                  'zipcode' => '1422',
                  'area' => 'Novaliches',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                329 => 
                array (
                  'zipcode' => '1423',
                  'area' => 'Lilles Ville Subdivision',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                330 => 
                array (
                  'zipcode' => '1424',
                  'area' => 'Capitol Parkland Subdivision',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                331 => 
                array (
                  'zipcode' => '1425',
                  'area' => 'Amparo Subdivision and Dela Costa Homes II Subdivision',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                332 => 
                array (
                  'zipcode' => '1426',
                  'area' => 'Bankers Village',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                333 => 
                array (
                  'zipcode' => '1427',
                  'area' => 'Tala Leprosarium Victory Heights',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                334 => 
                array (
                  'zipcode' => '1428',
                  'area' => 'Bagong Silang',
                  'province' => 'Caloocan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                335 => 
                array (
                  'zipcode' => '1440',
                  'area' => 'Valenzuela Central Post Office',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                336 => 
                array (
                  'zipcode' => '1441',
                  'area' => 'Karuhatan Parada',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                337 => 
                array (
                  'zipcode' => '1442',
                  'area' => 'Fortune Village',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                338 => 
                array (
                  'zipcode' => '1442',
                  'area' => 'General T. de Leon',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                339 => 
                array (
                  'zipcode' => '1442',
                  'area' => 'Paso de Blas',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                340 => 
                array (
                  'zipcode' => '1443',
                  'area' => 'Dalandanan West Canumay',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                341 => 
                array (
                  'zipcode' => '1444',
                  'area' => 'Arkong Bato',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                342 => 
                array (
                  'zipcode' => '1444',
                  'area' => 'Mabolo',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                343 => 
                array (
                  'zipcode' => '1444',
                  'area' => 'Malanday',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                344 => 
                array (
                  'zipcode' => '1444',
                  'area' => 'Pasolo',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                345 => 
                array (
                  'zipcode' => '1444',
                  'area' => 'Polo',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                346 => 
                array (
                  'zipcode' => '1444',
                  'area' => 'Rincon',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                347 => 
                array (
                  'zipcode' => '1445',
                  'area' => 'Balangkas Coloong',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                348 => 
                array (
                  'zipcode' => '1446',
                  'area' => 'Lingunan',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                349 => 
                array (
                  'zipcode' => '1447',
                  'area' => 'East Canumay Lawang Bato Punturin',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                350 => 
                array (
                  'zipcode' => '1448',
                  'area' => 'Mapulang Lupa',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                351 => 
                array (
                  'zipcode' => '1470',
                  'area' => 'Malabon',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                352 => 
                array (
                  'zipcode' => '1470',
                  'area' => 'Tinajeros',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                353 => 
                array (
                  'zipcode' => '1471',
                  'area' => 'Catmon',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                354 => 
                array (
                  'zipcode' => '1472',
                  'area' => 'Longos',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                355 => 
                array (
                  'zipcode' => '1473',
                  'area' => 'Tonsuya',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                356 => 
                array (
                  'zipcode' => '1474',
                  'area' => 'Acacia',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                357 => 
                array (
                  'zipcode' => '1475',
                  'area' => 'Potrero',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                358 => 
                array (
                  'zipcode' => '1476',
                  'area' => 'Araneta Subdivision',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                359 => 
                array (
                  'zipcode' => '1477',
                  'area' => 'Maysilo',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                360 => 
                array (
                  'zipcode' => '1478',
                  'area' => 'Santolan',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                361 => 
                array (
                  'zipcode' => '1479',
                  'area' => 'Muzon',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                362 => 
                array (
                  'zipcode' => '1480',
                  'area' => 'Dampalit',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                363 => 
                array (
                  'zipcode' => '1480',
                  'area' => 'UFO',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                364 => 
                array (
                  'zipcode' => '1481',
                  'area' => 'NCR',
                  'province' => 'Malabon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                365 => 
                array (
                  'zipcode' => '1485',
                  'area' => 'Navotas',
                  'province' => 'Navotas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                366 => 
                array (
                  'zipcode' => '1489',
                  'area' => 'Tangos',
                  'province' => 'Navotas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                367 => 
                array (
                  'zipcode' => '1490',
                  'area' => 'Tanza',
                  'province' => 'Navotas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                368 => 
                array (
                  'zipcode' => '1496',
                  'area' => 'Valenzuela P.O. Boxes',
                  'province' => 'Valenzuela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                369 => 
                array (
                  'zipcode' => '1500',
                  'area' => 'San Juan Central Post Office',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                370 => 
                array (
                  'zipcode' => '1502',
                  'area' => 'Greenhills Post Office',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                371 => 
                array (
                  'zipcode' => '1503',
                  'area' => 'Greenhills (North)',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                372 => 
                array (
                  'zipcode' => '1504',
                  'area' => 'Eisenhower Crame',
                  'province' => 'San Juan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                373 => 
                array (
                  'zipcode' => '1550',
                  'area' => 'Mandaluyong Central Post Office',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                374 => 
                array (
                  'zipcode' => '1550',
                  'area' => 'Barangay Plainview',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                375 => 
                array (
                  'zipcode' => '1551',
                  'area' => 'Vergara',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                376 => 
                array (
                  'zipcode' => '1552',
                  'area' => 'Shaw Boulevard',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                377 => 
                array (
                  'zipcode' => '1553',
                  'area' => 'National Center for Mental Health',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                378 => 
                array (
                  'zipcode' => '1554',
                  'area' => 'EDSA',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                379 => 
                array (
                  'zipcode' => '1555',
                  'area' => 'Wack Wack',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                380 => 
                array (
                  'zipcode' => '1556',
                  'area' => 'Greenhills South',
                  'province' => 'Mandaluyong',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                381 => 
                array (
                  'zipcode' => '1600',
                  'area' => 'Pasig Central Post Office',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                382 => 
                array (
                  'zipcode' => '1601',
                  'area' => 'San Joaquin',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                383 => 
                array (
                  'zipcode' => '1602',
                  'area' => 'Pinagbuhatan',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                384 => 
                array (
                  'zipcode' => '1603',
                  'area' => 'Kapitolyo',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                385 => 
                array (
                  'zipcode' => '1604',
                  'area' => 'Ugong',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                386 => 
                array (
                  'zipcode' => '1605',
                  'area' => 'Ortigas Post Office',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                387 => 
                array (
                  'zipcode' => '1606',
                  'area' => 'Caniogan',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                388 => 
                array (
                  'zipcode' => '1607',
                  'area' => 'Maybunga',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                389 => 
                array (
                  'zipcode' => '1608',
                  'area' => 'Santa Lucia',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                390 => 
                array (
                  'zipcode' => '1609',
                  'area' => 'Rosario',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                391 => 
                array (
                  'zipcode' => '1610',
                  'area' => 'Santolan',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                392 => 
                array (
                  'zipcode' => '1611',
                  'area' => 'Manggahan',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                393 => 
                array (
                  'zipcode' => '1612',
                  'area' => 'Green Park',
                  'province' => 'Pasig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                394 => 
                array (
                  'zipcode' => '1620',
                  'area' => 'Aguhos',
                  'province' => 'Pateros',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                395 => 
                array (
                  'zipcode' => '1620',
                  'area' => 'Magtanggol',
                  'province' => 'Pateros',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                396 => 
                array (
                  'zipcode' => '1621',
                  'area' => 'Santa Ana',
                  'province' => 'Pateros',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                397 => 
                array (
                  'zipcode' => '1622',
                  'area' => 'San Roque',
                  'province' => 'Pateros',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                398 => 
                array (
                  'zipcode' => '1623',
                  'area' => 'San Pedro',
                  'province' => 'Pateros',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                399 => 
                array (
                  'zipcode' => '1630',
                  'area' => 'Bagumbayan Pinagsama',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                400 => 
                array (
                  'zipcode' => '1630',
                  'area' => 'Western Bicutan',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                401 => 
                array (
                  'zipcode' => '1630',
                  'area' => 'Palingon',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                402 => 
                array (
                  'zipcode' => '1631',
                  'area' => 'Bicutan',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                403 => 
                array (
                  'zipcode' => '1632',
                  'area' => 'Lower Bicutan Ususan',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                404 => 
                array (
                  'zipcode' => '1633',
                  'area' => 'Upper Bicutan',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                405 => 
                array (
                  'zipcode' => '1634',
                  'area' => 'Nichols McKinley (Bonifacio Global City)',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                406 => 
                array (
                  'zipcode' => '1634',
                  'area' => 'Tilapya',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                407 => 
                array (
                  'zipcode' => '1635',
                  'area' => 'Ususan and Palar Village',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                408 => 
                array (
                  'zipcode' => '1636',
                  'area' => 'Bay Breeze Executive Village',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                409 => 
                array (
                  'zipcode' => '1637',
                  'area' => 'Ibayo Tipas',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                410 => 
                array (
                  'zipcode' => '1638',
                  'area' => 'Ligid',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                411 => 
                array (
                  'zipcode' => '1638',
                  'area' => 'Tuktukan',
                  'province' => 'Taguig',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                412 => 
                array (
                  'zipcode' => '1700',
                  'area' => 'Don Galo',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                413 => 
                array (
                  'zipcode' => '1700',
                  'area' => 'Mon El Subdivision',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                414 => 
                array (
                  'zipcode' => '1700',
                  'area' => 'Parañaque CPO',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                415 => 
                array (
                  'zipcode' => '1701',
                  'area' => 'Tambo',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                416 => 
                array (
                  'zipcode' => '1702',
                  'area' => 'Baclaran',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                417 => 
                array (
                  'zipcode' => '1703',
                  'area' => 'Marina Subdivision',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                418 => 
                array (
                  'zipcode' => '1704',
                  'area' => 'Santo Niño',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                419 => 
                array (
                  'zipcode' => '1705',
                  'area' => 'Ninoy Aquino International Airport',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                420 => 
                array (
                  'zipcode' => '1706',
                  'area' => 'Pulo',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                421 => 
                array (
                  'zipcode' => '1707',
                  'area' => 'San Antonio Valley 11 and 12',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                422 => 
                array (
                  'zipcode' => '1708',
                  'area' => 'Multinational Village',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                423 => 
                array (
                  'zipcode' => '1709',
                  'area' => 'South Admiral Village, Merville Park, and Moonwalk',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                424 => 
                array (
                  'zipcode' => '1710',
                  'area' => 'Executive Heights Subdivision',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                425 => 
                array (
                  'zipcode' => '1711',
                  'area' => 'Better Living Subdivision',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                426 => 
                array (
                  'zipcode' => '1712',
                  'area' => 'Miramar Subdivision',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                427 => 
                array (
                  'zipcode' => '1713',
                  'area' => 'United Parañaque Subdivision',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                428 => 
                array (
                  'zipcode' => '1714',
                  'area' => 'Ireneville Subdivision II',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                429 => 
                array (
                  'zipcode' => '1715',
                  'area' => 'San Antonio Valley 1',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                430 => 
                array (
                  'zipcode' => '1716',
                  'area' => 'Maywood Village II',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                431 => 
                array (
                  'zipcode' => '1717',
                  'area' => 'Manila Memorial Park',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                432 => 
                array (
                  'zipcode' => '1718',
                  'area' => 'BF Homes 2',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                433 => 
                array (
                  'zipcode' => '1719',
                  'area' => 'Ireneville Subdivision I & III',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                434 => 
                array (
                  'zipcode' => '1719',
                  'area' => 'Maywood Village I',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                435 => 
                array (
                  'zipcode' => '1720',
                  'area' => 'BF Homes 1',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                436 => 
                array (
                  'zipcode' => '1740',
                  'area' => 'Las Piñas Central Post Office',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                437 => 
                array (
                  'zipcode' => '1741',
                  'area' => 'Remarville Subdivision',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                438 => 
                array (
                  'zipcode' => '1742',
                  'area' => 'Pulang Lupa Zapote',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                439 => 
                array (
                  'zipcode' => '1743',
                  'area' => 'Cut cut',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                440 => 
                array (
                  'zipcode' => '1744',
                  'area' => 'Manuyo',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                441 => 
                array (
                  'zipcode' => '1745',
                  'area' => 'Gatchalian Subdivision',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                442 => 
                array (
                  'zipcode' => '1746',
                  'area' => 'Verdant Acres Subdivision',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                443 => 
                array (
                  'zipcode' => '1747',
                  'area' => 'Moonwalk Subdivision Talon',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                444 => 
                array (
                  'zipcode' => '1748',
                  'area' => 'Manila Doctors Village',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                445 => 
                array (
                  'zipcode' => '1749',
                  'area' => 'Angela Village',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                446 => 
                array (
                  'zipcode' => '1750',
                  'area' => 'Almanza',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                447 => 
                array (
                  'zipcode' => '1751',
                  'area' => 'T.S. Cruz Subdivision',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                448 => 
                array (
                  'zipcode' => '1752',
                  'area' => 'Soldiers Hills Subdivision',
                  'province' => 'Las Piñas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                449 => 
                array (
                  'zipcode' => '1770',
                  'area' => 'Muntinlupa Central Post Office',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                450 => 
                array (
                  'zipcode' => '1770',
                  'area' => 'Sucat',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                451 => 
                array (
                  'zipcode' => '1771',
                  'area' => 'Buli and Cupang',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                452 => 
                array (
                  'zipcode' => '1772',
                  'area' => 'Bayanan and Putatan',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                453 => 
                array (
                  'zipcode' => '1773',
                  'area' => 'Tunasan',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                454 => 
                array (
                  'zipcode' => '1776',
                  'area' => 'Poblacion',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                455 => 
                array (
                  'zipcode' => '1778',
                  'area' => 'Aeropark Subdivision',
                  'province' => 'Parañaque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                456 => 
                array (
                  'zipcode' => '1780',
                  'area' => 'Ayala Alabang',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                457 => 
                array (
                  'zipcode' => '1781',
                  'area' => 'Filinvest City',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                458 => 
                array (
                  'zipcode' => '1799',
                  'area' => 'Alabang',
                  'province' => 'Muntinlupa',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                459 => 
                array (
                  'zipcode' => '1800',
                  'area' => 'Marikina Central Post Office',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                460 => 
                array (
                  'zipcode' => '1801',
                  'area' => 'San Roque Calumpang',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                461 => 
                array (
                  'zipcode' => '1802',
                  'area' => 'Industrial Valley',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                462 => 
                array (
                  'zipcode' => '1803',
                  'area' => 'Barangka and Tañong',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                463 => 
                array (
                  'zipcode' => '1804',
                  'area' => 'J. De La Peña (Provident Villages)',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                464 => 
                array (
                  'zipcode' => '1805',
                  'area' => 'Malanday',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                465 => 
                array (
                  'zipcode' => '1806',
                  'area' => 'Northern and Western Marikina River',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                466 => 
                array (
                  'zipcode' => '1807',
                  'area' => 'Concepcion 1',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                467 => 
                array (
                  'zipcode' => '1808',
                  'area' => 'Nangka',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                468 => 
                array (
                  'zipcode' => '1809',
                  'area' => 'Parang',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                469 => 
                array (
                  'zipcode' => '1810',
                  'area' => 'Marikina Heights',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                470 => 
                array (
                  'zipcode' => '1811',
                  'area' => 'Concepcion 2 (SSS Village)',
                  'province' => 'Marikina',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                471 => 
                array (
                  'zipcode' => '1820',
                  'area' => 'Bagong Nayon, Cupang, Mambagat, and Mayamot',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                472 => 
                array (
                  'zipcode' => '1850',
                  'area' => 'San Mateo',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                473 => 
                array (
                  'zipcode' => '1860',
                  'area' => 'Rodriguez',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                474 => 
                array (
                  'zipcode' => '1870',
                  'area' => 'Antipolo',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                475 => 
                array (
                  'zipcode' => '1880',
                  'area' => 'Teresa',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                476 => 
                array (
                  'zipcode' => '1900',
                  'area' => 'Cainta',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                477 => 
                array (
                  'zipcode' => '1910',
                  'area' => 'Pililla',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                478 => 
                array (
                  'zipcode' => '1920',
                  'area' => 'Taytay',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                479 => 
                array (
                  'zipcode' => '1930',
                  'area' => 'Angono',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                480 => 
                array (
                  'zipcode' => '1940',
                  'area' => 'Binangonan',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                481 => 
                array (
                  'zipcode' => '1950',
                  'area' => 'Cardona',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                482 => 
                array (
                  'zipcode' => '1960',
                  'area' => 'Morong',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                483 => 
                array (
                  'zipcode' => '1970',
                  'area' => 'Baras',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                484 => 
                array (
                  'zipcode' => '1980',
                  'area' => 'Tanay',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                485 => 
                array (
                  'zipcode' => '1990',
                  'area' => 'Jalajala',
                  'province' => 'Rizal',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                486 => 
                array (
                  'zipcode' => '2000',
                  'area' => 'San Fernando',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                487 => 
                array (
                  'zipcode' => '2001',
                  'area' => 'Bacolor',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                488 => 
                array (
                  'zipcode' => '2002',
                  'area' => 'Santa Rita',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                489 => 
                array (
                  'zipcode' => '2003',
                  'area' => 'Guagua',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                490 => 
                array (
                  'zipcode' => '2004',
                  'area' => 'Sasmuan',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                491 => 
                array (
                  'zipcode' => '2005',
                  'area' => 'Lubao',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                492 => 
                array (
                  'zipcode' => '2006',
                  'area' => 'Floridablanca',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                493 => 
                array (
                  'zipcode' => '2007',
                  'area' => 'Basa Airbase',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                494 => 
                array (
                  'zipcode' => '2008',
                  'area' => 'Porac',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                495 => 
                array (
                  'zipcode' => '2009',
                  'area' => 'Angeles',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                496 => 
                array (
                  'zipcode' => '2010',
                  'area' => 'Mabalacat',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                497 => 
                array (
                  'zipcode' => '2011',
                  'area' => 'Magalang',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                498 => 
                array (
                  'zipcode' => '2012',
                  'area' => 'Arayat',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                499 => 
                array (
                  'zipcode' => '2013',
                  'area' => 'Candaba',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                500 => 
                array (
                  'zipcode' => '2014',
                  'area' => 'San Luis',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                501 => 
                array (
                  'zipcode' => '2015',
                  'area' => 'San Simon',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                502 => 
                array (
                  'zipcode' => '2016',
                  'area' => 'Apalit',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                503 => 
                array (
                  'zipcode' => '2017',
                  'area' => 'Masantol',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                504 => 
                array (
                  'zipcode' => '2018',
                  'area' => 'Macabebe',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                505 => 
                array (
                  'zipcode' => '2019',
                  'area' => 'Minalin',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                506 => 
                array (
                  'zipcode' => '2020',
                  'area' => 'Santo Tomas',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                507 => 
                array (
                  'zipcode' => '2021',
                  'area' => 'Mexico',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                508 => 
                array (
                  'zipcode' => '2022',
                  'area' => 'Santa Ana',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                509 => 
                array (
                  'zipcode' => '2023',
                  'area' => 'Clark Freeport Zone',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                510 => 
                array (
                  'zipcode' => '2024',
                  'area' => 'Balibago, Angeles',
                  'province' => 'Pampanga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                511 => 
                array (
                  'zipcode' => '2100',
                  'area' => 'Balanga',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                512 => 
                array (
                  'zipcode' => '2101',
                  'area' => 'Pilar',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                513 => 
                array (
                  'zipcode' => '2102',
                  'area' => 'Orion',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                514 => 
                array (
                  'zipcode' => '2103',
                  'area' => 'Limay',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                515 => 
                array (
                  'zipcode' => '2104',
                  'area' => 'Lamao',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                516 => 
                array (
                  'zipcode' => '2105',
                  'area' => 'Mariveles',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                517 => 
                array (
                  'zipcode' => '2105',
                  'area' => 'Bataan Export Processing Zone, Mariveles',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                518 => 
                array (
                  'zipcode' => '2107',
                  'area' => 'Bagac',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                519 => 
                array (
                  'zipcode' => '2108',
                  'area' => 'Morong',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                520 => 
                array (
                  'zipcode' => '2109',
                  'area' => 'Refugee Processing Center, Morong',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                521 => 
                array (
                  'zipcode' => '2110',
                  'area' => 'Dinalupihan',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                522 => 
                array (
                  'zipcode' => '2111',
                  'area' => 'Hermosa',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                523 => 
                array (
                  'zipcode' => '2112',
                  'area' => 'Orani',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                524 => 
                array (
                  'zipcode' => '2113',
                  'area' => 'Samal',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                525 => 
                array (
                  'zipcode' => '2114',
                  'area' => 'Abucay',
                  'province' => 'Bataan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                526 => 
                array (
                  'zipcode' => '2200',
                  'area' => 'Olongapo',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                527 => 
                array (
                  'zipcode' => '2201',
                  'area' => 'Iba',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                528 => 
                array (
                  'zipcode' => '2202',
                  'area' => 'Botolan',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                529 => 
                array (
                  'zipcode' => '2203',
                  'area' => 'Cabangan',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                530 => 
                array (
                  'zipcode' => '2204',
                  'area' => 'San Felipe',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                531 => 
                array (
                  'zipcode' => '2205',
                  'area' => 'San Narciso',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                532 => 
                array (
                  'zipcode' => '2206',
                  'area' => 'San Antonio',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                533 => 
                array (
                  'zipcode' => '2207',
                  'area' => 'San Marcelino',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                534 => 
                array (
                  'zipcode' => '2208',
                  'area' => 'Castillejos',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                535 => 
                array (
                  'zipcode' => '2209',
                  'area' => 'Subic',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                536 => 
                array (
                  'zipcode' => '2210',
                  'area' => 'Palauig and Scarborough Shoal',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                537 => 
                array (
                  'zipcode' => '2211',
                  'area' => 'Masinloc',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                538 => 
                array (
                  'zipcode' => '2212',
                  'area' => 'Candelaria',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                539 => 
                array (
                  'zipcode' => '2213',
                  'area' => 'Santa Cruz',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                540 => 
                array (
                  'zipcode' => '2222',
                  'area' => 'Subic Bay Freeport Zone',
                  'province' => 'Zambales',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                541 => 
                array (
                  'zipcode' => '2300',
                  'area' => 'Tarlac City',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                542 => 
                array (
                  'zipcode' => '2301',
                  'area' => 'San Miguel, Tarlac City',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                543 => 
                array (
                  'zipcode' => '2302',
                  'area' => 'Gerona',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                544 => 
                array (
                  'zipcode' => '2303',
                  'area' => 'Santa Ignacia',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                545 => 
                array (
                  'zipcode' => '2304',
                  'area' => 'Mayantoc',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                546 => 
                array (
                  'zipcode' => '2305',
                  'area' => 'San Clemente',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                547 => 
                array (
                  'zipcode' => '2306',
                  'area' => 'Camiling',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                548 => 
                array (
                  'zipcode' => '2307',
                  'area' => 'Paniqui',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                549 => 
                array (
                  'zipcode' => '2308',
                  'area' => 'Moncada',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                550 => 
                array (
                  'zipcode' => '2309',
                  'area' => 'San Manuel',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                551 => 
                array (
                  'zipcode' => '2310',
                  'area' => 'Anao',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                552 => 
                array (
                  'zipcode' => '2311',
                  'area' => 'Ramos',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                553 => 
                array (
                  'zipcode' => '2312',
                  'area' => 'Pura',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                554 => 
                array (
                  'zipcode' => '2313',
                  'area' => 'Victoria',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                555 => 
                array (
                  'zipcode' => '2314',
                  'area' => 'La Paz',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                556 => 
                array (
                  'zipcode' => '2315',
                  'area' => 'Capas',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                557 => 
                array (
                  'zipcode' => '2316',
                  'area' => 'Concepcion',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                558 => 
                array (
                  'zipcode' => '2317',
                  'area' => 'Bamban',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                559 => 
                array (
                  'zipcode' => '2318',
                  'area' => 'San Jose',
                  'province' => 'Tarlac',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                560 => 
                array (
                  'zipcode' => '2400',
                  'area' => 'Dagupan',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                561 => 
                array (
                  'zipcode' => '2401',
                  'area' => 'Lingayen',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                562 => 
                array (
                  'zipcode' => '2402',
                  'area' => 'Labrador',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                563 => 
                array (
                  'zipcode' => '2403',
                  'area' => 'Sual',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                564 => 
                array (
                  'zipcode' => '2404',
                  'area' => 'Alaminos',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                565 => 
                array (
                  'zipcode' => '2405',
                  'area' => 'Anda',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                566 => 
                array (
                  'zipcode' => '2406',
                  'area' => 'Bolinao',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                567 => 
                array (
                  'zipcode' => '2407',
                  'area' => 'Bani',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                568 => 
                array (
                  'zipcode' => '2408',
                  'area' => 'Agno',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                569 => 
                array (
                  'zipcode' => '2409',
                  'area' => 'Mabini',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                570 => 
                array (
                  'zipcode' => '2410',
                  'area' => 'Burgos',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                571 => 
                array (
                  'zipcode' => '2411',
                  'area' => 'Dasol',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                572 => 
                array (
                  'zipcode' => '2412',
                  'area' => 'Infanta',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                573 => 
                array (
                  'zipcode' => '2413',
                  'area' => 'Mangatarem',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                574 => 
                array (
                  'zipcode' => '2414',
                  'area' => 'Urbiztondo',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                575 => 
                array (
                  'zipcode' => '2415',
                  'area' => 'Aguilar',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                576 => 
                array (
                  'zipcode' => '2416',
                  'area' => 'Bugallon',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                577 => 
                array (
                  'zipcode' => '2417',
                  'area' => 'Binmaley',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                578 => 
                array (
                  'zipcode' => '2418',
                  'area' => 'Calasiao',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                579 => 
                array (
                  'zipcode' => '2419',
                  'area' => 'Santa Barbara',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                580 => 
                array (
                  'zipcode' => '2420',
                  'area' => 'San Carlos',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                581 => 
                array (
                  'zipcode' => '2421',
                  'area' => 'Malasiqui',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                582 => 
                array (
                  'zipcode' => '2422',
                  'area' => 'Basista',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                583 => 
                array (
                  'zipcode' => '2423',
                  'area' => 'Bayambang',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                584 => 
                array (
                  'zipcode' => '2424',
                  'area' => 'Bautista',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                585 => 
                array (
                  'zipcode' => '2425',
                  'area' => 'Alcala',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                586 => 
                array (
                  'zipcode' => '2426',
                  'area' => 'Santo Tomas',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                587 => 
                array (
                  'zipcode' => '2427',
                  'area' => 'Villasis',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                588 => 
                array (
                  'zipcode' => '2428',
                  'area' => 'Urdaneta',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                589 => 
                array (
                  'zipcode' => '2429',
                  'area' => 'Mapandan',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                590 => 
                array (
                  'zipcode' => '2430',
                  'area' => 'Manaoag',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                591 => 
                array (
                  'zipcode' => '2431',
                  'area' => 'San Jacinto',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                592 => 
                array (
                  'zipcode' => '2432',
                  'area' => 'Mangaldan',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                593 => 
                array (
                  'zipcode' => '2433',
                  'area' => 'San Fabian',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                594 => 
                array (
                  'zipcode' => '2434',
                  'area' => 'Sison',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                595 => 
                array (
                  'zipcode' => '2435',
                  'area' => 'Pozorrubio',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                596 => 
                array (
                  'zipcode' => '2436',
                  'area' => 'Binalonan',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                597 => 
                array (
                  'zipcode' => '2437',
                  'area' => 'Laoac',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                598 => 
                array (
                  'zipcode' => '2438',
                  'area' => 'San Manuel',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                599 => 
                array (
                  'zipcode' => '2439',
                  'area' => 'Asingan',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                600 => 
                array (
                  'zipcode' => '2440',
                  'area' => 'Santa Maria',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                601 => 
                array (
                  'zipcode' => '2441',
                  'area' => 'Rosales',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                602 => 
                array (
                  'zipcode' => '2424',
                  'area' => 'Balungao',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                603 => 
                array (
                  'zipcode' => '2443',
                  'area' => 'Umingan',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                604 => 
                array (
                  'zipcode' => '2444',
                  'area' => 'San Quintin',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                605 => 
                array (
                  'zipcode' => '2445',
                  'area' => 'Tayug',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                606 => 
                array (
                  'zipcode' => '2446',
                  'area' => 'Natividad',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                607 => 
                array (
                  'zipcode' => '2447',
                  'area' => 'San Nicolas',
                  'province' => 'Pangasinan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                608 => 
                array (
                  'zipcode' => '2500',
                  'area' => 'San Fernando',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                609 => 
                array (
                  'zipcode' => '2501',
                  'area' => 'Bauang',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                610 => 
                array (
                  'zipcode' => '2502',
                  'area' => 'Caba',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                611 => 
                array (
                  'zipcode' => '2503',
                  'area' => 'Aringay',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                612 => 
                array (
                  'zipcode' => '2504',
                  'area' => 'Agoo',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                613 => 
                array (
                  'zipcode' => '2505',
                  'area' => 'Santo Tomas',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                614 => 
                array (
                  'zipcode' => '2506',
                  'area' => 'Rosario',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                615 => 
                array (
                  'zipcode' => '2508',
                  'area' => 'Pugo',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                616 => 
                array (
                  'zipcode' => '2509',
                  'area' => 'Tubao',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                617 => 
                array (
                  'zipcode' => '2510',
                  'area' => 'Burgos',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                618 => 
                array (
                  'zipcode' => '2511',
                  'area' => 'Naguilian',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                619 => 
                array (
                  'zipcode' => '2512',
                  'area' => 'Bagulin',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                620 => 
                array (
                  'zipcode' => '2513',
                  'area' => 'San Gabriel',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                621 => 
                array (
                  'zipcode' => '2514',
                  'area' => 'San Juan',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                622 => 
                array (
                  'zipcode' => '2515',
                  'area' => 'Bacnotan',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                623 => 
                array (
                  'zipcode' => '2516',
                  'area' => 'Santol',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                624 => 
                array (
                  'zipcode' => '2517',
                  'area' => 'Balaoan',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                625 => 
                array (
                  'zipcode' => '2518',
                  'area' => 'Luna',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                626 => 
                array (
                  'zipcode' => '2519',
                  'area' => 'Bangar',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                627 => 
                array (
                  'zipcode' => '2520',
                  'area' => 'Sudipen',
                  'province' => 'La Union',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                628 => 
                array (
                  'zipcode' => '2600',
                  'area' => 'Baguio',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                629 => 
                array (
                  'zipcode' => '2601',
                  'area' => 'La Trinidad',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                630 => 
                array (
                  'zipcode' => '2602',
                  'area' => 'Philippine Military Academy, Baguio',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                631 => 
                array (
                  'zipcode' => '2603',
                  'area' => 'Tuba',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                632 => 
                array (
                  'zipcode' => '2604',
                  'area' => 'Itogon',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                633 => 
                array (
                  'zipcode' => '2605',
                  'area' => 'Bokod',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                634 => 
                array (
                  'zipcode' => '2606',
                  'area' => 'Kabayan',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                635 => 
                array (
                  'zipcode' => '2607',
                  'area' => 'Buguias',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                636 => 
                array (
                  'zipcode' => '2608',
                  'area' => 'Mankayan',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                637 => 
                array (
                  'zipcode' => '2609',
                  'area' => 'Lepanto, Mankayan',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                638 => 
                array (
                  'zipcode' => '2610',
                  'area' => 'Bakun',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                639 => 
                array (
                  'zipcode' => '2611',
                  'area' => 'Kibungan',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                640 => 
                array (
                  'zipcode' => '2612',
                  'area' => 'Atok',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                641 => 
                array (
                  'zipcode' => '2613',
                  'area' => 'Kapangan',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                642 => 
                array (
                  'zipcode' => '2614',
                  'area' => 'Sablan',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                643 => 
                array (
                  'zipcode' => '2615',
                  'area' => 'Tublay',
                  'province' => 'Benguet',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                644 => 
                array (
                  'zipcode' => '2616',
                  'area' => 'Bontoc',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                645 => 
                array (
                  'zipcode' => '2617',
                  'area' => 'Sadanga',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                646 => 
                array (
                  'zipcode' => '2618',
                  'area' => 'Besao',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                647 => 
                array (
                  'zipcode' => '2619',
                  'area' => 'Sagada',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                648 => 
                array (
                  'zipcode' => '2620',
                  'area' => 'Tadian',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                649 => 
                array (
                  'zipcode' => '2621',
                  'area' => 'Bauko',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                650 => 
                array (
                  'zipcode' => '2622',
                  'area' => 'Sabangan',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                651 => 
                array (
                  'zipcode' => '2623',
                  'area' => 'Barlig',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                652 => 
                array (
                  'zipcode' => '2624',
                  'area' => 'Natonin',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                653 => 
                array (
                  'zipcode' => '2625',
                  'area' => 'Paracelis',
                  'province' => 'Mountain Province',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                654 => 
                array (
                  'zipcode' => '2700',
                  'area' => 'Vigan',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                655 => 
                array (
                  'zipcode' => '2701',
                  'area' => 'Santa Catalina',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                656 => 
                array (
                  'zipcode' => '2702',
                  'area' => 'Caoayan',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                657 => 
                array (
                  'zipcode' => '2703',
                  'area' => 'Santa',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                658 => 
                array (
                  'zipcode' => '2704',
                  'area' => 'Narvacan',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                659 => 
                array (
                  'zipcode' => '2705',
                  'area' => 'Santa Maria',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                660 => 
                array (
                  'zipcode' => '2706',
                  'area' => 'San Esteban',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                661 => 
                array (
                  'zipcode' => '2707',
                  'area' => 'Santiago',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                662 => 
                array (
                  'zipcode' => '2708',
                  'area' => 'Banayoyo',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                663 => 
                array (
                  'zipcode' => '2709',
                  'area' => 'Galimuyod',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                664 => 
                array (
                  'zipcode' => '2710',
                  'area' => 'Candon',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                665 => 
                array (
                  'zipcode' => '2711',
                  'area' => 'Salcedo (Baugen)',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                666 => 
                array (
                  'zipcode' => '2712',
                  'area' => 'Santa Lucia',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                667 => 
                array (
                  'zipcode' => '2713',
                  'area' => 'Santa Cruz',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                668 => 
                array (
                  'zipcode' => '2714',
                  'area' => 'Tagudin',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                669 => 
                array (
                  'zipcode' => '2715',
                  'area' => 'Suyo',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                670 => 
                array (
                  'zipcode' => '2716',
                  'area' => 'Alilem',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                671 => 
                array (
                  'zipcode' => '2717',
                  'area' => 'Sugpon',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                672 => 
                array (
                  'zipcode' => '2718',
                  'area' => 'Cervantes',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                673 => 
                array (
                  'zipcode' => '2719',
                  'area' => 'Sigay',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                674 => 
                array (
                  'zipcode' => '2720',
                  'area' => 'Gregorio del Pilar',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                675 => 
                array (
                  'zipcode' => '2721',
                  'area' => 'Quirino (Angkaki)',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                676 => 
                array (
                  'zipcode' => '2722',
                  'area' => 'San Emilio',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                677 => 
                array (
                  'zipcode' => '2723',
                  'area' => 'Lidlidda',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                678 => 
                array (
                  'zipcode' => '2724',
                  'area' => 'Burgos',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                679 => 
                array (
                  'zipcode' => '2725',
                  'area' => 'Nagbukel',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                680 => 
                array (
                  'zipcode' => '2726',
                  'area' => 'San Vicente',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                681 => 
                array (
                  'zipcode' => '2727',
                  'area' => 'Bantay',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                682 => 
                array (
                  'zipcode' => '2728',
                  'area' => 'San Ildefonso',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                683 => 
                array (
                  'zipcode' => '2729',
                  'area' => 'Santo Domingo',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                684 => 
                array (
                  'zipcode' => '2730',
                  'area' => 'Magsingal',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                685 => 
                array (
                  'zipcode' => '2731',
                  'area' => 'San Juan (Lapog)',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                686 => 
                array (
                  'zipcode' => '2732',
                  'area' => 'Cabugao',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                687 => 
                array (
                  'zipcode' => '2733',
                  'area' => 'Sinait',
                  'province' => 'Ilocos Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                688 => 
                array (
                  'zipcode' => '2800',
                  'area' => 'Bangued',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                689 => 
                array (
                  'zipcode' => '2801',
                  'area' => 'Dolores',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                690 => 
                array (
                  'zipcode' => '2802',
                  'area' => 'Lagangilang',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                691 => 
                array (
                  'zipcode' => '2803',
                  'area' => 'Tayum',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                692 => 
                array (
                  'zipcode' => '2804',
                  'area' => 'Peñarrubia',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                693 => 
                array (
                  'zipcode' => '2805',
                  'area' => 'Bucay',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                694 => 
                array (
                  'zipcode' => '2806',
                  'area' => 'Pidigan',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                695 => 
                array (
                  'zipcode' => '2807',
                  'area' => 'Langiden',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                696 => 
                array (
                  'zipcode' => '2808',
                  'area' => 'San Quintin',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                697 => 
                array (
                  'zipcode' => '2809',
                  'area' => 'San Isidro',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                698 => 
                array (
                  'zipcode' => '2810',
                  'area' => 'Manabo',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                699 => 
                array (
                  'zipcode' => '2811',
                  'area' => 'Villaviciosa',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                700 => 
                array (
                  'zipcode' => '2812',
                  'area' => 'Pilar',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                701 => 
                array (
                  'zipcode' => '2813',
                  'area' => 'Luba',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                702 => 
                array (
                  'zipcode' => '2814',
                  'area' => 'Tubo',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                703 => 
                array (
                  'zipcode' => '2815',
                  'area' => 'Boliney',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                704 => 
                array (
                  'zipcode' => '2816',
                  'area' => 'Daguioman',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                705 => 
                array (
                  'zipcode' => '2817',
                  'area' => 'Bucloc',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                706 => 
                array (
                  'zipcode' => '2818',
                  'area' => 'Sallapadan',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                707 => 
                array (
                  'zipcode' => '2819',
                  'area' => 'Licuan Baay',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                708 => 
                array (
                  'zipcode' => '2820',
                  'area' => 'Malibcong',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                709 => 
                array (
                  'zipcode' => '2821',
                  'area' => 'Lacub',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                710 => 
                array (
                  'zipcode' => '2822',
                  'area' => 'Tineg',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                711 => 
                array (
                  'zipcode' => '2823',
                  'area' => 'San Juan',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                712 => 
                array (
                  'zipcode' => '2824',
                  'area' => 'Lagayan',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                713 => 
                array (
                  'zipcode' => '2825',
                  'area' => 'Danglas',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                714 => 
                array (
                  'zipcode' => '2826',
                  'area' => 'La Paz',
                  'province' => 'Abra',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                715 => 
                array (
                  'zipcode' => '2900',
                  'area' => 'Laoag',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                716 => 
                array (
                  'zipcode' => '2901',
                  'area' => 'San Nicolas',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                717 => 
                array (
                  'zipcode' => '2902',
                  'area' => 'Paoay',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                718 => 
                array (
                  'zipcode' => '2903',
                  'area' => 'Currimao',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                719 => 
                array (
                  'zipcode' => '2904',
                  'area' => 'Badoc',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                720 => 
                array (
                  'zipcode' => '2905',
                  'area' => 'Pinili',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                721 => 
                array (
                  'zipcode' => '2906',
                  'area' => 'Batac',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                722 => 
                array (
                  'zipcode' => '2907',
                  'area' => 'Marcos',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                723 => 
                array (
                  'zipcode' => '2908',
                  'area' => 'Banna (Espiritu)',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                724 => 
                array (
                  'zipcode' => '2909',
                  'area' => 'Nueva Era',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                725 => 
                array (
                  'zipcode' => '2910',
                  'area' => 'Solsona',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                726 => 
                array (
                  'zipcode' => '2911',
                  'area' => 'Carasi',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                727 => 
                array (
                  'zipcode' => '2912',
                  'area' => 'Piddig',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                728 => 
                array (
                  'zipcode' => '2913',
                  'area' => 'Dingras',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                729 => 
                array (
                  'zipcode' => '2914',
                  'area' => 'Sarrat',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                730 => 
                array (
                  'zipcode' => '2915',
                  'area' => 'Vintar',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                731 => 
                array (
                  'zipcode' => '2916',
                  'area' => 'Bacarra',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                732 => 
                array (
                  'zipcode' => '2917',
                  'area' => 'Pasuquin',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                733 => 
                array (
                  'zipcode' => '2918',
                  'area' => 'Burgos',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                734 => 
                array (
                  'zipcode' => '2919',
                  'area' => 'Pagudpud',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                735 => 
                array (
                  'zipcode' => '2920',
                  'area' => 'Bangui',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                736 => 
                array (
                  'zipcode' => '2921',
                  'area' => 'Dumalneg',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                737 => 
                array (
                  'zipcode' => '2922',
                  'area' => 'Adams',
                  'province' => 'Ilocos Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                738 => 
                array (
                  'zipcode' => '3000',
                  'area' => 'Malolos',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                739 => 
                array (
                  'zipcode' => '3001',
                  'area' => 'Paombong',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                740 => 
                array (
                  'zipcode' => '3002',
                  'area' => 'Hagonoy',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                741 => 
                array (
                  'zipcode' => '3003',
                  'area' => 'Calumpit',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                742 => 
                array (
                  'zipcode' => '3004',
                  'area' => 'Plaridel',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                743 => 
                array (
                  'zipcode' => '3005',
                  'area' => 'Pulilan',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                744 => 
                array (
                  'zipcode' => '3006',
                  'area' => 'Baliuag',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                745 => 
                array (
                  'zipcode' => '3007',
                  'area' => 'Bustos',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                746 => 
                array (
                  'zipcode' => '3008',
                  'area' => 'San Rafael',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                747 => 
                array (
                  'zipcode' => '3009',
                  'area' => 'Doña Remedios Trinidad',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                748 => 
                array (
                  'zipcode' => '3010',
                  'area' => 'San Ildefonso',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                749 => 
                array (
                  'zipcode' => '3011',
                  'area' => 'San Miguel',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                750 => 
                array (
                  'zipcode' => '3012',
                  'area' => 'Angat',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                751 => 
                array (
                  'zipcode' => '3013',
                  'area' => 'Norzagaray',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                752 => 
                array (
                  'zipcode' => '3014',
                  'area' => 'Pandi',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                753 => 
                array (
                  'zipcode' => '3015',
                  'area' => 'Guiguinto',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                754 => 
                array (
                  'zipcode' => '3016',
                  'area' => 'Balagtas (Bigaa)',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                755 => 
                array (
                  'zipcode' => '3017',
                  'area' => 'Bulacan',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                756 => 
                array (
                  'zipcode' => '3018',
                  'area' => 'Bocaue',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                757 => 
                array (
                  'zipcode' => '3019',
                  'area' => 'Marilao',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                758 => 
                array (
                  'zipcode' => '3020',
                  'area' => 'Meycauayan',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                759 => 
                array (
                  'zipcode' => '3021',
                  'area' => 'Obando',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                760 => 
                array (
                  'zipcode' => '3022',
                  'area' => 'Santa Maria',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                761 => 
                array (
                  'zipcode' => '3023',
                  'area' => 'San Jose del Monte',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                762 => 
                array (
                  'zipcode' => '3024',
                  'area' => 'Sapang Palay',
                  'province' => 'Bulacan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                763 => 
                array (
                  'zipcode' => '3100',
                  'area' => 'Cabanatuan',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                764 => 
                array (
                  'zipcode' => '3101',
                  'area' => 'Santa Rosa',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                765 => 
                array (
                  'zipcode' => '3102',
                  'area' => 'San Leonardo',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                766 => 
                array (
                  'zipcode' => '3103',
                  'area' => 'Peñaranda',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                767 => 
                array (
                  'zipcode' => '3104',
                  'area' => 'General Tinio',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                768 => 
                array (
                  'zipcode' => '3105',
                  'area' => 'Gapan',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                769 => 
                array (
                  'zipcode' => '3106',
                  'area' => 'San Isidro',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                770 => 
                array (
                  'zipcode' => '3107',
                  'area' => 'Cabiao',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                771 => 
                array (
                  'zipcode' => '3108',
                  'area' => 'San Antonio',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                772 => 
                array (
                  'zipcode' => '3109',
                  'area' => 'Jaen',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                773 => 
                array (
                  'zipcode' => '3110',
                  'area' => 'Zaragoza',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                774 => 
                array (
                  'zipcode' => '3111',
                  'area' => 'Aliaga',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                775 => 
                array (
                  'zipcode' => '3112',
                  'area' => 'Licab',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                776 => 
                array (
                  'zipcode' => '3113',
                  'area' => 'Quezon',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                777 => 
                array (
                  'zipcode' => '3114',
                  'area' => 'Talavera',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                778 => 
                array (
                  'zipcode' => '3115',
                  'area' => 'Guimba',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                779 => 
                array (
                  'zipcode' => '3116',
                  'area' => 'Nampicuan',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                780 => 
                array (
                  'zipcode' => '3117',
                  'area' => 'Cuyapo',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                781 => 
                array (
                  'zipcode' => '3118',
                  'area' => 'Talugtug',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                782 => 
                array (
                  'zipcode' => '3119',
                  'area' => 'Muñoz',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                783 => 
                array (
                  'zipcode' => '3120',
                  'area' => 'Central Luzon State University',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                784 => 
                array (
                  'zipcode' => '3121',
                  'area' => 'San Jose',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                785 => 
                array (
                  'zipcode' => '3122',
                  'area' => 'Lupao',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                786 => 
                array (
                  'zipcode' => '3123',
                  'area' => 'Carrangalan',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                787 => 
                array (
                  'zipcode' => '3124',
                  'area' => 'Pantabangan',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                788 => 
                array (
                  'zipcode' => '3125',
                  'area' => 'General Mamerto Natividad',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                789 => 
                array (
                  'zipcode' => '3126',
                  'area' => 'Llanera',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                790 => 
                array (
                  'zipcode' => '3127',
                  'area' => 'Rizal',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                791 => 
                array (
                  'zipcode' => '3128',
                  'area' => 'Bongabon',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                792 => 
                array (
                  'zipcode' => '3129',
                  'area' => 'Laur',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                793 => 
                array (
                  'zipcode' => '3130',
                  'area' => 'Fort Magsaysay',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                794 => 
                array (
                  'zipcode' => '3131',
                  'area' => 'Gabaldon',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                795 => 
                array (
                  'zipcode' => '3132',
                  'area' => 'Palayan',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                796 => 
                array (
                  'zipcode' => '3133',
                  'area' => 'Santo Domingo',
                  'province' => 'Nueva Ecija',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                797 => 
                array (
                  'zipcode' => '3200',
                  'area' => 'Baler',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                798 => 
                array (
                  'zipcode' => '3201',
                  'area' => 'San Luis',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                799 => 
                array (
                  'zipcode' => '3202',
                  'area' => 'Maria Aurora',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                800 => 
                array (
                  'zipcode' => '3203',
                  'area' => 'Dipaculao',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                801 => 
                array (
                  'zipcode' => '3204',
                  'area' => 'Casiguran',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                802 => 
                array (
                  'zipcode' => '3205',
                  'area' => 'Dilasag',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                803 => 
                array (
                  'zipcode' => '3206',
                  'area' => 'Dinalungan',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                804 => 
                array (
                  'zipcode' => '3207',
                  'area' => 'Dingalan',
                  'province' => 'Aurora',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                805 => 
                array (
                  'zipcode' => '3300',
                  'area' => 'Ilagan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                806 => 
                array (
                  'zipcode' => '3301',
                  'area' => 'Gamu',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                807 => 
                array (
                  'zipcode' => '3302',
                  'area' => 'Naguillan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                808 => 
                array (
                  'zipcode' => '3303',
                  'area' => 'Reina Mercedes',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                809 => 
                array (
                  'zipcode' => '3304',
                  'area' => 'Luna',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                810 => 
                array (
                  'zipcode' => '3305',
                  'area' => 'Cauayan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                811 => 
                array (
                  'zipcode' => '3306',
                  'area' => 'Alicia',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                812 => 
                array (
                  'zipcode' => '3307',
                  'area' => 'Angadanan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                813 => 
                array (
                  'zipcode' => '3308',
                  'area' => 'San Guillermo',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                814 => 
                array (
                  'zipcode' => '3309',
                  'area' => 'Echague',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                815 => 
                array (
                  'zipcode' => '3310',
                  'area' => 'San Isidro',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                816 => 
                array (
                  'zipcode' => '3311',
                  'area' => 'Santiago',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                817 => 
                array (
                  'zipcode' => '3312',
                  'area' => 'Cordon',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                818 => 
                array (
                  'zipcode' => '3313',
                  'area' => 'Jones',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                819 => 
                array (
                  'zipcode' => '3314',
                  'area' => 'San Agustin',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                820 => 
                array (
                  'zipcode' => '3315',
                  'area' => 'Cabatuan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                821 => 
                array (
                  'zipcode' => '3316',
                  'area' => 'Aurora',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                822 => 
                array (
                  'zipcode' => '3317',
                  'area' => 'San Manuel (Callang)',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                823 => 
                array (
                  'zipcode' => '3318',
                  'area' => 'San Mateo',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                824 => 
                array (
                  'zipcode' => '3319',
                  'area' => 'Ramon',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                825 => 
                array (
                  'zipcode' => '3320',
                  'area' => 'Roxas',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                826 => 
                array (
                  'zipcode' => '3321',
                  'area' => 'Quirino',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                827 => 
                array (
                  'zipcode' => '3322',
                  'area' => 'Burgos',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                828 => 
                array (
                  'zipcode' => '3323',
                  'area' => 'Mallig',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                829 => 
                array (
                  'zipcode' => '3324',
                  'area' => 'Quezon',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                830 => 
                array (
                  'zipcode' => '3325',
                  'area' => 'Tumauini',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                831 => 
                array (
                  'zipcode' => '3326',
                  'area' => 'Delfin Albano',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                832 => 
                array (
                  'zipcode' => '3327',
                  'area' => 'Santo Tomas',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                833 => 
                array (
                  'zipcode' => '3328',
                  'area' => 'Cabagan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                834 => 
                array (
                  'zipcode' => '3329',
                  'area' => 'San Pablo',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                835 => 
                array (
                  'zipcode' => '3330',
                  'area' => 'Santa Maria',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                836 => 
                array (
                  'zipcode' => '3331',
                  'area' => 'Benito Soliven',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                837 => 
                array (
                  'zipcode' => '3332',
                  'area' => 'San Mariano',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                838 => 
                array (
                  'zipcode' => '3333',
                  'area' => 'Maconacon',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                839 => 
                array (
                  'zipcode' => '3334',
                  'area' => 'Palanan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                840 => 
                array (
                  'zipcode' => '3335',
                  'area' => 'Divilacan',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                841 => 
                array (
                  'zipcode' => '3336',
                  'area' => 'Dinapigue',
                  'province' => 'Isabela',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                842 => 
                array (
                  'zipcode' => '3400',
                  'area' => 'Cabarroguis',
                  'province' => 'Quirino',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                843 => 
                array (
                  'zipcode' => '3401',
                  'area' => 'Diffun',
                  'province' => 'Quirino',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                844 => 
                array (
                  'zipcode' => '3402',
                  'area' => 'Saguday',
                  'province' => 'Quirino',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                845 => 
                array (
                  'zipcode' => '3403',
                  'area' => 'Aglipay',
                  'province' => 'Quirino',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                846 => 
                array (
                  'zipcode' => '3404',
                  'area' => 'Maddela',
                  'province' => 'Quirino',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                847 => 
                array (
                  'zipcode' => '3405',
                  'area' => 'Nagtipunan (Abbag)',
                  'province' => 'Quirino',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                848 => 
                array (
                  'zipcode' => '3500',
                  'area' => 'Tuguegarao',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                849 => 
                array (
                  'zipcode' => '3501',
                  'area' => 'Enrile',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                850 => 
                array (
                  'zipcode' => '3502',
                  'area' => 'Peñablanca',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                851 => 
                array (
                  'zipcode' => '3503',
                  'area' => 'Solana',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                852 => 
                array (
                  'zipcode' => '3504',
                  'area' => 'Iguig',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                853 => 
                array (
                  'zipcode' => '3505',
                  'area' => 'Amulung',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                854 => 
                array (
                  'zipcode' => '3506',
                  'area' => 'Baggao',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                855 => 
                array (
                  'zipcode' => '3507',
                  'area' => 'Alcala',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                856 => 
                array (
                  'zipcode' => '3508',
                  'area' => 'Gattaran',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                857 => 
                array (
                  'zipcode' => '3509',
                  'area' => 'Lal Lo',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                858 => 
                array (
                  'zipcode' => '3510',
                  'area' => 'Camalaniugan',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                859 => 
                array (
                  'zipcode' => '3511',
                  'area' => 'Buguey',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                860 => 
                array (
                  'zipcode' => '3512',
                  'area' => 'Santa Teresita',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                861 => 
                array (
                  'zipcode' => '3513',
                  'area' => 'Gonzaga',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                862 => 
                array (
                  'zipcode' => '3514',
                  'area' => 'Santa Ana',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                863 => 
                array (
                  'zipcode' => '3515',
                  'area' => 'Aparri',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                864 => 
                array (
                  'zipcode' => '3516',
                  'area' => 'Ballesteros',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                865 => 
                array (
                  'zipcode' => '3517',
                  'area' => 'Abulug',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                866 => 
                array (
                  'zipcode' => '3518',
                  'area' => 'Sanchez Mira',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                867 => 
                array (
                  'zipcode' => '3519',
                  'area' => 'Claveria',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                868 => 
                array (
                  'zipcode' => '3520',
                  'area' => 'Calayan',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                869 => 
                array (
                  'zipcode' => '3521',
                  'area' => 'Santa Praxedes',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                870 => 
                array (
                  'zipcode' => '3522',
                  'area' => 'Pamplona',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                871 => 
                array (
                  'zipcode' => '3523',
                  'area' => 'Allacapan',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                872 => 
                array (
                  'zipcode' => '3524',
                  'area' => 'Lasam',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                873 => 
                array (
                  'zipcode' => '3525',
                  'area' => 'Santo Niño',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                874 => 
                array (
                  'zipcode' => '3526',
                  'area' => 'Rizal',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                875 => 
                array (
                  'zipcode' => '3527',
                  'area' => 'Piat',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                876 => 
                array (
                  'zipcode' => '3528',
                  'area' => 'Tuao',
                  'province' => 'Cagayan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                877 => 
                array (
                  'zipcode' => '3600',
                  'area' => 'Lagawe',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                878 => 
                array (
                  'zipcode' => '3601',
                  'area' => 'Banaue',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                879 => 
                array (
                  'zipcode' => '3602',
                  'area' => 'Mayoyao (Mayaoyao)',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                880 => 
                array (
                  'zipcode' => '3603',
                  'area' => 'Hungduan',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                881 => 
                array (
                  'zipcode' => '3604',
                  'area' => 'Kiangan',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                882 => 
                array (
                  'zipcode' => '3605',
                  'area' => 'Lamut',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                883 => 
                array (
                  'zipcode' => '3606',
                  'area' => 'Aguinaldo',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                884 => 
                array (
                  'zipcode' => '3607',
                  'area' => 'Hingyon',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                885 => 
                array (
                  'zipcode' => '3608',
                  'area' => 'Alfonso Lista (Potia)',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                886 => 
                array (
                  'zipcode' => '3609',
                  'area' => 'Tinoc',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                887 => 
                array (
                  'zipcode' => '3610',
                  'area' => 'Asipulo',
                  'province' => 'Ifugao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                888 => 
                array (
                  'zipcode' => '3700',
                  'area' => 'Bayombong',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                889 => 
                array (
                  'zipcode' => '3701',
                  'area' => 'Ambaguio',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                890 => 
                array (
                  'zipcode' => '3702',
                  'area' => 'Bambang',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                891 => 
                array (
                  'zipcode' => '3703',
                  'area' => 'Kasibu',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                892 => 
                array (
                  'zipcode' => '3704',
                  'area' => 'Aritao',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                893 => 
                array (
                  'zipcode' => '3705',
                  'area' => 'Santa Fe (Imugan)',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                894 => 
                array (
                  'zipcode' => '3706',
                  'area' => 'Dupax del Norte',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                895 => 
                array (
                  'zipcode' => '3707',
                  'area' => 'Dupax del Sur',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                896 => 
                array (
                  'zipcode' => '3708',
                  'area' => 'Kayapa',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                897 => 
                array (
                  'zipcode' => '3709',
                  'area' => 'Solano',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                898 => 
                array (
                  'zipcode' => '3710',
                  'area' => 'Villa Verde (Ibung)',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                899 => 
                array (
                  'zipcode' => '3711',
                  'area' => 'Bagabag',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                900 => 
                array (
                  'zipcode' => '3712',
                  'area' => 'Diadi',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                901 => 
                array (
                  'zipcode' => '3713',
                  'area' => 'Quezon',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                902 => 
                array (
                  'zipcode' => '3714',
                  'area' => 'Alfonso Castañeda',
                  'province' => 'Nueva Vizcaya',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                903 => 
                array (
                  'zipcode' => '3800',
                  'area' => 'Tabuk',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                904 => 
                array (
                  'zipcode' => '3801',
                  'area' => 'Balbalan',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                905 => 
                array (
                  'zipcode' => '3802',
                  'area' => 'Lubuagan',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                906 => 
                array (
                  'zipcode' => '3803',
                  'area' => 'Pasil',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                907 => 
                array (
                  'zipcode' => '3804',
                  'area' => 'Tinglayan',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                908 => 
                array (
                  'zipcode' => '3805',
                  'area' => 'Tanudan',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                909 => 
                array (
                  'zipcode' => '3806',
                  'area' => 'Pinukpuk',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                910 => 
                array (
                  'zipcode' => '3807',
                  'area' => 'Conner',
                  'province' => 'Apayao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                911 => 
                array (
                  'zipcode' => '3808',
                  'area' => 'Rizal (Liwan)',
                  'province' => 'Kalinga',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                912 => 
                array (
                  'zipcode' => '3809',
                  'area' => 'Kabugao',
                  'province' => 'Apayao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                913 => 
                array (
                  'zipcode' => '3810',
                  'area' => 'Flora',
                  'province' => 'Apayao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                914 => 
                array (
                  'zipcode' => '3811',
                  'area' => 'Santa Marcela',
                  'province' => 'Apayao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                915 => 
                array (
                  'zipcode' => '3812',
                  'area' => 'Pudtol',
                  'province' => 'Apayao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                916 => 
                array (
                  'zipcode' => '3813',
                  'area' => 'Luna',
                  'province' => 'Apayao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                917 => 
                array (
                  'zipcode' => '3814',
                  'area' => 'Calanasan (Bayag)',
                  'province' => 'Apayao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                918 => 
                array (
                  'zipcode' => '3900',
                  'area' => 'Basco',
                  'province' => 'Batanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                919 => 
                array (
                  'zipcode' => '3901',
                  'area' => 'Mahatao',
                  'province' => 'Batanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                920 => 
                array (
                  'zipcode' => '3902',
                  'area' => 'Ivana',
                  'province' => 'Batanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                921 => 
                array (
                  'zipcode' => '3903',
                  'area' => 'Uyugan',
                  'province' => 'Batanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                922 => 
                array (
                  'zipcode' => '3904',
                  'area' => 'Sabtang',
                  'province' => 'Batanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                923 => 
                array (
                  'zipcode' => '3905',
                  'area' => 'Itbayat',
                  'province' => 'Batanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                924 => 
                array (
                  'zipcode' => '4000',
                  'area' => 'San Pablo',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                925 => 
                array (
                  'zipcode' => '4001',
                  'area' => 'Alaminos',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                926 => 
                array (
                  'zipcode' => '4002',
                  'area' => 'Nagcarlan',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                927 => 
                array (
                  'zipcode' => '4003',
                  'area' => 'Rizal',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                928 => 
                array (
                  'zipcode' => '4004',
                  'area' => 'Liliw',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                929 => 
                array (
                  'zipcode' => '4005',
                  'area' => 'Majayjay',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                930 => 
                array (
                  'zipcode' => '4006',
                  'area' => 'Botocan, Magdalena',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                931 => 
                array (
                  'zipcode' => '4007',
                  'area' => 'Magdalena',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                932 => 
                array (
                  'zipcode' => '4008',
                  'area' => 'Pagsanjan',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                933 => 
                array (
                  'zipcode' => '4009',
                  'area' => 'Santa Cruz',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                934 => 
                array (
                  'zipcode' => '4010',
                  'area' => 'Pila',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                935 => 
                array (
                  'zipcode' => '4011',
                  'area' => 'Victoria',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                936 => 
                array (
                  'zipcode' => '4012',
                  'area' => 'Calauan',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                937 => 
                array (
                  'zipcode' => '4013',
                  'area' => 'Cavinti',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                938 => 
                array (
                  'zipcode' => '4014',
                  'area' => 'Lumban',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                939 => 
                array (
                  'zipcode' => '4015',
                  'area' => 'Kalayaan',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                940 => 
                array (
                  'zipcode' => '4016',
                  'area' => 'Paete',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                941 => 
                array (
                  'zipcode' => '4017',
                  'area' => 'Pakil',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                942 => 
                array (
                  'zipcode' => '4018',
                  'area' => 'Pangil',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                943 => 
                array (
                  'zipcode' => '4019',
                  'area' => 'Siniloan',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                944 => 
                array (
                  'zipcode' => '4020',
                  'area' => 'Mabitac',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                945 => 
                array (
                  'zipcode' => '4021',
                  'area' => 'Famy',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                946 => 
                array (
                  'zipcode' => '4022',
                  'area' => 'Santa Maria',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                947 => 
                array (
                  'zipcode' => '4023',
                  'area' => 'San Pedro',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                948 => 
                array (
                  'zipcode' => '4024',
                  'area' => 'Biñan',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                949 => 
                array (
                  'zipcode' => '4025',
                  'area' => 'Cabuyao',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                950 => 
                array (
                  'zipcode' => '4026',
                  'area' => 'Santa Rosa',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                951 => 
                array (
                  'zipcode' => '4027',
                  'area' => 'Calamba',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                952 => 
                array (
                  'zipcode' => '4028',
                  'area' => 'Canlubang, Calamba',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                953 => 
                array (
                  'zipcode' => '4029',
                  'area' => 'Camp Vicente Lim, Calamba',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                954 => 
                array (
                  'zipcode' => '4030',
                  'area' => 'Los Baños',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                955 => 
                array (
                  'zipcode' => '4031',
                  'area' => 'University of the Philippines Los Baños',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                956 => 
                array (
                  'zipcode' => '4032',
                  'area' => 'Luisiana',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                957 => 
                array (
                  'zipcode' => '4033',
                  'area' => 'Bay',
                  'province' => 'Laguna',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                958 => 
                array (
                  'zipcode' => '4100',
                  'area' => 'Cavite City',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                959 => 
                array (
                  'zipcode' => '4101',
                  'area' => 'Sangley Point Naval Base, Cavite City',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                960 => 
                array (
                  'zipcode' => '4102',
                  'area' => 'Bacoor',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                961 => 
                array (
                  'zipcode' => '4103',
                  'area' => 'Imus',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                962 => 
                array (
                  'zipcode' => '4104',
                  'area' => 'Kawit',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                963 => 
                array (
                  'zipcode' => '4105',
                  'area' => 'Noveleta',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                964 => 
                array (
                  'zipcode' => '4106',
                  'area' => 'Rosario',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                965 => 
                array (
                  'zipcode' => '4107',
                  'area' => 'General Trias',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                966 => 
                array (
                  'zipcode' => '4108',
                  'area' => 'Tanza',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                967 => 
                array (
                  'zipcode' => '4109',
                  'area' => 'Trece Martires',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                968 => 
                array (
                  'zipcode' => '4110',
                  'area' => 'Naic',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                969 => 
                array (
                  'zipcode' => '4111',
                  'area' => 'Ternate',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                970 => 
                array (
                  'zipcode' => '4112',
                  'area' => 'Maragondon',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                971 => 
                array (
                  'zipcode' => '4113',
                  'area' => 'Magallanes',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                972 => 
                array (
                  'zipcode' => '4114',
                  'area' => 'Dasmariñas',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                973 => 
                array (
                  'zipcode' => '4115',
                  'area' => 'Dasmariñas Resettlement Area, Dasmariñas',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                974 => 
                array (
                  'zipcode' => '4116',
                  'area' => 'Carmona',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                975 => 
                array (
                  'zipcode' => '4117',
                  'area' => 'General Mariano Alvarez',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                976 => 
                array (
                  'zipcode' => '4118',
                  'area' => 'Silang',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                977 => 
                array (
                  'zipcode' => '4119',
                  'area' => 'Amadeo',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                978 => 
                array (
                  'zipcode' => '4120',
                  'area' => 'Tagaytay',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                979 => 
                array (
                  'zipcode' => '4121',
                  'area' => 'Mendez (Mendez Nuñez)',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                980 => 
                array (
                  'zipcode' => '4122',
                  'area' => 'Indang',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                981 => 
                array (
                  'zipcode' => '4123',
                  'area' => 'Alfonso',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                982 => 
                array (
                  'zipcode' => '4124',
                  'area' => 'General Emilio Aguinaldo (Bailen)',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                983 => 
                array (
                  'zipcode' => '4125',
                  'area' => 'Corregidor Island, Cavite City',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                984 => 
                array (
                  'zipcode' => '4126',
                  'area' => 'First Cavite Industrial Estate, Dasmariñas',
                  'province' => 'Cavite',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                985 => 
                array (
                  'zipcode' => '4200',
                  'area' => 'Batangas City',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                986 => 
                array (
                  'zipcode' => '4201',
                  'area' => 'Bauan',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                987 => 
                array (
                  'zipcode' => '4202',
                  'area' => 'Mabini',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                988 => 
                array (
                  'zipcode' => '4203',
                  'area' => 'Tingloy',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                989 => 
                array (
                  'zipcode' => '4204',
                  'area' => 'San Pascual',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                990 => 
                array (
                  'zipcode' => '4205',
                  'area' => 'Alitagtag',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                991 => 
                array (
                  'zipcode' => '4206',
                  'area' => 'Santa Teresita',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                992 => 
                array (
                  'zipcode' => '4207',
                  'area' => 'San Nicolas',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                993 => 
                array (
                  'zipcode' => '4208',
                  'area' => 'Taal',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                994 => 
                array (
                  'zipcode' => '4209',
                  'area' => 'Lemery',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                995 => 
                array (
                  'zipcode' => '4210',
                  'area' => 'San Luis',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                996 => 
                array (
                  'zipcode' => '4211',
                  'area' => 'Agoncillo',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                997 => 
                array (
                  'zipcode' => '4212',
                  'area' => 'Calaca',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                998 => 
                array (
                  'zipcode' => '4213',
                  'area' => 'Balayan',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                999 => 
                array (
                  'zipcode' => '4214',
                  'area' => 'Tuy',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1000 => 
                array (
                  'zipcode' => '4215',
                  'area' => 'Calatagan',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1001 => 
                array (
                  'zipcode' => '4216',
                  'area' => 'Lian',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1002 => 
                array (
                  'zipcode' => '4217',
                  'area' => 'Lipa',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1003 => 
                array (
                  'zipcode' => '4218',
                  'area' => 'Fernando Air Base, Lipa',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1004 => 
                array (
                  'zipcode' => '4219',
                  'area' => 'Balete',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1005 => 
                array (
                  'zipcode' => '4220',
                  'area' => 'Talisay',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1006 => 
                array (
                  'zipcode' => '4221',
                  'area' => 'Laurel',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1007 => 
                array (
                  'zipcode' => '4222',
                  'area' => 'Cuenca',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1008 => 
                array (
                  'zipcode' => '4223',
                  'area' => 'Mataas na Kahoy',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1009 => 
                array (
                  'zipcode' => '4224',
                  'area' => 'Padre Garcia',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1010 => 
                array (
                  'zipcode' => '4225',
                  'area' => 'Rosario',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1011 => 
                array (
                  'zipcode' => '4226',
                  'area' => 'San Juan',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1012 => 
                array (
                  'zipcode' => '4227',
                  'area' => 'San Jose',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1013 => 
                array (
                  'zipcode' => '4228',
                  'area' => 'Taysan',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1014 => 
                array (
                  'zipcode' => '4229',
                  'area' => 'Lobo',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1015 => 
                array (
                  'zipcode' => '4230',
                  'area' => 'Ibaan',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1016 => 
                array (
                  'zipcode' => '4231',
                  'area' => 'Nasugbu',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1017 => 
                array (
                  'zipcode' => '4232',
                  'area' => 'Tanauan',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1018 => 
                array (
                  'zipcode' => '4233',
                  'area' => 'Malvar',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1019 => 
                array (
                  'zipcode' => '4234',
                  'area' => 'Santo Tomas',
                  'province' => 'Batangas',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1020 => 
                array (
                  'zipcode' => '4300',
                  'area' => 'Quezon Provincial Capitol',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1021 => 
                array (
                  'zipcode' => '4301',
                  'area' => 'Lucena',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1022 => 
                array (
                  'zipcode' => '4302',
                  'area' => 'Pagbilao',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1023 => 
                array (
                  'zipcode' => '4303',
                  'area' => 'Padre Burgos',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1024 => 
                array (
                  'zipcode' => '4304',
                  'area' => 'Agdangan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1025 => 
                array (
                  'zipcode' => '4305',
                  'area' => 'Unisan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1026 => 
                array (
                  'zipcode' => '4306',
                  'area' => 'Plaridel',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1027 => 
                array (
                  'zipcode' => '4307',
                  'area' => 'Gumaca',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1028 => 
                array (
                  'zipcode' => '4308',
                  'area' => 'Pitogo',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1029 => 
                array (
                  'zipcode' => '4309',
                  'area' => 'Macalelon',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1030 => 
                array (
                  'zipcode' => '4310',
                  'area' => 'General Luna',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1031 => 
                array (
                  'zipcode' => '4311',
                  'area' => 'Catanauan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1032 => 
                array (
                  'zipcode' => '4312',
                  'area' => 'Mulanay',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1033 => 
                array (
                  'zipcode' => '4313',
                  'area' => 'San Narciso',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1034 => 
                array (
                  'zipcode' => '4314',
                  'area' => 'San Andres',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1035 => 
                array (
                  'zipcode' => '4315',
                  'area' => 'San Francisco (Aurora)',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1036 => 
                array (
                  'zipcode' => '4316',
                  'area' => 'Lopez',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1037 => 
                array (
                  'zipcode' => '4317',
                  'area' => 'Hondagua, Lopez',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1038 => 
                array (
                  'zipcode' => '4318',
                  'area' => 'Calauag',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1039 => 
                array (
                  'zipcode' => '4319',
                  'area' => 'Guinayangan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1040 => 
                array (
                  'zipcode' => '4320',
                  'area' => 'Buenavista',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1041 => 
                array (
                  'zipcode' => '4321',
                  'area' => 'Tagkawayan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1042 => 
                array (
                  'zipcode' => '4322',
                  'area' => 'Sariaya',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1043 => 
                array (
                  'zipcode' => '4323',
                  'area' => 'Candelaria',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1044 => 
                array (
                  'zipcode' => '4324',
                  'area' => 'San Antonio',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1045 => 
                array (
                  'zipcode' => '4325',
                  'area' => 'Tiaong',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1046 => 
                array (
                  'zipcode' => '4326',
                  'area' => 'Dolores',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1047 => 
                array (
                  'zipcode' => '4327',
                  'area' => 'Tayabas',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1048 => 
                array (
                  'zipcode' => '4328',
                  'area' => 'Lucban',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1049 => 
                array (
                  'zipcode' => '4329',
                  'area' => 'Sampaloc',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1050 => 
                array (
                  'zipcode' => '4330',
                  'area' => 'Mauban',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1051 => 
                array (
                  'zipcode' => '4331',
                  'area' => 'Atimonan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1052 => 
                array (
                  'zipcode' => '4332',
                  'area' => 'Quezon',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1053 => 
                array (
                  'zipcode' => '4333',
                  'area' => 'Alabat',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1054 => 
                array (
                  'zipcode' => '4334',
                  'area' => 'Perez',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1055 => 
                array (
                  'zipcode' => '4335',
                  'area' => 'Real',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1056 => 
                array (
                  'zipcode' => '4336',
                  'area' => 'Infanta',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1057 => 
                array (
                  'zipcode' => '4337',
                  'area' => 'Panukulan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1058 => 
                array (
                  'zipcode' => '4338',
                  'area' => 'General Nakar',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1059 => 
                array (
                  'zipcode' => '4339',
                  'area' => 'Polillo',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1060 => 
                array (
                  'zipcode' => '4340',
                  'area' => 'Burdeos',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1061 => 
                array (
                  'zipcode' => '4341',
                  'area' => 'Patnanungan',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1062 => 
                array (
                  'zipcode' => '4342',
                  'area' => 'Jomalig',
                  'province' => 'Quezon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1063 => 
                array (
                  'zipcode' => '4400',
                  'area' => 'Naga',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1064 => 
                array (
                  'zipcode' => '4401',
                  'area' => 'Camaligan',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1065 => 
                array (
                  'zipcode' => '4402',
                  'area' => 'Canaman',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1066 => 
                array (
                  'zipcode' => '4403',
                  'area' => 'Magarao',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1067 => 
                array (
                  'zipcode' => '4404',
                  'area' => 'Bombon',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1068 => 
                array (
                  'zipcode' => '4405',
                  'area' => 'Calabanga',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1069 => 
                array (
                  'zipcode' => '4406',
                  'area' => 'Cabusao',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1070 => 
                array (
                  'zipcode' => '4407',
                  'area' => 'Libmanan',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1071 => 
                array (
                  'zipcode' => '4408',
                  'area' => 'Sipocot',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1072 => 
                array (
                  'zipcode' => '4409',
                  'area' => 'Lupi',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1073 => 
                array (
                  'zipcode' => '4410',
                  'area' => 'Ragay',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1074 => 
                array (
                  'zipcode' => '4411',
                  'area' => 'Del Gallego',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1075 => 
                array (
                  'zipcode' => '4412',
                  'area' => 'Gainza',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1076 => 
                array (
                  'zipcode' => '4413',
                  'area' => 'Milaor',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1077 => 
                array (
                  'zipcode' => '4414',
                  'area' => 'Minalabac',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1078 => 
                array (
                  'zipcode' => '4415',
                  'area' => 'San Fernando',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1079 => 
                array (
                  'zipcode' => '4416',
                  'area' => 'Pamplona',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1080 => 
                array (
                  'zipcode' => '4417',
                  'area' => 'Pasacao',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1081 => 
                array (
                  'zipcode' => '4418',
                  'area' => 'Pili',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1082 => 
                array (
                  'zipcode' => '4419',
                  'area' => 'Ocampo',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1083 => 
                array (
                  'zipcode' => '4420',
                  'area' => 'Tigaon',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1084 => 
                array (
                  'zipcode' => '4421',
                  'area' => 'Sagñay',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1085 => 
                array (
                  'zipcode' => '4422',
                  'area' => 'Goa',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1086 => 
                array (
                  'zipcode' => '4423',
                  'area' => 'San Jose',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1087 => 
                array (
                  'zipcode' => '4424',
                  'area' => 'Presentacion',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1088 => 
                array (
                  'zipcode' => '4425',
                  'area' => 'Lagonoy',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1089 => 
                array (
                  'zipcode' => '4426',
                  'area' => 'Tinambac',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1090 => 
                array (
                  'zipcode' => '4427',
                  'area' => 'Siruma',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1091 => 
                array (
                  'zipcode' => '4428',
                  'area' => 'Garchitorena',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1092 => 
                array (
                  'zipcode' => '4429',
                  'area' => 'Caramoan',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1093 => 
                array (
                  'zipcode' => '4430',
                  'area' => 'Bula',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1094 => 
                array (
                  'zipcode' => '4431',
                  'area' => 'Iriga',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1095 => 
                array (
                  'zipcode' => '4432',
                  'area' => 'Baao',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1096 => 
                array (
                  'zipcode' => '4433',
                  'area' => 'Buhi',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1097 => 
                array (
                  'zipcode' => '4434',
                  'area' => 'Nabua',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1098 => 
                array (
                  'zipcode' => '4435',
                  'area' => 'Bato',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1099 => 
                array (
                  'zipcode' => '4436',
                  'area' => 'Balatan',
                  'province' => 'Camarines Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1100 => 
                array (
                  'zipcode' => '4500',
                  'area' => 'Legazpi',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1101 => 
                array (
                  'zipcode' => '4501',
                  'area' => 'Daraga (Locsin)',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1102 => 
                array (
                  'zipcode' => '4502',
                  'area' => 'Camalig',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1103 => 
                array (
                  'zipcode' => '4503',
                  'area' => 'Guinobatan',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1104 => 
                array (
                  'zipcode' => '4504',
                  'area' => 'Ligao',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1105 => 
                array (
                  'zipcode' => '4505',
                  'area' => 'Oas',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1106 => 
                array (
                  'zipcode' => '4506',
                  'area' => 'Polangui',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1107 => 
                array (
                  'zipcode' => '4507',
                  'area' => 'Libon',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1108 => 
                array (
                  'zipcode' => '4508',
                  'area' => 'Santo Domingo',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1109 => 
                array (
                  'zipcode' => '4509',
                  'area' => 'Bacacay',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1110 => 
                array (
                  'zipcode' => '4510',
                  'area' => 'Malilipot',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1111 => 
                array (
                  'zipcode' => '4511',
                  'area' => 'Tabaco',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1112 => 
                array (
                  'zipcode' => '4512',
                  'area' => 'Malinao',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1113 => 
                array (
                  'zipcode' => '4513',
                  'area' => 'Tiwi',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1114 => 
                array (
                  'zipcode' => '4514',
                  'area' => 'Manito',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1115 => 
                array (
                  'zipcode' => '4515',
                  'area' => 'Jovellar',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1116 => 
                array (
                  'zipcode' => '4516',
                  'area' => 'Pio Duran (Malacbalac)',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1117 => 
                array (
                  'zipcode' => '4517',
                  'area' => 'Rapu Rapu',
                  'province' => 'Albay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1118 => 
                array (
                  'zipcode' => '4600',
                  'area' => 'Daet',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1119 => 
                array (
                  'zipcode' => '4601',
                  'area' => 'Mercedes',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1120 => 
                array (
                  'zipcode' => '4602',
                  'area' => 'Talisay',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1121 => 
                array (
                  'zipcode' => '4603',
                  'area' => 'Vinzons',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1122 => 
                array (
                  'zipcode' => '4604',
                  'area' => 'Labo',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1123 => 
                array (
                  'zipcode' => '4605',
                  'area' => 'Paracale',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1124 => 
                array (
                  'zipcode' => '4606',
                  'area' => 'Jose Panganiban',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1125 => 
                array (
                  'zipcode' => '4607',
                  'area' => 'Capalonga',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1126 => 
                array (
                  'zipcode' => '4608',
                  'area' => 'Basud',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1127 => 
                array (
                  'zipcode' => '4609',
                  'area' => 'San Vicente',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1128 => 
                array (
                  'zipcode' => '4610',
                  'area' => 'San Lorenzo Ruiz',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1129 => 
                array (
                  'zipcode' => '4611',
                  'area' => 'Santa Elena',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1130 => 
                array (
                  'zipcode' => '4612',
                  'area' => 'Tulay na Lupa',
                  'province' => 'Camarines Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1131 => 
                array (
                  'zipcode' => '4700',
                  'area' => 'Sorsogon City',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1132 => 
                array (
                  'zipcode' => '4701',
                  'area' => 'Bacon',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1133 => 
                array (
                  'zipcode' => '4702',
                  'area' => 'Casiguran',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1134 => 
                array (
                  'zipcode' => '4703',
                  'area' => 'Juban',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1135 => 
                array (
                  'zipcode' => '4704',
                  'area' => 'Bulusan',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1136 => 
                array (
                  'zipcode' => '4705',
                  'area' => 'Magallanes',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1137 => 
                array (
                  'zipcode' => '4706',
                  'area' => 'Bulan',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1138 => 
                array (
                  'zipcode' => '4707',
                  'area' => 'Irosin',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1139 => 
                array (
                  'zipcode' => '4708',
                  'area' => 'Matnog',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1140 => 
                array (
                  'zipcode' => '4709',
                  'area' => 'Santa Magdalena',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1141 => 
                array (
                  'zipcode' => '4710',
                  'area' => 'Gubat',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1142 => 
                array (
                  'zipcode' => '4711',
                  'area' => 'Prieto Diaz',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1143 => 
                array (
                  'zipcode' => '4712',
                  'area' => 'Barcelona',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1144 => 
                array (
                  'zipcode' => '4713',
                  'area' => 'Castilla',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1145 => 
                array (
                  'zipcode' => '4714',
                  'area' => 'Pilar',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1146 => 
                array (
                  'zipcode' => '4715',
                  'area' => 'Donsol',
                  'province' => 'Sorsogon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1147 => 
                array (
                  'zipcode' => '4800',
                  'area' => 'Virac',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1148 => 
                array (
                  'zipcode' => '4801',
                  'area' => 'Bato',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1149 => 
                array (
                  'zipcode' => '4802',
                  'area' => 'San Miguel',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1150 => 
                array (
                  'zipcode' => '4803',
                  'area' => 'Baras',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1151 => 
                array (
                  'zipcode' => '4804',
                  'area' => 'Gigmoto',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1152 => 
                array (
                  'zipcode' => '4805',
                  'area' => 'Viga',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1153 => 
                array (
                  'zipcode' => '4806',
                  'area' => 'Panganiban',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1154 => 
                array (
                  'zipcode' => '4807',
                  'area' => 'Bagamanoc',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1155 => 
                array (
                  'zipcode' => '4808',
                  'area' => 'Caramoran',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1156 => 
                array (
                  'zipcode' => '4809',
                  'area' => 'Pandan',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1157 => 
                array (
                  'zipcode' => '4810',
                  'area' => 'San Andres',
                  'province' => 'Catanduanes',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1158 => 
                array (
                  'zipcode' => '4900',
                  'area' => 'Boac',
                  'province' => 'Marinduque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1159 => 
                array (
                  'zipcode' => '4901',
                  'area' => 'Mogpog',
                  'province' => 'Marinduque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1160 => 
                array (
                  'zipcode' => '4902',
                  'area' => 'Santa Cruz',
                  'province' => 'Marinduque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1161 => 
                array (
                  'zipcode' => '4903',
                  'area' => 'Torrijos',
                  'province' => 'Marinduque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1162 => 
                array (
                  'zipcode' => '4904',
                  'area' => 'Buenavista',
                  'province' => 'Marinduque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1163 => 
                array (
                  'zipcode' => '4905',
                  'area' => 'Gasan',
                  'province' => 'Marinduque',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1164 => 
                array (
                  'zipcode' => '5000',
                  'area' => 'Iloilo City',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1165 => 
                array (
                  'zipcode' => '5001',
                  'area' => 'Pavia',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1166 => 
                array (
                  'zipcode' => '5002',
                  'area' => 'Santa Barbara',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1167 => 
                array (
                  'zipcode' => '5003',
                  'area' => 'Leganes',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1168 => 
                array (
                  'zipcode' => '5004',
                  'area' => 'Zarraga',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1169 => 
                array (
                  'zipcode' => '5005',
                  'area' => 'New Lucena',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1170 => 
                array (
                  'zipcode' => '5006',
                  'area' => 'Dumangas',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1171 => 
                array (
                  'zipcode' => '5007',
                  'area' => 'Barotac Nuevo',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1172 => 
                array (
                  'zipcode' => '5008',
                  'area' => 'Pototan',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1173 => 
                array (
                  'zipcode' => '5009',
                  'area' => 'Anilao',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1174 => 
                array (
                  'zipcode' => '5010',
                  'area' => 'Banate',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1175 => 
                array (
                  'zipcode' => '5011',
                  'area' => 'Barotac Viejo',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1176 => 
                array (
                  'zipcode' => '5012',
                  'area' => 'Ajuy',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1177 => 
                array (
                  'zipcode' => '5013',
                  'area' => 'Concepcion',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1178 => 
                array (
                  'zipcode' => '5014',
                  'area' => 'Sara',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1179 => 
                array (
                  'zipcode' => '5015',
                  'area' => 'San Dionisio',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1180 => 
                array (
                  'zipcode' => '5016',
                  'area' => 'Batad',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1181 => 
                array (
                  'zipcode' => '5017',
                  'area' => 'Estancia',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1182 => 
                array (
                  'zipcode' => '5018',
                  'area' => 'Balasan',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1183 => 
                array (
                  'zipcode' => '5019',
                  'area' => 'Carles',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1184 => 
                array (
                  'zipcode' => '5020',
                  'area' => 'Oton',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1185 => 
                array (
                  'zipcode' => '5021',
                  'area' => 'Tigbauan',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1186 => 
                array (
                  'zipcode' => '5022',
                  'area' => 'Guimbal',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1187 => 
                array (
                  'zipcode' => '5023',
                  'area' => 'Miagao',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1188 => 
                array (
                  'zipcode' => '5024',
                  'area' => 'San Joaquin',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1189 => 
                array (
                  'zipcode' => '5025',
                  'area' => 'San Miguel',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1190 => 
                array (
                  'zipcode' => '5026',
                  'area' => 'Leon',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1191 => 
                array (
                  'zipcode' => '5027',
                  'area' => 'Tubungan',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1192 => 
                array (
                  'zipcode' => '5028',
                  'area' => 'Alimodian',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1193 => 
                array (
                  'zipcode' => '5029',
                  'area' => 'Igbaras',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1194 => 
                array (
                  'zipcode' => '5030',
                  'area' => 'Maasin',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1195 => 
                array (
                  'zipcode' => '5031',
                  'area' => 'Cabatuan',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1196 => 
                array (
                  'zipcode' => '5032',
                  'area' => 'Mina',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1197 => 
                array (
                  'zipcode' => '5033',
                  'area' => 'Badiangan',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1198 => 
                array (
                  'zipcode' => '5034',
                  'area' => 'Janiuay',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1199 => 
                array (
                  'zipcode' => '5035',
                  'area' => 'Dingle',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1200 => 
                array (
                  'zipcode' => '5036',
                  'area' => 'San Enrique',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1201 => 
                array (
                  'zipcode' => '5037',
                  'area' => 'Passi',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1202 => 
                array (
                  'zipcode' => '5038',
                  'area' => 'Duenas',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1203 => 
                array (
                  'zipcode' => '5039',
                  'area' => 'San Rafael',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1204 => 
                array (
                  'zipcode' => '5040',
                  'area' => 'Calinog',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1205 => 
                array (
                  'zipcode' => '5041',
                  'area' => 'Bingawan',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1206 => 
                array (
                  'zipcode' => '5042',
                  'area' => 'Lambunao',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1207 => 
                array (
                  'zipcode' => '5043',
                  'area' => 'Lemery',
                  'province' => 'Iloilo',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1208 => 
                array (
                  'zipcode' => '5044',
                  'area' => 'Buenavista',
                  'province' => 'Guimaras',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1209 => 
                array (
                  'zipcode' => '5045',
                  'area' => 'Jordan',
                  'province' => 'Guimaras',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1210 => 
                array (
                  'zipcode' => '5046',
                  'area' => 'Nueva Valencia',
                  'province' => 'Guimaras',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1211 => 
                array (
                  'zipcode' => '5047',
                  'area' => 'San Lorenzo',
                  'province' => 'Guimaras',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1212 => 
                array (
                  'zipcode' => '5048',
                  'area' => 'Sibunag',
                  'province' => 'Guimaras',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1213 => 
                array (
                  'zipcode' => '5100',
                  'area' => 'San Jose',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1214 => 
                array (
                  'zipcode' => '5101',
                  'area' => 'Magsaysay',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1215 => 
                array (
                  'zipcode' => '5102',
                  'area' => 'Calintaan',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1216 => 
                array (
                  'zipcode' => '5103',
                  'area' => 'Rizal',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1217 => 
                array (
                  'zipcode' => '5104',
                  'area' => 'Sablayan',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1218 => 
                array (
                  'zipcode' => '5105',
                  'area' => 'Santa Cruz',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1219 => 
                array (
                  'zipcode' => '5106',
                  'area' => 'Mamburao',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1220 => 
                array (
                  'zipcode' => '5107',
                  'area' => 'Paluan',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1221 => 
                array (
                  'zipcode' => '5108',
                  'area' => 'Abra de Ilog',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1222 => 
                array (
                  'zipcode' => '5109',
                  'area' => 'Lubang',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1223 => 
                array (
                  'zipcode' => '5110',
                  'area' => 'Tilik',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1224 => 
                array (
                  'zipcode' => '5111',
                  'area' => 'Looc',
                  'province' => 'Occidental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1225 => 
                array (
                  'zipcode' => '5200',
                  'area' => 'Calapan',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1226 => 
                array (
                  'zipcode' => '5201',
                  'area' => 'Baco',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1227 => 
                array (
                  'zipcode' => '5202',
                  'area' => 'San Teodoro',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1228 => 
                array (
                  'zipcode' => '5203',
                  'area' => 'Puerto Galera',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1229 => 
                array (
                  'zipcode' => '5204',
                  'area' => 'Naujan',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1230 => 
                array (
                  'zipcode' => '5205',
                  'area' => 'Victoria',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1231 => 
                array (
                  'zipcode' => '5206',
                  'area' => 'Pola',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1232 => 
                array (
                  'zipcode' => '5207',
                  'area' => 'Socorro',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1233 => 
                array (
                  'zipcode' => '5208',
                  'area' => 'Pinamalayan',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1234 => 
                array (
                  'zipcode' => '5209',
                  'area' => 'Gloria',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1235 => 
                array (
                  'zipcode' => '5210',
                  'area' => 'Bansud',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1236 => 
                array (
                  'zipcode' => '5211',
                  'area' => 'Bongabong',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1237 => 
                array (
                  'zipcode' => '5212',
                  'area' => 'Roxas',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1238 => 
                array (
                  'zipcode' => '5213',
                  'area' => 'Mansalay',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1239 => 
                array (
                  'zipcode' => '5214',
                  'area' => 'Bulalacao',
                  'province' => 'Oriental Mindoro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1240 => 
                array (
                  'zipcode' => '5300',
                  'area' => 'Puerto Princesa',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1241 => 
                array (
                  'zipcode' => '5301',
                  'area' => 'Iwahig Penal Colony',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1242 => 
                array (
                  'zipcode' => '5302',
                  'area' => 'Aborlan',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1243 => 
                array (
                  'zipcode' => '5303',
                  'area' => 'Narra (Panacan)',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1244 => 
                array (
                  'zipcode' => '5304',
                  'area' => 'Quezon',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1245 => 
                array (
                  'zipcode' => '5305',
                  'area' => 'Brooke\'s Point',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1246 => 
                array (
                  'zipcode' => '5306',
                  'area' => 'Bataraza',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1247 => 
                array (
                  'zipcode' => '5307',
                  'area' => 'Balabac',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1248 => 
                array (
                  'zipcode' => '5308',
                  'area' => 'Roxas',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1249 => 
                array (
                  'zipcode' => '5309',
                  'area' => 'San Vicente',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1250 => 
                array (
                  'zipcode' => '5310',
                  'area' => 'Dumaran',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1251 => 
                array (
                  'zipcode' => '5311',
                  'area' => 'Araceli',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1252 => 
                array (
                  'zipcode' => '5312',
                  'area' => 'Taytay',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1253 => 
                array (
                  'zipcode' => '5313',
                  'area' => 'El Nido (Bacuit)',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1254 => 
                array (
                  'zipcode' => '5314',
                  'area' => 'Linapacan',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1255 => 
                array (
                  'zipcode' => '5315',
                  'area' => 'Culion',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1256 => 
                array (
                  'zipcode' => '5316',
                  'area' => 'Coron',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1257 => 
                array (
                  'zipcode' => '5317',
                  'area' => 'Busuanga',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1258 => 
                array (
                  'zipcode' => '5318',
                  'area' => 'Cuyo',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1259 => 
                array (
                  'zipcode' => '5319',
                  'area' => 'Magsaysay',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1260 => 
                array (
                  'zipcode' => '5320',
                  'area' => 'Agutaya',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1261 => 
                array (
                  'zipcode' => '5321',
                  'area' => 'Cagayancillo',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1262 => 
                array (
                  'zipcode' => '5322',
                  'area' => 'Kalayaan (Spratly Islands)',
                  'province' => 'Palawan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1263 => 
                array (
                  'zipcode' => '5400',
                  'area' => 'Masbate City',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1264 => 
                array (
                  'zipcode' => '5401',
                  'area' => 'Mobo',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1265 => 
                array (
                  'zipcode' => '5402',
                  'area' => 'Uson',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1266 => 
                array (
                  'zipcode' => '5403',
                  'area' => 'Dimasalang',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1267 => 
                array (
                  'zipcode' => '5404',
                  'area' => 'Palanas',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1268 => 
                array (
                  'zipcode' => '5405',
                  'area' => 'Cataingan',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1269 => 
                array (
                  'zipcode' => '5406',
                  'area' => 'Pio V. Corpuz',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1270 => 
                array (
                  'zipcode' => '5407',
                  'area' => 'Esperanza',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1271 => 
                array (
                  'zipcode' => '5408',
                  'area' => 'Placer',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1272 => 
                array (
                  'zipcode' => '5409',
                  'area' => 'Cawayan',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1273 => 
                array (
                  'zipcode' => '5410',
                  'area' => 'Milagros',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1274 => 
                array (
                  'zipcode' => '5411',
                  'area' => 'Mandaon',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1275 => 
                array (
                  'zipcode' => '5412',
                  'area' => 'Balud',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1276 => 
                array (
                  'zipcode' => '5413',
                  'area' => 'Baleno',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1277 => 
                array (
                  'zipcode' => '5414',
                  'area' => 'Aroroy',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1278 => 
                array (
                  'zipcode' => '5415',
                  'area' => 'Batuan',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1279 => 
                array (
                  'zipcode' => '5416',
                  'area' => 'San Fernando',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1280 => 
                array (
                  'zipcode' => '5417',
                  'area' => 'San Jacinto',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1281 => 
                array (
                  'zipcode' => '5418',
                  'area' => 'Monreal',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1282 => 
                array (
                  'zipcode' => '5419',
                  'area' => 'Claveria',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1283 => 
                array (
                  'zipcode' => '5420',
                  'area' => 'San Pascual',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1284 => 
                array (
                  'zipcode' => '5421',
                  'area' => 'Buenavista',
                  'province' => 'Masbate',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1285 => 
                array (
                  'zipcode' => '5500',
                  'area' => 'Romblon',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1286 => 
                array (
                  'zipcode' => '5501',
                  'area' => 'San Agustin',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1287 => 
                array (
                  'zipcode' => '5502',
                  'area' => 'Santa Maria (Imelda)',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1288 => 
                array (
                  'zipcode' => '5503',
                  'area' => 'Calatrava',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1289 => 
                array (
                  'zipcode' => '5504',
                  'area' => 'San Andres',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1290 => 
                array (
                  'zipcode' => '5505',
                  'area' => 'Odiongan',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1291 => 
                array (
                  'zipcode' => '5506',
                  'area' => 'Ferrol',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1292 => 
                array (
                  'zipcode' => '5507',
                  'area' => 'Looc',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1293 => 
                array (
                  'zipcode' => '5508',
                  'area' => 'Santa Fe',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1294 => 
                array (
                  'zipcode' => '5509',
                  'area' => 'Alcantara',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1295 => 
                array (
                  'zipcode' => '5510',
                  'area' => 'San Jose',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1296 => 
                array (
                  'zipcode' => '5511',
                  'area' => 'Magdiwang',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1297 => 
                array (
                  'zipcode' => '5512',
                  'area' => 'Cajidiocan',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1298 => 
                array (
                  'zipcode' => '5513',
                  'area' => 'San Fernando',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1299 => 
                array (
                  'zipcode' => '5514',
                  'area' => 'Corcuera',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1300 => 
                array (
                  'zipcode' => '5515',
                  'area' => 'Banton (Jones)',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1301 => 
                array (
                  'zipcode' => '5516',
                  'area' => 'Concepcion',
                  'province' => 'Romblon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1302 => 
                array (
                  'zipcode' => '5600',
                  'area' => 'Kalibo',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1303 => 
                array (
                  'zipcode' => '5601',
                  'area' => 'Banga',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1304 => 
                array (
                  'zipcode' => '5602',
                  'area' => 'Libacao',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1305 => 
                array (
                  'zipcode' => '5603',
                  'area' => 'Madalag',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1306 => 
                array (
                  'zipcode' => '5604',
                  'area' => 'Numancia',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1307 => 
                array (
                  'zipcode' => '5605',
                  'area' => 'Lezo',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1308 => 
                array (
                  'zipcode' => '5606',
                  'area' => 'Malinao',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1309 => 
                array (
                  'zipcode' => '5607',
                  'area' => 'Nabas',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1310 => 
                array (
                  'zipcode' => '5608',
                  'area' => 'Malay',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1311 => 
                array (
                  'zipcode' => '5609',
                  'area' => 'Buruanga',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1312 => 
                array (
                  'zipcode' => '5610',
                  'area' => 'New Washington',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1313 => 
                array (
                  'zipcode' => '5611',
                  'area' => 'Makato',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1314 => 
                array (
                  'zipcode' => '5612',
                  'area' => 'Tangalan',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1315 => 
                array (
                  'zipcode' => '5613',
                  'area' => 'Ibajay',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1316 => 
                array (
                  'zipcode' => '5614',
                  'area' => 'Balete',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1317 => 
                array (
                  'zipcode' => '5615',
                  'area' => 'Batan',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1318 => 
                array (
                  'zipcode' => '5616',
                  'area' => 'Altavas',
                  'province' => 'Aklan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1319 => 
                array (
                  'zipcode' => '5700',
                  'area' => 'San Jose',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1320 => 
                array (
                  'zipcode' => '5701',
                  'area' => 'Belison',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1321 => 
                array (
                  'zipcode' => '5702',
                  'area' => 'Patnongon',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1322 => 
                array (
                  'zipcode' => '5703',
                  'area' => 'Valderrama',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1323 => 
                array (
                  'zipcode' => '5704',
                  'area' => 'Bugasong',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1324 => 
                array (
                  'zipcode' => '5705',
                  'area' => 'Laua an',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1325 => 
                array (
                  'zipcode' => '5706',
                  'area' => 'Barbaza',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1326 => 
                array (
                  'zipcode' => '5707',
                  'area' => 'Tibiao',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1327 => 
                array (
                  'zipcode' => '5708',
                  'area' => 'Culasi',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1328 => 
                array (
                  'zipcode' => '5709',
                  'area' => 'Sebaste',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1329 => 
                array (
                  'zipcode' => '5710',
                  'area' => 'Libertad',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1330 => 
                array (
                  'zipcode' => '5711',
                  'area' => 'Caluya',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1331 => 
                array (
                  'zipcode' => '5712',
                  'area' => 'Pandan',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1332 => 
                array (
                  'zipcode' => '5713',
                  'area' => 'Sibalom',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1333 => 
                array (
                  'zipcode' => '5714',
                  'area' => 'San Remigio',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1334 => 
                array (
                  'zipcode' => '5715',
                  'area' => 'Hamtic',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1335 => 
                array (
                  'zipcode' => '5716',
                  'area' => 'Tobias Fornier (Dao)',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1336 => 
                array (
                  'zipcode' => '5717',
                  'area' => 'Anini y',
                  'province' => 'Antique',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1337 => 
                array (
                  'zipcode' => '5800',
                  'area' => 'Roxas',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1338 => 
                array (
                  'zipcode' => '5801',
                  'area' => 'Pan ay',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1339 => 
                array (
                  'zipcode' => '5802',
                  'area' => 'Pontevedra',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1340 => 
                array (
                  'zipcode' => '5803',
                  'area' => 'President Roxas',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1341 => 
                array (
                  'zipcode' => '5804',
                  'area' => 'Pilar',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1342 => 
                array (
                  'zipcode' => '5805',
                  'area' => 'Ivisan',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1343 => 
                array (
                  'zipcode' => '5806',
                  'area' => 'Sapian',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1344 => 
                array (
                  'zipcode' => '5807',
                  'area' => 'Mambusao',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1345 => 
                array (
                  'zipcode' => '5808',
                  'area' => 'Jamindan',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1346 => 
                array (
                  'zipcode' => '5809',
                  'area' => 'Ma ayon',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1347 => 
                array (
                  'zipcode' => '5810',
                  'area' => 'Dao',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1348 => 
                array (
                  'zipcode' => '5811',
                  'area' => 'Cuartero',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1349 => 
                array (
                  'zipcode' => '5812',
                  'area' => 'Dumarao',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1350 => 
                array (
                  'zipcode' => '5813',
                  'area' => 'Dumalag',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1351 => 
                array (
                  'zipcode' => '5814',
                  'area' => 'Tapaz',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1352 => 
                array (
                  'zipcode' => '5815',
                  'area' => 'Panitan',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1353 => 
                array (
                  'zipcode' => '5816',
                  'area' => 'Sigma',
                  'province' => 'Capiz',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1354 => 
                array (
                  'zipcode' => '6000',
                  'area' => 'Cebu City',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1355 => 
                array (
                  'zipcode' => '6001',
                  'area' => 'Consolacion',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1356 => 
                array (
                  'zipcode' => '6002',
                  'area' => 'Liloan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1357 => 
                array (
                  'zipcode' => '6003',
                  'area' => 'Compostela',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1358 => 
                array (
                  'zipcode' => '6004',
                  'area' => 'Danao',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1359 => 
                array (
                  'zipcode' => '6005',
                  'area' => 'Carmen',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1360 => 
                array (
                  'zipcode' => '6006',
                  'area' => 'Catmon',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1361 => 
                array (
                  'zipcode' => '6007',
                  'area' => 'Sogod',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1362 => 
                array (
                  'zipcode' => '6008',
                  'area' => 'Borbon',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1363 => 
                array (
                  'zipcode' => '6009',
                  'area' => 'Tabogon',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1364 => 
                array (
                  'zipcode' => '6010',
                  'area' => 'Bogo',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1365 => 
                array (
                  'zipcode' => '6011',
                  'area' => 'San Remigio',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1366 => 
                array (
                  'zipcode' => '6012',
                  'area' => 'Medellin',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1367 => 
                array (
                  'zipcode' => '6013',
                  'area' => 'Daanbantayan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1368 => 
                array (
                  'zipcode' => '6014',
                  'area' => 'Mandaue',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1369 => 
                array (
                  'zipcode' => '6015',
                  'area' => 'Lapu Lapu (Opon)',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1370 => 
                array (
                  'zipcode' => '6016',
                  'area' => 'Mactan Airport',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1371 => 
                array (
                  'zipcode' => '6017',
                  'area' => 'Cordova',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1372 => 
                array (
                  'zipcode' => '6018',
                  'area' => 'San Fernando',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1373 => 
                array (
                  'zipcode' => '6019',
                  'area' => 'Carcar',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1374 => 
                array (
                  'zipcode' => '6020',
                  'area' => 'Sibonga',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1375 => 
                array (
                  'zipcode' => '6021',
                  'area' => 'Argao',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1376 => 
                array (
                  'zipcode' => '6022',
                  'area' => 'Dalaguete',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1377 => 
                array (
                  'zipcode' => '6023',
                  'area' => 'Alcoy',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1378 => 
                array (
                  'zipcode' => '6024',
                  'area' => 'Boljoon',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1379 => 
                array (
                  'zipcode' => '6025',
                  'area' => 'Oslob',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1380 => 
                array (
                  'zipcode' => '6026',
                  'area' => 'Santander',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1381 => 
                array (
                  'zipcode' => '6027',
                  'area' => 'Samboan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1382 => 
                array (
                  'zipcode' => '6028',
                  'area' => 'Ginatilan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1383 => 
                array (
                  'zipcode' => '6029',
                  'area' => 'Malabuyoc',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1384 => 
                array (
                  'zipcode' => '6030',
                  'area' => 'Alegria',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1385 => 
                array (
                  'zipcode' => '6031',
                  'area' => 'Badian',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1386 => 
                array (
                  'zipcode' => '6032',
                  'area' => 'Moalboal',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1387 => 
                array (
                  'zipcode' => '6033',
                  'area' => 'Alcantara',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1388 => 
                array (
                  'zipcode' => '6034',
                  'area' => 'Ronda',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1389 => 
                array (
                  'zipcode' => '6035',
                  'area' => 'Dumanjug',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1390 => 
                array (
                  'zipcode' => '6036',
                  'area' => 'Barili',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1391 => 
                array (
                  'zipcode' => '6037',
                  'area' => 'Naga',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1392 => 
                array (
                  'zipcode' => '6038',
                  'area' => 'Toledo',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1393 => 
                array (
                  'zipcode' => '6039',
                  'area' => 'Pinamungajan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1394 => 
                array (
                  'zipcode' => '6040',
                  'area' => 'Aloguinsan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1395 => 
                array (
                  'zipcode' => '6041',
                  'area' => 'Balamban',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1396 => 
                array (
                  'zipcode' => '6042',
                  'area' => 'Asturias',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1397 => 
                array (
                  'zipcode' => '6043',
                  'area' => 'Tuburan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1398 => 
                array (
                  'zipcode' => '6044',
                  'area' => 'Tabuelan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1399 => 
                array (
                  'zipcode' => '6045',
                  'area' => 'Talisay',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1400 => 
                array (
                  'zipcode' => '6046',
                  'area' => 'Minglanilla',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1401 => 
                array (
                  'zipcode' => '6047',
                  'area' => 'Santa Fe',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1402 => 
                array (
                  'zipcode' => '6048',
                  'area' => 'Pilar',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1403 => 
                array (
                  'zipcode' => '6049',
                  'area' => 'Poro',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1404 => 
                array (
                  'zipcode' => '6050',
                  'area' => 'San Francisco',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1405 => 
                array (
                  'zipcode' => '6051',
                  'area' => 'Tudela',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1406 => 
                array (
                  'zipcode' => '6052',
                  'area' => 'Bantayan',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1407 => 
                array (
                  'zipcode' => '6053',
                  'area' => 'Madridejos',
                  'province' => 'Cebu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1408 => 
                array (
                  'zipcode' => '6100',
                  'area' => 'Bacolod',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1409 => 
                array (
                  'zipcode' => '6101',
                  'area' => 'Bago',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1410 => 
                array (
                  'zipcode' => '6102',
                  'area' => 'Pulupandan',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1411 => 
                array (
                  'zipcode' => '6103',
                  'area' => 'Valladolid',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1412 => 
                array (
                  'zipcode' => '6104',
                  'area' => 'San Enrique',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1413 => 
                array (
                  'zipcode' => '6105',
                  'area' => 'Pontevedra',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1414 => 
                array (
                  'zipcode' => '6106',
                  'area' => 'Hinigaran',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1415 => 
                array (
                  'zipcode' => '6107',
                  'area' => 'Binalbagan',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1416 => 
                array (
                  'zipcode' => '6108',
                  'area' => 'Himamaylan',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1417 => 
                array (
                  'zipcode' => '6109',
                  'area' => 'Ilog',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1418 => 
                array (
                  'zipcode' => '6110',
                  'area' => 'Candoni',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1419 => 
                array (
                  'zipcode' => '6111',
                  'area' => 'Kabankalan',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1420 => 
                array (
                  'zipcode' => '6112',
                  'area' => 'Cauayan',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1421 => 
                array (
                  'zipcode' => '6113',
                  'area' => 'Sipalay',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1422 => 
                array (
                  'zipcode' => '6114',
                  'area' => 'Hinoba an',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1423 => 
                array (
                  'zipcode' => '6115',
                  'area' => 'Talisay',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1424 => 
                array (
                  'zipcode' => '6116',
                  'area' => 'Silay',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1425 => 
                array (
                  'zipcode' => '6117',
                  'area' => 'Salvador Benedicto',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1426 => 
                array (
                  'zipcode' => '6118',
                  'area' => 'Enrique B. Magalona',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1427 => 
                array (
                  'zipcode' => '6119',
                  'area' => 'Victorias',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1428 => 
                array (
                  'zipcode' => '6120',
                  'area' => 'Manapla',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1429 => 
                array (
                  'zipcode' => '6121',
                  'area' => 'Cadiz',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1430 => 
                array (
                  'zipcode' => '6122',
                  'area' => 'Sagay',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1431 => 
                array (
                  'zipcode' => '6123',
                  'area' => 'Paraiso (Fabrica)',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1432 => 
                array (
                  'zipcode' => '6124',
                  'area' => 'Escalante',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1433 => 
                array (
                  'zipcode' => '6125',
                  'area' => 'Toboso',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1434 => 
                array (
                  'zipcode' => '6126',
                  'area' => 'Calatrava',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1435 => 
                array (
                  'zipcode' => '6127',
                  'area' => 'San Carlos',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1436 => 
                array (
                  'zipcode' => '6128',
                  'area' => 'Isabela',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1437 => 
                array (
                  'zipcode' => '6129',
                  'area' => 'Murcia',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1438 => 
                array (
                  'zipcode' => '6130',
                  'area' => 'La Carlota',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1439 => 
                array (
                  'zipcode' => '6131',
                  'area' => 'La Castellana',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1440 => 
                array (
                  'zipcode' => '6132',
                  'area' => 'Moises Padilla',
                  'province' => 'Negros Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1441 => 
                array (
                  'zipcode' => '6200',
                  'area' => 'Dumaguete',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1442 => 
                array (
                  'zipcode' => '6201',
                  'area' => 'Sibulan',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1443 => 
                array (
                  'zipcode' => '6202',
                  'area' => 'San Jose',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1444 => 
                array (
                  'zipcode' => '6203',
                  'area' => 'Amlan',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1445 => 
                array (
                  'zipcode' => '6204',
                  'area' => 'Tanjay',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1446 => 
                array (
                  'zipcode' => '6205',
                  'area' => 'Pamplona',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1447 => 
                array (
                  'zipcode' => '6206',
                  'area' => 'Bais',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1448 => 
                array (
                  'zipcode' => '6207',
                  'area' => 'Mabinay',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1449 => 
                array (
                  'zipcode' => '6208',
                  'area' => 'Manjuyod',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1450 => 
                array (
                  'zipcode' => '6209',
                  'area' => 'Bindoy',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1451 => 
                array (
                  'zipcode' => '6210',
                  'area' => 'Ayungon',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1452 => 
                array (
                  'zipcode' => '6211',
                  'area' => 'Tayasan',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1453 => 
                array (
                  'zipcode' => '6212',
                  'area' => 'Jimalalud',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1454 => 
                array (
                  'zipcode' => '6213',
                  'area' => 'La Libertad',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1455 => 
                array (
                  'zipcode' => '6214',
                  'area' => 'Guihulngan',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1456 => 
                array (
                  'zipcode' => '6215',
                  'area' => 'Valencia',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1457 => 
                array (
                  'zipcode' => '6216',
                  'area' => 'Bacong',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1458 => 
                array (
                  'zipcode' => '6217',
                  'area' => 'Dauin',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1459 => 
                array (
                  'zipcode' => '6218',
                  'area' => 'Zamboanguita',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1460 => 
                array (
                  'zipcode' => '6219',
                  'area' => 'Siaton',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1461 => 
                array (
                  'zipcode' => '6220',
                  'area' => 'Santa Catalina',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1462 => 
                array (
                  'zipcode' => '6221',
                  'area' => 'Bayawan',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1463 => 
                array (
                  'zipcode' => '6222',
                  'area' => 'Basay',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1464 => 
                array (
                  'zipcode' => '6223',
                  'area' => 'Canlaon',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1465 => 
                array (
                  'zipcode' => '6224',
                  'area' => 'Vallehermoso',
                  'province' => 'Negros Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1466 => 
                array (
                  'zipcode' => '6225',
                  'area' => 'Siquijor',
                  'province' => 'Siquijor',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1467 => 
                array (
                  'zipcode' => '6226',
                  'area' => 'Larena',
                  'province' => 'Siquijor',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1468 => 
                array (
                  'zipcode' => '6227',
                  'area' => 'San Juan',
                  'province' => 'Siquijor',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1469 => 
                array (
                  'zipcode' => '6228',
                  'area' => 'Lazi',
                  'province' => 'Siquijor',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1470 => 
                array (
                  'zipcode' => '6229',
                  'area' => 'Maria',
                  'province' => 'Siquijor',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1471 => 
                array (
                  'zipcode' => '6230',
                  'area' => 'Enrique Villanueva',
                  'province' => 'Siquijor',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1472 => 
                array (
                  'zipcode' => '6300',
                  'area' => 'Tagbilaran',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1473 => 
                array (
                  'zipcode' => '6301',
                  'area' => 'Baclayon',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1474 => 
                array (
                  'zipcode' => '6302',
                  'area' => 'Alburquerque',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1475 => 
                array (
                  'zipcode' => '6303',
                  'area' => 'Loay',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1476 => 
                array (
                  'zipcode' => '6304',
                  'area' => 'Lila',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1477 => 
                array (
                  'zipcode' => '6305',
                  'area' => 'Dimiao',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1478 => 
                array (
                  'zipcode' => '6306',
                  'area' => 'Valencia',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1479 => 
                array (
                  'zipcode' => '6307',
                  'area' => 'Garcia Hernandez',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1480 => 
                array (
                  'zipcode' => '6308',
                  'area' => 'Jagna',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1481 => 
                array (
                  'zipcode' => '6309',
                  'area' => 'Duero',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1482 => 
                array (
                  'zipcode' => '6310',
                  'area' => 'Guindulman',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1483 => 
                array (
                  'zipcode' => '6311',
                  'area' => 'Anda',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1484 => 
                array (
                  'zipcode' => '6312',
                  'area' => 'Candijay',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1485 => 
                array (
                  'zipcode' => '6313',
                  'area' => 'Mabini',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1486 => 
                array (
                  'zipcode' => '6314',
                  'area' => 'Alicia',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1487 => 
                array (
                  'zipcode' => '6315',
                  'area' => 'Ubay',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1488 => 
                array (
                  'zipcode' => '6316',
                  'area' => 'Loboc',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1489 => 
                array (
                  'zipcode' => '6317',
                  'area' => 'Bilar',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1490 => 
                array (
                  'zipcode' => '6318',
                  'area' => 'Batuan',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1491 => 
                array (
                  'zipcode' => '6319',
                  'area' => 'Carmen',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1492 => 
                array (
                  'zipcode' => '6320',
                  'area' => 'Sierra Bullones',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1493 => 
                array (
                  'zipcode' => '6321',
                  'area' => 'Pilar',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1494 => 
                array (
                  'zipcode' => '6322',
                  'area' => 'Dagohoy',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1495 => 
                array (
                  'zipcode' => '6323',
                  'area' => 'San Miguel',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1496 => 
                array (
                  'zipcode' => '6324',
                  'area' => 'Trinidad',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1497 => 
                array (
                  'zipcode' => '6325',
                  'area' => 'Talibon',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1498 => 
                array (
                  'zipcode' => '6326',
                  'area' => 'Bien Unido',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1499 => 
                array (
                  'zipcode' => '6327',
                  'area' => 'Loon',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1500 => 
                array (
                  'zipcode' => '6328',
                  'area' => 'Calape',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1501 => 
                array (
                  'zipcode' => '6329',
                  'area' => 'Tubigon',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1502 => 
                array (
                  'zipcode' => '6330',
                  'area' => 'Clarin',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1503 => 
                array (
                  'zipcode' => '6331',
                  'area' => 'Sagbayan',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1504 => 
                array (
                  'zipcode' => '6332',
                  'area' => 'Inabanga',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1505 => 
                array (
                  'zipcode' => '6333',
                  'area' => 'Buenavista',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1506 => 
                array (
                  'zipcode' => '6334',
                  'area' => 'Jetafe',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1507 => 
                array (
                  'zipcode' => '6335',
                  'area' => 'Antequera',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1508 => 
                array (
                  'zipcode' => '6336',
                  'area' => 'Maribojoc',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1509 => 
                array (
                  'zipcode' => '6337',
                  'area' => 'Corella',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1510 => 
                array (
                  'zipcode' => '6338',
                  'area' => 'Sikatuna',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1511 => 
                array (
                  'zipcode' => '6339',
                  'area' => 'Dauis',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1512 => 
                array (
                  'zipcode' => '6340',
                  'area' => 'Panglao',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1513 => 
                array (
                  'zipcode' => '6341',
                  'area' => 'Cortes',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1514 => 
                array (
                  'zipcode' => '6342',
                  'area' => 'Balilihan',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1515 => 
                array (
                  'zipcode' => '6343',
                  'area' => 'Catigbian',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1516 => 
                array (
                  'zipcode' => '6344',
                  'area' => 'Danao',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1517 => 
                array (
                  'zipcode' => '6345',
                  'area' => 'San Isidro',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1518 => 
                array (
                  'zipcode' => '6346',
                  'area' => 'Pres. Carlos P. Garcia (Pitogo)',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1519 => 
                array (
                  'zipcode' => '6347',
                  'area' => 'Sevilla',
                  'province' => 'Bohol',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1520 => 
                array (
                  'zipcode' => '6400',
                  'area' => 'Catarman',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1521 => 
                array (
                  'zipcode' => '6401',
                  'area' => 'Bobon',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1522 => 
                array (
                  'zipcode' => '6402',
                  'area' => 'San Jose',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1523 => 
                array (
                  'zipcode' => '6403',
                  'area' => 'Lope de Vega',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1524 => 
                array (
                  'zipcode' => '6404',
                  'area' => 'Lavezares',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1525 => 
                array (
                  'zipcode' => '6405',
                  'area' => 'Allen',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1526 => 
                array (
                  'zipcode' => '6406',
                  'area' => 'Victoria',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1527 => 
                array (
                  'zipcode' => '6407',
                  'area' => 'San Antonio',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1528 => 
                array (
                  'zipcode' => '6408',
                  'area' => 'Capul',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1529 => 
                array (
                  'zipcode' => '6409',
                  'area' => 'San Isidro',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1530 => 
                array (
                  'zipcode' => '6410',
                  'area' => 'Biri',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1531 => 
                array (
                  'zipcode' => '6411',
                  'area' => 'Laoang',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1532 => 
                array (
                  'zipcode' => '6412',
                  'area' => 'Mapanas',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1533 => 
                array (
                  'zipcode' => '6413',
                  'area' => 'Pambujan',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1534 => 
                array (
                  'zipcode' => '6414',
                  'area' => 'Silvino Lobos',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1535 => 
                array (
                  'zipcode' => '6415',
                  'area' => 'San Roque',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1536 => 
                array (
                  'zipcode' => '6416',
                  'area' => 'Rosario',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1537 => 
                array (
                  'zipcode' => '6417',
                  'area' => 'Mondragon',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1538 => 
                array (
                  'zipcode' => '6418',
                  'area' => 'Catubig',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1539 => 
                array (
                  'zipcode' => '6419',
                  'area' => 'San Vicente',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1540 => 
                array (
                  'zipcode' => '6420',
                  'area' => 'Las Navas',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1541 => 
                array (
                  'zipcode' => '6421',
                  'area' => 'Palapag',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1542 => 
                array (
                  'zipcode' => '6422',
                  'area' => 'Gamay',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1543 => 
                array (
                  'zipcode' => '6423',
                  'area' => 'Lapinig',
                  'province' => 'Northern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1544 => 
                array (
                  'zipcode' => '6500',
                  'area' => 'Tacloban',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1545 => 
                array (
                  'zipcode' => '6501',
                  'area' => 'Palo',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1546 => 
                array (
                  'zipcode' => '6502',
                  'area' => 'Tanauan',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1547 => 
                array (
                  'zipcode' => '6503',
                  'area' => 'Tolosa',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1548 => 
                array (
                  'zipcode' => '6504',
                  'area' => 'Tabontabon',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1549 => 
                array (
                  'zipcode' => '6505',
                  'area' => 'Dulag',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1550 => 
                array (
                  'zipcode' => '6506',
                  'area' => 'Julita',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1551 => 
                array (
                  'zipcode' => '6507',
                  'area' => 'Mayorga',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1552 => 
                array (
                  'zipcode' => '6508',
                  'area' => 'La Paz',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1553 => 
                array (
                  'zipcode' => '6509',
                  'area' => 'MacArthur',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1554 => 
                array (
                  'zipcode' => '6510',
                  'area' => 'Abuyog',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1555 => 
                array (
                  'zipcode' => '6511',
                  'area' => 'Javier',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1556 => 
                array (
                  'zipcode' => '6512',
                  'area' => 'Mahaplag',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1557 => 
                array (
                  'zipcode' => '6513',
                  'area' => 'Santa Fe',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1558 => 
                array (
                  'zipcode' => '6514',
                  'area' => 'Pastrana',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1559 => 
                array (
                  'zipcode' => '6515',
                  'area' => 'Dagami',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1560 => 
                array (
                  'zipcode' => '6516',
                  'area' => 'Burauen',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1561 => 
                array (
                  'zipcode' => '6517',
                  'area' => 'Alangalang',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1562 => 
                array (
                  'zipcode' => '6518',
                  'area' => 'San Miguel',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1563 => 
                array (
                  'zipcode' => '6519',
                  'area' => 'Barugo',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1564 => 
                array (
                  'zipcode' => '6520',
                  'area' => 'Babatngon',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1565 => 
                array (
                  'zipcode' => '6521',
                  'area' => 'Baybay',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1566 => 
                array (
                  'zipcode' => '6522',
                  'area' => 'Inopacan',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1567 => 
                array (
                  'zipcode' => '6523',
                  'area' => 'Hindang',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1568 => 
                array (
                  'zipcode' => '6524',
                  'area' => 'Hilongos',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1569 => 
                array (
                  'zipcode' => '6525',
                  'area' => 'Bato',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1570 => 
                array (
                  'zipcode' => '6526',
                  'area' => 'Matalom',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1571 => 
                array (
                  'zipcode' => '6527',
                  'area' => 'Jaro',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1572 => 
                array (
                  'zipcode' => '6528',
                  'area' => 'Tunga',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1573 => 
                array (
                  'zipcode' => '6529',
                  'area' => 'Carigara',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1574 => 
                array (
                  'zipcode' => '6530',
                  'area' => 'Capoocan',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1575 => 
                array (
                  'zipcode' => '6531',
                  'area' => 'Kananga',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1576 => 
                array (
                  'zipcode' => '6532',
                  'area' => 'Matag ob',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1577 => 
                array (
                  'zipcode' => '6533',
                  'area' => 'Leyte',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1578 => 
                array (
                  'zipcode' => '6534',
                  'area' => 'Calubian',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1579 => 
                array (
                  'zipcode' => '6535',
                  'area' => 'San Isidro',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1580 => 
                array (
                  'zipcode' => '6536',
                  'area' => 'Tabango',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1581 => 
                array (
                  'zipcode' => '6537',
                  'area' => 'Villaba',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1582 => 
                array (
                  'zipcode' => '6538',
                  'area' => 'Palompon',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1583 => 
                array (
                  'zipcode' => '6539',
                  'area' => 'Isabel',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1584 => 
                array (
                  'zipcode' => '6540',
                  'area' => 'Merida',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1585 => 
                array (
                  'zipcode' => '6541',
                  'area' => 'Ormoc',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1586 => 
                array (
                  'zipcode' => '6542',
                  'area' => 'Albuera',
                  'province' => 'Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1587 => 
                array (
                  'zipcode' => '6543',
                  'area' => 'Naval',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1588 => 
                array (
                  'zipcode' => '6544',
                  'area' => 'Almeria',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1589 => 
                array (
                  'zipcode' => '6545',
                  'area' => 'Kawayan',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1590 => 
                array (
                  'zipcode' => '6546',
                  'area' => 'Maripipi',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1591 => 
                array (
                  'zipcode' => '6547',
                  'area' => 'Culaba',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1592 => 
                array (
                  'zipcode' => '6548',
                  'area' => 'Caibiran',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1593 => 
                array (
                  'zipcode' => '6549',
                  'area' => 'Biliran',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1594 => 
                array (
                  'zipcode' => '6550',
                  'area' => 'Cabucgayan',
                  'province' => 'Biliran',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1595 => 
                array (
                  'zipcode' => '6600',
                  'area' => 'Maasin',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1596 => 
                array (
                  'zipcode' => '6601',
                  'area' => 'Macrohon',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1597 => 
                array (
                  'zipcode' => '6602',
                  'area' => 'Padre Burgos',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1598 => 
                array (
                  'zipcode' => '6603',
                  'area' => 'Malitbog',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1599 => 
                array (
                  'zipcode' => '6604',
                  'area' => 'Bontoc',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1600 => 
                array (
                  'zipcode' => '6605',
                  'area' => 'Tomas Oppus',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1601 => 
                array (
                  'zipcode' => '6606',
                  'area' => 'Sogod',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1602 => 
                array (
                  'zipcode' => '6607',
                  'area' => 'Silago',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1603 => 
                array (
                  'zipcode' => '6608',
                  'area' => 'Hinunangan',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1604 => 
                array (
                  'zipcode' => '6609',
                  'area' => 'Hinundayan',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1605 => 
                array (
                  'zipcode' => '6610',
                  'area' => 'Anahawan',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1606 => 
                array (
                  'zipcode' => '6611',
                  'area' => 'San Juan (Cabalian)',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1607 => 
                array (
                  'zipcode' => '6612',
                  'area' => 'Liloan',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1608 => 
                array (
                  'zipcode' => '6613',
                  'area' => 'San Francisco',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1609 => 
                array (
                  'zipcode' => '6614',
                  'area' => 'Pintuyan',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1610 => 
                array (
                  'zipcode' => '6615',
                  'area' => 'Libagon',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1611 => 
                array (
                  'zipcode' => '6616',
                  'area' => 'Saint Bernard',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1612 => 
                array (
                  'zipcode' => '6617',
                  'area' => 'San Ricardo',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1613 => 
                array (
                  'zipcode' => '6618',
                  'area' => 'Limasawa',
                  'province' => 'Southern Leyte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1614 => 
                array (
                  'zipcode' => '6700',
                  'area' => 'Catbalogan',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1615 => 
                array (
                  'zipcode' => '6701',
                  'area' => 'Jiabong',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1616 => 
                array (
                  'zipcode' => '6702',
                  'area' => 'Motiong',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1617 => 
                array (
                  'zipcode' => '6703',
                  'area' => 'Paranas (Wright)',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1618 => 
                array (
                  'zipcode' => '6704',
                  'area' => 'Tarangnan',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1619 => 
                array (
                  'zipcode' => '6705',
                  'area' => 'Pagsanghan',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1620 => 
                array (
                  'zipcode' => '6706',
                  'area' => 'Gandara',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1621 => 
                array (
                  'zipcode' => '6707',
                  'area' => 'San Jorge',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1622 => 
                array (
                  'zipcode' => '6708',
                  'area' => 'Matuguinao',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1623 => 
                array (
                  'zipcode' => '6709',
                  'area' => 'Santa Margarita',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1624 => 
                array (
                  'zipcode' => '6710',
                  'area' => 'Calbayog',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1625 => 
                array (
                  'zipcode' => '6711',
                  'area' => 'Santo Niño',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1626 => 
                array (
                  'zipcode' => '6712',
                  'area' => 'Tagapul an',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1627 => 
                array (
                  'zipcode' => '6713',
                  'area' => 'Hinabangan',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1628 => 
                array (
                  'zipcode' => '6714',
                  'area' => 'San Sebastian',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1629 => 
                array (
                  'zipcode' => '6715',
                  'area' => 'Calbiga',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1630 => 
                array (
                  'zipcode' => '6716',
                  'area' => 'Pinabacdao',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1631 => 
                array (
                  'zipcode' => '6717',
                  'area' => 'Villareal',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1632 => 
                array (
                  'zipcode' => '6718',
                  'area' => 'Santa Rita',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1633 => 
                array (
                  'zipcode' => '6719',
                  'area' => 'Talalora',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1634 => 
                array (
                  'zipcode' => '6720',
                  'area' => 'Basey',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1635 => 
                array (
                  'zipcode' => '6721',
                  'area' => 'Marabut',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1636 => 
                array (
                  'zipcode' => '6722',
                  'area' => 'Daram',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1637 => 
                array (
                  'zipcode' => '6723',
                  'area' => 'San Jose De Buan',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1638 => 
                array (
                  'zipcode' => '6724',
                  'area' => 'Almagro',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1639 => 
                array (
                  'zipcode' => '6725',
                  'area' => 'Zumarraga',
                  'province' => 'Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1640 => 
                array (
                  'zipcode' => '6800',
                  'area' => 'Borongan',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1641 => 
                array (
                  'zipcode' => '6801',
                  'area' => 'Balangkayan',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1642 => 
                array (
                  'zipcode' => '6802',
                  'area' => 'Maydolong',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1643 => 
                array (
                  'zipcode' => '6803',
                  'area' => 'Llorente',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1644 => 
                array (
                  'zipcode' => '6804',
                  'area' => 'Hernani',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1645 => 
                array (
                  'zipcode' => '6805',
                  'area' => 'General MacArthur',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1646 => 
                array (
                  'zipcode' => '6806',
                  'area' => 'Can avid',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1647 => 
                array (
                  'zipcode' => '6807',
                  'area' => 'Salcedo',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1648 => 
                array (
                  'zipcode' => '6808',
                  'area' => 'Mercedes',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1649 => 
                array (
                  'zipcode' => '6809',
                  'area' => 'Guiuan',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1650 => 
                array (
                  'zipcode' => '6810',
                  'area' => 'Quinapondan',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1651 => 
                array (
                  'zipcode' => '6811',
                  'area' => 'Giporlos',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1652 => 
                array (
                  'zipcode' => '6812',
                  'area' => 'Balangiga',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1653 => 
                array (
                  'zipcode' => '6813',
                  'area' => 'Lawaan',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1654 => 
                array (
                  'zipcode' => '6814',
                  'area' => 'San Julian',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1655 => 
                array (
                  'zipcode' => '6815',
                  'area' => 'Sulat',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1656 => 
                array (
                  'zipcode' => '6816',
                  'area' => 'Taft',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1657 => 
                array (
                  'zipcode' => '6817',
                  'area' => 'Dolores',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1658 => 
                array (
                  'zipcode' => '6818',
                  'area' => 'Oras',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1659 => 
                array (
                  'zipcode' => '6819',
                  'area' => 'Jipapad',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1660 => 
                array (
                  'zipcode' => '6820',
                  'area' => 'Maslog',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1661 => 
                array (
                  'zipcode' => '6821',
                  'area' => 'San Policarpo',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1662 => 
                array (
                  'zipcode' => '6822',
                  'area' => 'Arteche',
                  'province' => 'Eastern Samar',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1663 => 
                array (
                  'zipcode' => '7000',
                  'area' => 'Zamboanga City',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1664 => 
                array (
                  'zipcode' => '7001',
                  'area' => 'Ipil',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1665 => 
                array (
                  'zipcode' => '7002',
                  'area' => 'Roseller T. Lim',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1666 => 
                array (
                  'zipcode' => '7003',
                  'area' => 'Titay',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1667 => 
                array (
                  'zipcode' => '7004',
                  'area' => 'Naga',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1668 => 
                array (
                  'zipcode' => '7005',
                  'area' => 'Kabasalan',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1669 => 
                array (
                  'zipcode' => '7006',
                  'area' => 'Siay',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1670 => 
                array (
                  'zipcode' => '7007',
                  'area' => 'Imelda',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1671 => 
                array (
                  'zipcode' => '7008',
                  'area' => 'Payao',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1672 => 
                array (
                  'zipcode' => '7009',
                  'area' => 'Buug',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1673 => 
                array (
                  'zipcode' => '7010',
                  'area' => 'Mabuhay',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1674 => 
                array (
                  'zipcode' => '7011',
                  'area' => 'Bayog',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1675 => 
                array (
                  'zipcode' => '7012',
                  'area' => 'Talusan',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1676 => 
                array (
                  'zipcode' => '7013',
                  'area' => 'Kumalarang',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1677 => 
                array (
                  'zipcode' => '7014',
                  'area' => 'Lakewood',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1678 => 
                array (
                  'zipcode' => '7015',
                  'area' => 'Dumalinao',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1679 => 
                array (
                  'zipcode' => '7016',
                  'area' => 'Pagadian',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1680 => 
                array (
                  'zipcode' => '7017',
                  'area' => 'Labangan',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1681 => 
                array (
                  'zipcode' => '7018',
                  'area' => 'Tungawan',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1682 => 
                array (
                  'zipcode' => '7019',
                  'area' => 'Tukuran',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1683 => 
                array (
                  'zipcode' => '7020',
                  'area' => 'Aurora',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1684 => 
                array (
                  'zipcode' => '7021',
                  'area' => 'Midsalip',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1685 => 
                array (
                  'zipcode' => '7022',
                  'area' => 'Sominot (Don Mariano Marcos)',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1686 => 
                array (
                  'zipcode' => '7023',
                  'area' => 'Molave',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1687 => 
                array (
                  'zipcode' => '7024',
                  'area' => 'Ramon Magsaysay (Liargo)',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1688 => 
                array (
                  'zipcode' => '7025',
                  'area' => 'Tambulig',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1689 => 
                array (
                  'zipcode' => '7026',
                  'area' => 'Mahayag',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1690 => 
                array (
                  'zipcode' => '7027',
                  'area' => 'Josefina',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1691 => 
                array (
                  'zipcode' => '7028',
                  'area' => 'Dumingag',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1692 => 
                array (
                  'zipcode' => '7029',
                  'area' => 'San Miguel',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1693 => 
                array (
                  'zipcode' => '7030',
                  'area' => 'Dinas',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1694 => 
                array (
                  'zipcode' => '7031',
                  'area' => 'San Pablo',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1695 => 
                array (
                  'zipcode' => '7032',
                  'area' => 'Dimataling',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1696 => 
                array (
                  'zipcode' => '7033',
                  'area' => 'Pitogo',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1697 => 
                array (
                  'zipcode' => '7034',
                  'area' => 'Tabina',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1698 => 
                array (
                  'zipcode' => '7035',
                  'area' => 'Margosatubig',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1699 => 
                array (
                  'zipcode' => '7036',
                  'area' => 'Vincenzo A. Sagun',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1700 => 
                array (
                  'zipcode' => '7037',
                  'area' => 'Lapuyan',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1701 => 
                array (
                  'zipcode' => '7038',
                  'area' => 'Malangas',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1702 => 
                array (
                  'zipcode' => '7039',
                  'area' => 'Diplahan',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1703 => 
                array (
                  'zipcode' => '7040',
                  'area' => 'Alicia',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1704 => 
                array (
                  'zipcode' => '7041',
                  'area' => 'Olutanga',
                  'province' => 'Zamboanga Sibugay',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1705 => 
                array (
                  'zipcode' => '7042',
                  'area' => 'Guipos',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1706 => 
                array (
                  'zipcode' => '7043',
                  'area' => 'Tigbao',
                  'province' => 'Zamboanga del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1707 => 
                array (
                  'zipcode' => '7100',
                  'area' => 'Dipolog',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1708 => 
                array (
                  'zipcode' => '7101',
                  'area' => 'Dapitan',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1709 => 
                array (
                  'zipcode' => '7102',
                  'area' => 'Pres. Manuel A. Roxas',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1710 => 
                array (
                  'zipcode' => '7103',
                  'area' => 'Sibutad',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1711 => 
                array (
                  'zipcode' => '7104',
                  'area' => 'Rizal',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1712 => 
                array (
                  'zipcode' => '7105',
                  'area' => 'Piñan',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1713 => 
                array (
                  'zipcode' => '7106',
                  'area' => 'Polanco',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1714 => 
                array (
                  'zipcode' => '7107',
                  'area' => 'Mutia',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1715 => 
                array (
                  'zipcode' => '7108',
                  'area' => 'Sergio Osmeña Sr.',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1716 => 
                array (
                  'zipcode' => '7109',
                  'area' => 'Katipunan',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1717 => 
                array (
                  'zipcode' => '7110',
                  'area' => 'Manukan',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1718 => 
                array (
                  'zipcode' => '7111',
                  'area' => 'Jose Dalman (Ponot)',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1719 => 
                array (
                  'zipcode' => '7112',
                  'area' => 'Sindangan',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1720 => 
                array (
                  'zipcode' => '7113',
                  'area' => 'Siayan',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1721 => 
                array (
                  'zipcode' => '7114',
                  'area' => 'Salug',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1722 => 
                array (
                  'zipcode' => '7114',
                  'area' => 'Godod',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1723 => 
                array (
                  'zipcode' => '7115',
                  'area' => 'Liloy',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1724 => 
                array (
                  'zipcode' => '7116',
                  'area' => 'Tampilisan',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1725 => 
                array (
                  'zipcode' => '7117',
                  'area' => 'Labason',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1726 => 
                array (
                  'zipcode' => '7118',
                  'area' => 'Gutalac',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1727 => 
                array (
                  'zipcode' => '7119',
                  'area' => 'La Libertad',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1728 => 
                array (
                  'zipcode' => '7120',
                  'area' => 'Siocon',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1729 => 
                array (
                  'zipcode' => '7121',
                  'area' => 'Sirawai',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1730 => 
                array (
                  'zipcode' => '7122',
                  'area' => 'Sibuco',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1731 => 
                array (
                  'zipcode' => '7123',
                  'area' => 'Baliguian',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1732 => 
                array (
                  'zipcode' => '7124',
                  'area' => 'Kalawit',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1733 => 
                array (
                  'zipcode' => '7125',
                  'area' => 'Leon B. Postigo',
                  'province' => 'Zamboanga del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1734 => 
                array (
                  'zipcode' => '7200',
                  'area' => 'Ozamiz',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1735 => 
                array (
                  'zipcode' => '7201',
                  'area' => 'Clarin',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1736 => 
                array (
                  'zipcode' => '7202',
                  'area' => 'Tudela',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1737 => 
                array (
                  'zipcode' => '7203',
                  'area' => 'Sinacaban',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1738 => 
                array (
                  'zipcode' => '7204',
                  'area' => 'Jimenez',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1739 => 
                array (
                  'zipcode' => '7205',
                  'area' => 'Panaon',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1740 => 
                array (
                  'zipcode' => '7206',
                  'area' => 'Aloran',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1741 => 
                array (
                  'zipcode' => '7207',
                  'area' => 'Oroquieta',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1742 => 
                array (
                  'zipcode' => '7208',
                  'area' => 'Lopez Jaena',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1743 => 
                array (
                  'zipcode' => '7209',
                  'area' => 'Plaridel',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1744 => 
                array (
                  'zipcode' => '7210',
                  'area' => 'Calamba',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1745 => 
                array (
                  'zipcode' => '7211',
                  'area' => 'Baliangao',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1746 => 
                array (
                  'zipcode' => '7212',
                  'area' => 'Sapang Dalaga',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1747 => 
                array (
                  'zipcode' => '7213',
                  'area' => 'Concepcion',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1748 => 
                array (
                  'zipcode' => '7214',
                  'area' => 'Tangub',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1749 => 
                array (
                  'zipcode' => '7215',
                  'area' => 'Bonifacio',
                  'province' => 'Misamis Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1750 => 
                array (
                  'zipcode' => '7300',
                  'area' => 'Isabela City',
                  'province' => 'Basilan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1751 => 
                array (
                  'zipcode' => '7301',
                  'area' => 'Lantawan',
                  'province' => 'Basilan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1752 => 
                array (
                  'zipcode' => '7302',
                  'area' => 'Lamitan',
                  'province' => 'Basilan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1753 => 
                array (
                  'zipcode' => '7303',
                  'area' => 'Maluso',
                  'province' => 'Basilan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1754 => 
                array (
                  'zipcode' => '7304',
                  'area' => 'Tipo Tipo',
                  'province' => 'Basilan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1755 => 
                array (
                  'zipcode' => '7305',
                  'area' => 'Sumisip',
                  'province' => 'Basilan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1756 => 
                array (
                  'zipcode' => '7306',
                  'area' => 'Tuburan',
                  'province' => 'Basilan',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1757 => 
                array (
                  'zipcode' => '7400',
                  'area' => 'Jolo',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1758 => 
                array (
                  'zipcode' => '7400',
                  'area' => 'Pandami',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1759 => 
                array (
                  'zipcode' => '7401',
                  'area' => 'Patikul',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1760 => 
                array (
                  'zipcode' => '7402',
                  'area' => 'Old Panamao',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1761 => 
                array (
                  'zipcode' => '7403',
                  'area' => 'Talipao',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1762 => 
                array (
                  'zipcode' => '7404',
                  'area' => 'Luuk (Omar)',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1763 => 
                array (
                  'zipcode' => '7405',
                  'area' => 'Pata',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1764 => 
                array (
                  'zipcode' => '7406',
                  'area' => 'Banguingui (Tongkil)',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1765 => 
                array (
                  'zipcode' => '7407',
                  'area' => 'Indanan',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1766 => 
                array (
                  'zipcode' => '7408',
                  'area' => 'Parang',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1767 => 
                array (
                  'zipcode' => '7409',
                  'area' => 'Maimbung',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1768 => 
                array (
                  'zipcode' => '7410',
                  'area' => 'Tapul',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1769 => 
                array (
                  'zipcode' => '7411',
                  'area' => 'Lugus',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1770 => 
                array (
                  'zipcode' => '7412',
                  'area' => 'Siasi',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1771 => 
                array (
                  'zipcode' => '7413',
                  'area' => 'Hadji Panglima Tahil',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1772 => 
                array (
                  'zipcode' => '7414',
                  'area' => 'Pangutaran',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1773 => 
                array (
                  'zipcode' => '7415',
                  'area' => 'Panglima Estino (New Panamao)',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1774 => 
                array (
                  'zipcode' => '7416',
                  'area' => 'Kalingalan Calauang',
                  'province' => 'Sulu',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1775 => 
                array (
                  'zipcode' => '7500',
                  'area' => 'Bongao',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1776 => 
                array (
                  'zipcode' => '7501',
                  'area' => 'Panglima Sugala (Balimbing)',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1777 => 
                array (
                  'zipcode' => '7502',
                  'area' => 'Tandubas',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1778 => 
                array (
                  'zipcode' => '7503',
                  'area' => 'Sapa Sapa',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1779 => 
                array (
                  'zipcode' => '7504',
                  'area' => 'South Ubian',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1780 => 
                array (
                  'zipcode' => '7505',
                  'area' => 'Simunul',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1781 => 
                array (
                  'zipcode' => '7506',
                  'area' => 'Sitangkai',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1782 => 
                array (
                  'zipcode' => '7507',
                  'area' => 'Turtle Islands (Taganak)',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1783 => 
                array (
                  'zipcode' => '7508',
                  'area' => 'Mapun (Cagayan de Sulu)',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1784 => 
                array (
                  'zipcode' => '7509',
                  'area' => 'Languyan',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1785 => 
                array (
                  'zipcode' => '7510',
                  'area' => 'Sibutu',
                  'province' => 'Tawi Tawi',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1786 => 
                array (
                  'zipcode' => '8000',
                  'area' => 'Davao City',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1787 => 
                array (
                  'zipcode' => '8001',
                  'area' => 'Santa Cruz',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1788 => 
                array (
                  'zipcode' => '8002',
                  'area' => 'Digos',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1789 => 
                array (
                  'zipcode' => '8003',
                  'area' => 'Matanao',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1790 => 
                array (
                  'zipcode' => '8004',
                  'area' => 'Magsaysay',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1791 => 
                array (
                  'zipcode' => '8005',
                  'area' => 'Bansalan',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1792 => 
                array (
                  'zipcode' => '8006',
                  'area' => 'Hagonoy',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1793 => 
                array (
                  'zipcode' => '8007',
                  'area' => 'Padada',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1794 => 
                array (
                  'zipcode' => '8008',
                  'area' => 'Kiblawan',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1795 => 
                array (
                  'zipcode' => '8009',
                  'area' => 'Sulop',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1796 => 
                array (
                  'zipcode' => '8010',
                  'area' => 'Malalag',
                  'province' => 'Davao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1797 => 
                array (
                  'zipcode' => '8011',
                  'area' => 'Santa Maria',
                  'province' => 'Davao Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1798 => 
                array (
                  'zipcode' => '8012',
                  'area' => 'Malita',
                  'province' => 'Davao Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1799 => 
                array (
                  'zipcode' => '8013',
                  'area' => 'Don Marcelino',
                  'province' => 'Davao Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1800 => 
                array (
                  'zipcode' => '8014',
                  'area' => 'Jose Abad Santos',
                  'province' => 'Davao Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1801 => 
                array (
                  'zipcode' => '8015',
                  'area' => 'Sarangani',
                  'province' => 'Davao Occidental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1802 => 
                array (
                  'zipcode' => '8100',
                  'area' => 'Tagum',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1803 => 
                array (
                  'zipcode' => '8101',
                  'area' => 'Carmen',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1804 => 
                array (
                  'zipcode' => '8102',
                  'area' => 'Asuncion',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1805 => 
                array (
                  'zipcode' => '8104',
                  'area' => 'New Corella',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1806 => 
                array (
                  'zipcode' => '8105',
                  'area' => 'Panabo',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1807 => 
                array (
                  'zipcode' => '8112',
                  'area' => 'Santo Tomas',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1808 => 
                array (
                  'zipcode' => '8113',
                  'area' => 'Kapalong',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1809 => 
                array (
                  'zipcode' => '8118',
                  'area' => 'Babak',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1810 => 
                array (
                  'zipcode' => '8119',
                  'area' => 'Samal',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1811 => 
                array (
                  'zipcode' => '8120',
                  'area' => 'Kaputian',
                  'province' => 'Davao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1812 => 
                array (
                  'zipcode' => '8200',
                  'area' => 'Mati',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1813 => 
                array (
                  'zipcode' => '8201',
                  'area' => 'Tarragona',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1814 => 
                array (
                  'zipcode' => '8202',
                  'area' => 'Manay',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1815 => 
                array (
                  'zipcode' => '8203',
                  'area' => 'Caraga',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1816 => 
                array (
                  'zipcode' => '8204',
                  'area' => 'Baganga',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1817 => 
                array (
                  'zipcode' => '8205',
                  'area' => 'Cateel',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1818 => 
                array (
                  'zipcode' => '8206',
                  'area' => 'Boston',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1819 => 
                array (
                  'zipcode' => '8207',
                  'area' => 'Lupon',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1820 => 
                array (
                  'zipcode' => '8208',
                  'area' => 'Banaybanay',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1821 => 
                array (
                  'zipcode' => '8209',
                  'area' => 'San Isidro',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1822 => 
                array (
                  'zipcode' => '8210',
                  'area' => 'Governor Generoso',
                  'province' => 'Davao Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1823 => 
                array (
                  'zipcode' => '8300',
                  'area' => 'Tandag',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1824 => 
                array (
                  'zipcode' => '8301',
                  'area' => 'San Miguel',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1825 => 
                array (
                  'zipcode' => '8302',
                  'area' => 'Tago',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1826 => 
                array (
                  'zipcode' => '8303',
                  'area' => 'Bayabas',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1827 => 
                array (
                  'zipcode' => '8304',
                  'area' => 'Cagwait',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1828 => 
                array (
                  'zipcode' => '8305',
                  'area' => 'San Agustin',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1829 => 
                array (
                  'zipcode' => '8306',
                  'area' => 'Marihatag',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1830 => 
                array (
                  'zipcode' => '8307',
                  'area' => 'Lianga',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1831 => 
                array (
                  'zipcode' => '8308',
                  'area' => 'Tagbina',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1832 => 
                array (
                  'zipcode' => '8309',
                  'area' => 'Barobo',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1833 => 
                array (
                  'zipcode' => '8310',
                  'area' => 'Hinatuan',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1834 => 
                array (
                  'zipcode' => '8311',
                  'area' => 'Bislig',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1835 => 
                array (
                  'zipcode' => '8312',
                  'area' => 'Lingig',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1836 => 
                array (
                  'zipcode' => '8313',
                  'area' => 'Cortes',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1837 => 
                array (
                  'zipcode' => '8314',
                  'area' => 'Lanuza',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1838 => 
                array (
                  'zipcode' => '8315',
                  'area' => 'Carmen',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1839 => 
                array (
                  'zipcode' => '8316',
                  'area' => 'Madrid',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1840 => 
                array (
                  'zipcode' => '8317',
                  'area' => 'Cantilan',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1841 => 
                array (
                  'zipcode' => '8318',
                  'area' => 'Carrascal',
                  'province' => 'Surigao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1842 => 
                array (
                  'zipcode' => '8400',
                  'area' => 'Surigao City',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1843 => 
                array (
                  'zipcode' => '8401',
                  'area' => 'San Francisco',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1844 => 
                array (
                  'zipcode' => '8402',
                  'area' => 'Malimono',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1845 => 
                array (
                  'zipcode' => '8403',
                  'area' => 'Tagana an',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1846 => 
                array (
                  'zipcode' => '8404',
                  'area' => 'Sison',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1847 => 
                array (
                  'zipcode' => '8405',
                  'area' => 'Placer',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1848 => 
                array (
                  'zipcode' => '8406',
                  'area' => 'Tubod',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1849 => 
                array (
                  'zipcode' => '8407',
                  'area' => 'Mainit',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1850 => 
                array (
                  'zipcode' => '8408',
                  'area' => 'Bacuag',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1851 => 
                array (
                  'zipcode' => '8409',
                  'area' => 'Gigaquit',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1852 => 
                array (
                  'zipcode' => '8410',
                  'area' => 'Claver',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1853 => 
                array (
                  'zipcode' => '8411',
                  'area' => 'Cagdianao',
                  'province' => 'Dinagat Islands',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1854 => 
                array (
                  'zipcode' => '8412',
                  'area' => 'Dinagat',
                  'province' => 'Dinagat Islands',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1855 => 
                array (
                  'zipcode' => '8413',
                  'area' => 'Basilisa (Rizal)',
                  'province' => 'Dinagat Islands',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1856 => 
                array (
                  'zipcode' => '8414',
                  'area' => 'Libjo (Albor)',
                  'province' => 'Dinagat Islands',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1857 => 
                array (
                  'zipcode' => '8415',
                  'area' => 'Loreto',
                  'province' => 'Dinagat Islands',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1858 => 
                array (
                  'zipcode' => '8416',
                  'area' => 'Socorro',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1859 => 
                array (
                  'zipcode' => '8417',
                  'area' => 'Dapa',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1860 => 
                array (
                  'zipcode' => '8418',
                  'area' => 'Del Carmen',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1861 => 
                array (
                  'zipcode' => '8419',
                  'area' => 'General Luna',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1862 => 
                array (
                  'zipcode' => '8420',
                  'area' => 'Pilar',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1863 => 
                array (
                  'zipcode' => '8421',
                  'area' => 'San Isidro',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1864 => 
                array (
                  'zipcode' => '8422',
                  'area' => 'Santa Monica',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1865 => 
                array (
                  'zipcode' => '8423',
                  'area' => 'San Benito',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1866 => 
                array (
                  'zipcode' => '8424',
                  'area' => 'Burgos',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1867 => 
                array (
                  'zipcode' => '8425',
                  'area' => 'Alegria',
                  'province' => 'Surigao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1868 => 
                array (
                  'zipcode' => '8426',
                  'area' => 'Tubajon',
                  'province' => 'Dinagat Islands',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1869 => 
                array (
                  'zipcode' => '8427',
                  'area' => 'San Jose',
                  'province' => 'Dinagat Islands',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1870 => 
                array (
                  'zipcode' => '8500',
                  'area' => 'Prosperidad',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1871 => 
                array (
                  'zipcode' => '8501',
                  'area' => 'San Francisco',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1872 => 
                array (
                  'zipcode' => '8502',
                  'area' => 'Bayugan',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1873 => 
                array (
                  'zipcode' => '8503',
                  'area' => 'Sibagat',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1874 => 
                array (
                  'zipcode' => '8504',
                  'area' => 'Rosario',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1875 => 
                array (
                  'zipcode' => '8505',
                  'area' => 'Trento',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1876 => 
                array (
                  'zipcode' => '8506',
                  'area' => 'Bunawan',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1877 => 
                array (
                  'zipcode' => '8507',
                  'area' => 'Loreto',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1878 => 
                array (
                  'zipcode' => '8508',
                  'area' => 'La Paz',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1879 => 
                array (
                  'zipcode' => '8509',
                  'area' => 'Veruela',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1880 => 
                array (
                  'zipcode' => '8510',
                  'area' => 'Talacogon',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1881 => 
                array (
                  'zipcode' => '8511',
                  'area' => 'San Luis',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1882 => 
                array (
                  'zipcode' => '8512',
                  'area' => 'Santa Josefa',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1883 => 
                array (
                  'zipcode' => '8513',
                  'area' => 'Esperanza',
                  'province' => 'Agusan del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1884 => 
                array (
                  'zipcode' => '8600',
                  'area' => 'Butuan',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1885 => 
                array (
                  'zipcode' => '8601',
                  'area' => 'Buenavista',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1886 => 
                array (
                  'zipcode' => '8602',
                  'area' => 'Nasipit',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1887 => 
                array (
                  'zipcode' => '8603',
                  'area' => 'Carmen',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1888 => 
                array (
                  'zipcode' => '8604',
                  'area' => 'Magallanes',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1889 => 
                array (
                  'zipcode' => '8605',
                  'area' => 'Cabadbaran',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1890 => 
                array (
                  'zipcode' => '8606',
                  'area' => 'Tubay',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1891 => 
                array (
                  'zipcode' => '8607',
                  'area' => 'Jabonga',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1892 => 
                array (
                  'zipcode' => '8608',
                  'area' => 'Santiago',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1893 => 
                array (
                  'zipcode' => '8609',
                  'area' => 'Kitcharao',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1894 => 
                array (
                  'zipcode' => '8610',
                  'area' => 'Las Nieves',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1895 => 
                array (
                  'zipcode' => '8611',
                  'area' => 'Remedios T. Romualdez',
                  'province' => 'Agusan del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1896 => 
                array (
                  'zipcode' => '8700',
                  'area' => 'Malaybalay',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1897 => 
                array (
                  'zipcode' => '8701',
                  'area' => 'Sumilao',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1898 => 
                array (
                  'zipcode' => '8702',
                  'area' => 'Impasugong',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1899 => 
                array (
                  'zipcode' => '8703',
                  'area' => 'Manolo Fortich',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1900 => 
                array (
                  'zipcode' => '8704',
                  'area' => 'Malitbog',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1901 => 
                array (
                  'zipcode' => '8705',
                  'area' => 'Camp Phillips',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1902 => 
                array (
                  'zipcode' => '8706',
                  'area' => 'Libona',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1903 => 
                array (
                  'zipcode' => '8707',
                  'area' => 'Baungon',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1904 => 
                array (
                  'zipcode' => '8708',
                  'area' => 'Talakag',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1905 => 
                array (
                  'zipcode' => '8709',
                  'area' => 'Valencia',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1906 => 
                array (
                  'zipcode' => '8710',
                  'area' => 'Musuan',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1907 => 
                array (
                  'zipcode' => '8711',
                  'area' => 'San Fernando',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1908 => 
                array (
                  'zipcode' => '8712',
                  'area' => 'Don Carlos',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1909 => 
                array (
                  'zipcode' => '8713',
                  'area' => 'Kadingilan',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1910 => 
                array (
                  'zipcode' => '8714',
                  'area' => 'Maramag',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1911 => 
                array (
                  'zipcode' => '8715',
                  'area' => 'Quezon',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1912 => 
                array (
                  'zipcode' => '8716',
                  'area' => 'Kitaotao',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1913 => 
                array (
                  'zipcode' => '8717',
                  'area' => 'Pangantucan',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1914 => 
                array (
                  'zipcode' => '8718',
                  'area' => 'Kalilangan',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1915 => 
                array (
                  'zipcode' => '8719',
                  'area' => 'Dangcagan',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1916 => 
                array (
                  'zipcode' => '8720',
                  'area' => 'Kibawe',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1917 => 
                array (
                  'zipcode' => '8721',
                  'area' => 'Damulog',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1918 => 
                array (
                  'zipcode' => '8722',
                  'area' => 'Lantapan',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1919 => 
                array (
                  'zipcode' => '8723',
                  'area' => 'Cabanglasan',
                  'province' => 'Bukidnon',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1920 => 
                array (
                  'zipcode' => '8800',
                  'area' => 'Nabunturan',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1921 => 
                array (
                  'zipcode' => '8801',
                  'area' => 'Montevista',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1922 => 
                array (
                  'zipcode' => '8802',
                  'area' => 'Mawab',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1923 => 
                array (
                  'zipcode' => '8803',
                  'area' => 'Compostela',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1924 => 
                array (
                  'zipcode' => '8804',
                  'area' => 'New Bataan',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1925 => 
                array (
                  'zipcode' => '8805',
                  'area' => 'Monkayo',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1926 => 
                array (
                  'zipcode' => '8806',
                  'area' => 'Maco',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1927 => 
                array (
                  'zipcode' => '8807',
                  'area' => 'Mabini (Doña Alicia)',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1928 => 
                array (
                  'zipcode' => '8808',
                  'area' => 'Maragusan (San Mariano)',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1929 => 
                array (
                  'zipcode' => '8809',
                  'area' => 'Pantukan',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1930 => 
                array (
                  'zipcode' => '8810',
                  'area' => 'Laak (San Vicente)',
                  'province' => 'Davao de Oro',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1931 => 
                array (
                  'zipcode' => '9000',
                  'area' => 'Cagayan de Oro',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1932 => 
                array (
                  'zipcode' => '9001',
                  'area' => 'Tagoloan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1933 => 
                array (
                  'zipcode' => '9002',
                  'area' => 'Villanueva',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1934 => 
                array (
                  'zipcode' => '9003',
                  'area' => 'Jasaan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1935 => 
                array (
                  'zipcode' => '9004',
                  'area' => 'Claveria',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1936 => 
                array (
                  'zipcode' => '9005',
                  'area' => 'Balingasag',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1937 => 
                array (
                  'zipcode' => '9006',
                  'area' => 'Lagonglong',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1938 => 
                array (
                  'zipcode' => '9007',
                  'area' => 'Salay',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1939 => 
                array (
                  'zipcode' => '9008',
                  'area' => 'Binuangan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1940 => 
                array (
                  'zipcode' => '9009',
                  'area' => 'Sugbongcogon',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1941 => 
                array (
                  'zipcode' => '9010',
                  'area' => 'Kinoguitan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1942 => 
                array (
                  'zipcode' => '9011',
                  'area' => 'Balingoan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1943 => 
                array (
                  'zipcode' => '9012',
                  'area' => 'Talisayan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1944 => 
                array (
                  'zipcode' => '9013',
                  'area' => 'Medina',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1945 => 
                array (
                  'zipcode' => '9014',
                  'area' => 'Gingoog',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1946 => 
                array (
                  'zipcode' => '9015',
                  'area' => 'Magsaysay',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1947 => 
                array (
                  'zipcode' => '9016',
                  'area' => 'Opol',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1948 => 
                array (
                  'zipcode' => '9017',
                  'area' => 'El Salvador',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1949 => 
                array (
                  'zipcode' => '9018',
                  'area' => 'Alubijid',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1950 => 
                array (
                  'zipcode' => '9019',
                  'area' => 'Laguindingan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1951 => 
                array (
                  'zipcode' => '9020',
                  'area' => 'Gitagum',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1952 => 
                array (
                  'zipcode' => '9021',
                  'area' => 'Libertad',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1953 => 
                array (
                  'zipcode' => '9022',
                  'area' => 'Initao',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1954 => 
                array (
                  'zipcode' => '9023',
                  'area' => 'Naawan',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1955 => 
                array (
                  'zipcode' => '9024',
                  'area' => 'Manticao',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1956 => 
                array (
                  'zipcode' => '9025',
                  'area' => 'Lugait',
                  'province' => 'Misamis Oriental',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1957 => 
                array (
                  'zipcode' => '9100',
                  'area' => 'Mambajao',
                  'province' => 'Camiguin',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1958 => 
                array (
                  'zipcode' => '9101',
                  'area' => 'Mahinog',
                  'province' => 'Camiguin',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1959 => 
                array (
                  'zipcode' => '9102',
                  'area' => 'Guinsiliban',
                  'province' => 'Camiguin',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1960 => 
                array (
                  'zipcode' => '9103',
                  'area' => 'Sagay',
                  'province' => 'Camiguin',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1961 => 
                array (
                  'zipcode' => '9104',
                  'area' => 'Catarman',
                  'province' => 'Camiguin',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1962 => 
                array (
                  'zipcode' => '9200',
                  'area' => 'Iligan',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1963 => 
                array (
                  'zipcode' => '9201',
                  'area' => 'Linamon',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1964 => 
                array (
                  'zipcode' => '9202',
                  'area' => 'Kauswagan',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1965 => 
                array (
                  'zipcode' => '9203',
                  'area' => 'Matungao',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1966 => 
                array (
                  'zipcode' => '9204',
                  'area' => 'Poona Piagapo',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1967 => 
                array (
                  'zipcode' => '9205',
                  'area' => 'Bacolod',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1968 => 
                array (
                  'zipcode' => '9206',
                  'area' => 'Maigo',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1969 => 
                array (
                  'zipcode' => '9207',
                  'area' => 'Kolambugan',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1970 => 
                array (
                  'zipcode' => '9208',
                  'area' => 'Pantao Ragat',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1971 => 
                array (
                  'zipcode' => '9209',
                  'area' => 'Tubod',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1972 => 
                array (
                  'zipcode' => '9210',
                  'area' => 'Baroy',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1973 => 
                array (
                  'zipcode' => '9211',
                  'area' => 'Lala',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1974 => 
                array (
                  'zipcode' => '9212',
                  'area' => 'Salvador',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1975 => 
                array (
                  'zipcode' => '9213',
                  'area' => 'Sapad',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1976 => 
                array (
                  'zipcode' => '9214',
                  'area' => 'Kapatagan',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1977 => 
                array (
                  'zipcode' => '9215',
                  'area' => 'Sultan Naga Dimaporo (Karomatan)',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1978 => 
                array (
                  'zipcode' => '9216',
                  'area' => 'Nunungan',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1979 => 
                array (
                  'zipcode' => '9217',
                  'area' => 'Baloi',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1980 => 
                array (
                  'zipcode' => '9218',
                  'area' => 'Pantar',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1981 => 
                array (
                  'zipcode' => '9219',
                  'area' => 'Munai',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1982 => 
                array (
                  'zipcode' => '9220',
                  'area' => 'Tangcal',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1983 => 
                array (
                  'zipcode' => '9221',
                  'area' => 'Magsaysay',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1984 => 
                array (
                  'zipcode' => '9222',
                  'area' => 'Tagoloan',
                  'province' => 'Lanao del Norte',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1985 => 
                array (
                  'zipcode' => '9300',
                  'area' => 'Malabang',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1986 => 
                array (
                  'zipcode' => '9301',
                  'area' => 'Picong (Sultan Gumander)',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1987 => 
                array (
                  'zipcode' => '9302',
                  'area' => 'Balabagan',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1988 => 
                array (
                  'zipcode' => '9303',
                  'area' => 'Marogong',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1989 => 
                array (
                  'zipcode' => '9304',
                  'area' => 'Tubaran',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1990 => 
                array (
                  'zipcode' => '9305',
                  'area' => 'Butig',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1991 => 
                array (
                  'zipcode' => '9306',
                  'area' => 'Lumbayanague',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1992 => 
                array (
                  'zipcode' => '9307',
                  'area' => 'Lumbatan',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1993 => 
                array (
                  'zipcode' => '9308',
                  'area' => 'Lumbaca Unayan and Macadar Andong',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1994 => 
                array (
                  'zipcode' => '9309',
                  'area' => 'Bayang',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1995 => 
                array (
                  'zipcode' => '9310',
                  'area' => 'Binidayan',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1996 => 
                array (
                  'zipcode' => '9311',
                  'area' => 'Ganassi',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1997 => 
                array (
                  'zipcode' => '9312',
                  'area' => 'Pagayawan',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1998 => 
                array (
                  'zipcode' => '9313',
                  'area' => 'Pualas',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                1999 => 
                array (
                  'zipcode' => '9314',
                  'area' => 'Madamba',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2000 => 
                array (
                  'zipcode' => '9315',
                  'area' => 'Madalum',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2001 => 
                array (
                  'zipcode' => '9316',
                  'area' => 'Bacolod Kalawi (Bacolod Grande)',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2002 => 
                array (
                  'zipcode' => '9317',
                  'area' => 'Tugaya',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2003 => 
                array (
                  'zipcode' => '9318',
                  'area' => 'Balindong',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2004 => 
                array (
                  'zipcode' => '9319',
                  'area' => 'Calanogas',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2005 => 
                array (
                  'zipcode' => '9320',
                  'area' => 'Amai Manabilang (Bumbaran)',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2006 => 
                array (
                  'zipcode' => '9321',
                  'area' => 'Tagoloan II',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2007 => 
                array (
                  'zipcode' => '9400',
                  'area' => 'Kidapawan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2008 => 
                array (
                  'zipcode' => '9401',
                  'area' => 'Makilala',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2009 => 
                array (
                  'zipcode' => '9402',
                  'area' => 'M\'Lang',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2010 => 
                array (
                  'zipcode' => '9403',
                  'area' => 'Tulunan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2011 => 
                array (
                  'zipcode' => '9404',
                  'area' => 'Magpet',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2012 => 
                array (
                  'zipcode' => '9405',
                  'area' => 'President Roxas',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2013 => 
                array (
                  'zipcode' => '9406',
                  'area' => 'Matalam',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2014 => 
                array (
                  'zipcode' => '9407',
                  'area' => 'Kabacan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2015 => 
                array (
                  'zipcode' => '9408',
                  'area' => 'Carmen',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2016 => 
                array (
                  'zipcode' => '9409',
                  'area' => 'Pikit',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2017 => 
                array (
                  'zipcode' => '9410',
                  'area' => 'Midsayap',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2018 => 
                array (
                  'zipcode' => '9411',
                  'area' => 'Libungan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2019 => 
                array (
                  'zipcode' => '9412',
                  'area' => 'Pigkawayan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2020 => 
                array (
                  'zipcode' => '9413',
                  'area' => 'Alamada',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2021 => 
                array (
                  'zipcode' => '9414',
                  'area' => 'Antipas',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2022 => 
                array (
                  'zipcode' => '9415',
                  'area' => 'Aleosan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2023 => 
                array (
                  'zipcode' => '9416',
                  'area' => 'Banisilan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2024 => 
                array (
                  'zipcode' => '9417',
                  'area' => 'Arakan',
                  'province' => 'Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2025 => 
                array (
                  'zipcode' => '9500',
                  'area' => 'General Santos (Dadiangas)',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2026 => 
                array (
                  'zipcode' => '9501',
                  'area' => 'Alabel',
                  'province' => 'Sarangani',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2027 => 
                array (
                  'zipcode' => '9502',
                  'area' => 'Maasim',
                  'province' => 'Sarangani',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2028 => 
                array (
                  'zipcode' => '9503',
                  'area' => 'Malungon',
                  'province' => 'Sarangani',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2029 => 
                array (
                  'zipcode' => '9504',
                  'area' => 'Polomolok',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2030 => 
                array (
                  'zipcode' => '9505',
                  'area' => 'Tupi',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2031 => 
                array (
                  'zipcode' => '9506',
                  'area' => 'Koronadal',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2032 => 
                array (
                  'zipcode' => '9507',
                  'area' => 'Tampakan',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2033 => 
                array (
                  'zipcode' => '9508',
                  'area' => 'Norala',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2034 => 
                array (
                  'zipcode' => '9509',
                  'area' => 'Santo Niño',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2035 => 
                array (
                  'zipcode' => '9510',
                  'area' => 'Tantangan',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2036 => 
                array (
                  'zipcode' => '9511',
                  'area' => 'Banga',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2037 => 
                array (
                  'zipcode' => '9512',
                  'area' => 'Surallah',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2038 => 
                array (
                  'zipcode' => '9513',
                  'area' => 'T\'Boli',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2039 => 
                array (
                  'zipcode' => '9514',
                  'area' => 'Kiamba',
                  'province' => 'Sarangani',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2040 => 
                array (
                  'zipcode' => '9514',
                  'area' => 'Lake Sebu',
                  'province' => 'South Cotabato',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2041 => 
                array (
                  'zipcode' => '9515',
                  'area' => 'Maitum',
                  'province' => 'Sarangani',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2042 => 
                array (
                  'zipcode' => '9516',
                  'area' => 'Malapatan',
                  'province' => 'Sarangani',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2043 => 
                array (
                  'zipcode' => '9517',
                  'area' => 'Glan',
                  'province' => 'Sarangani',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2044 => 
                array (
                  'zipcode' => '9600',
                  'area' => 'Cotabato City',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2045 => 
                array (
                  'zipcode' => '9601',
                  'area' => 'Datu Odin Sinsuat (Dinaig)',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2046 => 
                array (
                  'zipcode' => '9602',
                  'area' => 'Upi',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2047 => 
                array (
                  'zipcode' => '9603',
                  'area' => 'South Upi',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2048 => 
                array (
                  'zipcode' => '9604',
                  'area' => 'Parang',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2049 => 
                array (
                  'zipcode' => '9605',
                  'area' => 'Sultan Kudarat',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2050 => 
                array (
                  'zipcode' => '9606',
                  'area' => 'Kabuntalan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2051 => 
                array (
                  'zipcode' => '9607',
                  'area' => 'Datu Piang',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2052 => 
                array (
                  'zipcode' => '9608',
                  'area' => 'Shariff Aguak (Maganoy)',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2053 => 
                array (
                  'zipcode' => '9609',
                  'area' => 'Ampatuan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2054 => 
                array (
                  'zipcode' => '9610',
                  'area' => 'Pagalungan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2055 => 
                array (
                  'zipcode' => '9611',
                  'area' => 'Sultan sa Barongis',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2056 => 
                array (
                  'zipcode' => '9612',
                  'area' => 'Talayan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2057 => 
                array (
                  'zipcode' => '9613',
                  'area' => 'Matanog',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2058 => 
                array (
                  'zipcode' => '9614',
                  'area' => 'Barira',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2059 => 
                array (
                  'zipcode' => '9615',
                  'area' => 'Buldon',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2060 => 
                array (
                  'zipcode' => '9616',
                  'area' => 'Buluan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2061 => 
                array (
                  'zipcode' => '9617',
                  'area' => 'Datu Paglas',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2062 => 
                array (
                  'zipcode' => '9618',
                  'area' => 'Gen. S.K. Pendatun',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2063 => 
                array (
                  'zipcode' => '9619',
                  'area' => 'Shariff Aguak',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2064 => 
                array (
                  'zipcode' => '9620',
                  'area' => 'Mangudadatu',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2065 => 
                array (
                  'zipcode' => '9621',
                  'area' => 'Datu Abdullah Sangki',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2066 => 
                array (
                  'zipcode' => '9622',
                  'area' => 'Datu Anggal Midtimbang',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2067 => 
                array (
                  'zipcode' => '9623',
                  'area' => 'Datu Blah T. Sinsuat',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2068 => 
                array (
                  'zipcode' => '9624',
                  'area' => 'Datu Hoffer Ampatuan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2069 => 
                array (
                  'zipcode' => '9625',
                  'area' => 'Datu Salibo',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2070 => 
                array (
                  'zipcode' => '9626',
                  'area' => 'Datu Saudi Ampatuan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2071 => 
                array (
                  'zipcode' => '9627',
                  'area' => 'Datu Unsay',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2072 => 
                array (
                  'zipcode' => '9628',
                  'area' => 'Guindulungan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2073 => 
                array (
                  'zipcode' => '9629',
                  'area' => 'Mamasapano',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2074 => 
                array (
                  'zipcode' => '9630',
                  'area' => 'Northern Kabuntalan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2075 => 
                array (
                  'zipcode' => '9631',
                  'area' => 'Datu Montawal (Pagagawan)',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2076 => 
                array (
                  'zipcode' => '9632',
                  'area' => 'Paglat',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2077 => 
                array (
                  'zipcode' => '9633',
                  'area' => 'Pandag',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2078 => 
                array (
                  'zipcode' => '9634',
                  'area' => 'Rajah Buayan',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2079 => 
                array (
                  'zipcode' => '9635',
                  'area' => 'Shariff Saydona Mustapha',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2080 => 
                array (
                  'zipcode' => '9636',
                  'area' => 'Sultan Mastura',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2081 => 
                array (
                  'zipcode' => '9637',
                  'area' => 'Sultan Sumagka (Talitay)',
                  'province' => 'Maguindanao',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2082 => 
                array (
                  'zipcode' => '9700',
                  'area' => 'Kapatagan',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2083 => 
                array (
                  'zipcode' => '9700',
                  'area' => 'Marawi',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2084 => 
                array (
                  'zipcode' => '9701',
                  'area' => 'Saguiaran',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2085 => 
                array (
                  'zipcode' => '9702',
                  'area' => 'Mulondo',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2086 => 
                array (
                  'zipcode' => '9703',
                  'area' => 'Lumba Bayabao',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2087 => 
                array (
                  'zipcode' => '9704',
                  'area' => 'Tamparan',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2088 => 
                array (
                  'zipcode' => '9705',
                  'area' => 'Poona Bayabao',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2089 => 
                array (
                  'zipcode' => '9706',
                  'area' => 'Masiu',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2090 => 
                array (
                  'zipcode' => '9708',
                  'area' => 'Bubong',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2091 => 
                array (
                  'zipcode' => '9709',
                  'area' => 'Kapai',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2092 => 
                array (
                  'zipcode' => '9710',
                  'area' => 'Piagapo',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2093 => 
                array (
                  'zipcode' => '9711',
                  'area' => 'Marantao',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2094 => 
                array (
                  'zipcode' => '9712',
                  'area' => 'Taraka',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2095 => 
                array (
                  'zipcode' => '9713',
                  'area' => 'Ditsaan Ramain',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2096 => 
                array (
                  'zipcode' => '9714',
                  'area' => 'Buadiposo Buntong',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2097 => 
                array (
                  'zipcode' => '9715',
                  'area' => 'Maguing',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2098 => 
                array (
                  'zipcode' => '9716',
                  'area' => 'Wao',
                  'province' => 'Lanao del Sur',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2099 => 
                array (
                  'zipcode' => '9800',
                  'area' => 'Tacurong',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2100 => 
                array (
                  'zipcode' => '9801',
                  'area' => 'Columbio',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2101 => 
                array (
                  'zipcode' => '9802',
                  'area' => 'Lambayong',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2102 => 
                array (
                  'zipcode' => '9803',
                  'area' => 'Lutayan',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2103 => 
                array (
                  'zipcode' => '9804',
                  'area' => 'President Quirino',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2104 => 
                array (
                  'zipcode' => '9805',
                  'area' => 'Isulan',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2105 => 
                array (
                  'zipcode' => '9806',
                  'area' => 'Esperanza',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2106 => 
                array (
                  'zipcode' => '9807',
                  'area' => 'Lebak',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2107 => 
                array (
                  'zipcode' => '9808',
                  'area' => 'Kalamansig',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2108 => 
                array (
                  'zipcode' => '9809',
                  'area' => 'Palimbang',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2109 => 
                array (
                  'zipcode' => '9810',
                  'area' => 'Bagumbayan',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
                2110 => 
                array (
                  'zipcode' => '9811',
                  'area' => 'Senator Ninoy Aquino',
                  'province' => 'Sultan Kudarat',
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ),
        ]);
    }
}
