<?php

use Illuminate\Database\Seeder;

class RegencysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regencys=[
    	
    		[
    			'name'=>'Kab. Bengkalis',
    		],
	    		[
	        	'name'=>'Kab. Indragiri Hilir',
	        	],
        	[
        		'name'=>'Kab. Indragiri Hulu',
        	],
	        	[
	        	'name'=>'Kab. Kampar',
	        	],
        	[
        		'name'=>'Kab. Kepulauan Meranti',
        	],
	        	[
	        	'name'=>'Kab. Kuantan Singingi',
	        	],
        	[
        		'name'=>'Kab. Pelalawan'
        	],
        		[
	        	'name'=>'Kab. Rokan Hilir',
	        	],
        	[
        		'name'=>'Kab. Rokan Hulu'
        	],
        		[
	        	'name'=>'Kab. Siak',
	        	],
        	[
        		'name'=>'Kota Dumai'
        	],
        		[
	        	'name'=>'Kota Pekanbaru',
	        	],
        	
    	];

        DB::table('regencys')->insert($regencys);
    }
}
