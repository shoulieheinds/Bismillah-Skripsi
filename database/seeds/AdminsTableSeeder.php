<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins=[
    	
    		[
    			'name'=>'Mujiono',
    			'email' => 'mujiono@isyres.com',
    			'job_title' => 'Kepala Divisi Statistik',
    			'photo' => '/images/1.jpg',
    			'password' => bcrypt('12345678'),
    		],
	    		[
    			'name'=>'Sunarto',
    			'email' => 'sunarto@isyres.com',
    			'job_title' => 'Kepala Labor',
    			'photo' => '/images/2.jpg',
    			'password' => bcrypt('12345678'),
    			],
    	];

        DB::table('admins')->insert($admins);
    }
}
