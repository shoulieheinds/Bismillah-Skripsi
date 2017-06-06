<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders=[
    	
    		[
    			'name'=>'Laki-Laki',
    		],
	    		[
	        	'name'=>'Perempuan',
	        	],
        	[
        		'name'=>'TransGender',
        	],
	        	
    	];

        DB::table('genders')->insert($genders);
    }
}
