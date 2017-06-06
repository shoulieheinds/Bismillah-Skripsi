<?php

use Illuminate\Database\Seeder;

class ReqstatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $reqstats=[
    	
    		[
    			'name'=>'New',
    		],
    		[
    			'name' => 'Continue',
    		],
    				];

        DB::table('reqstats')->insert($reqstats);
    }
}
