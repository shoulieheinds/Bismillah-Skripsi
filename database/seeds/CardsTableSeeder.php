<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cards=[
    	
    		[
    			'name'=>'NPWP',
    		],
	    		[
	        	'name'=>'NIP',
	        	],
        	[
        		'name'=>'KTP',
        	],
	        	[
	        	'name'=>'KTM',
	        	],
        	[
        		'name'=>'kartu Pelajar',
        	],
	        	[
	        	'name'=>'SIM',
	        	],
        	[
        		'name'=>'Passport'
        	],
    	];

        DB::table('cards')->insert($cards);
    }
}
