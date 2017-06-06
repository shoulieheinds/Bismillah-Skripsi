<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users=[
    	
    		[
    			'name'=>'Solihin',
	            'pob' => 'Lumajang',
	            'dob' => '1993-04-14',
				'gender_id'=> '1',
				'religion_id'=> '1',
				'segmentation_id'=> '8',
				'card_id'=> '4',
				'card_numb'=> '11153100000',
				'position_id'=> '1',
				'address'=> 'Panam harmoni C1',
				'telp_numb'=> '082283355947',
				'photo' => '/images/1.jpg',
	            'email' => 'sholihin_93@yahoo.co.id',
	            'password' => bcrypt('12345678'),
    		],
	    		[
    			'name'=>'Suwandi',
	            'pob' => 'Pematang Siantar',
	            'dob' => '1992-01-31',
				'gender_id'=> '1',
				'religion_id'=> '1',
				'segmentation_id'=> '8',
				'card_id'=> '4',
				'card_numb'=> '11153103239',
				'position_id'=> '1',
				'address'=> 'Delima Jaya',
				'telp_numb'=> '085264801591',
				'photo' => '/images/2.jpg',
	            'email' => 'suwandi.ansari@gmail.com',
	            'password' => bcrypt('31011992'),
    			],
    	];

        DB::table('users')->insert($users);
    }
}
