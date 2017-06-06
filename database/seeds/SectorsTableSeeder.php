<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors =[
        [
        	'name' => 'Pertanian',
        ],
        	[
        	'name' => 'Industri, Pertambangan, Energi, dan Konstruksi',
        	],
		[
        	'name' => 'Keuangan, Niaga dan Jasa',
        ],
        	[
        	'name' => 'Neraca Nasional dan Regional',
        	],
        [
        	'name' => 'Sosial dan Kesejahteraan Rakyat',
        ],
        	[
        	'name' => 'Kependudukan dan Ketenagakerjaan',
        	],
        [
        	'name' => 'Harga',
        ],
        	[
        	'name' => 'Teknologi Informasi dan Komunikasi',
        	],
        [
        	'name' => 'Lainnya'
        ],
        	
        		];
        	DB::table('sectors')->insert($sectors);
    }
}
