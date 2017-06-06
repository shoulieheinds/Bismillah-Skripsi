<?php

use Illuminate\Database\Seeder;

class RescstatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $rescstats=[
    	
    		[
    			'name'=>'Pending',
    		],
    		[
    			'name' => 'Approved',
    		],
    		[
    			'name' => 'Decline',
    		],
    				];

        DB::table('rescstats')->insert($rescstats);
    }
}
