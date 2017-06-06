<?php

use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions=[
    	
    		[
    		'name'=>'Islam',
    		],
	    		[
	        	'name'=>'Katholik',
	        	],
        	[
        	'name'=>'Protestan',
        	],
	        	[
	        	'name'=>'Hindu',
	        	],
        	[
        	'name'=>'Budha',
        	],
	        	[
	        	'name'=>'Tion Hoa',
	        	],
        			];

        DB::table('religions')->insert($religions);
    }
}
