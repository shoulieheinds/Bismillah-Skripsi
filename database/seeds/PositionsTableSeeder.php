<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions=[
    	
    		[
    			'name'=>'Pelajar',
    		],
	    		[
	        	'name'=>'Pejabat',
	        	],
        	[
        		'name'=>'Pegawai',
        	],
	        	[
	        	'name'=>'Karyawan',
	        	],
        	[
        		'name'=>'Kepala Divisi',
        	],
	        	[
	        	'name'=>'Manager',
	        	],
        	[
        		'name'=>'Supervisor'
        	],
    	];

        DB::table('positions')->insert($positions);
    }
}
