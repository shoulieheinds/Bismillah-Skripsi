<?php

use Illuminate\Database\Seeder;

class SegmentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $segmentations=[
    	
    		[
    			'name'=>'Unit Kerja BPS',
    		],
	    		[
	        	'name'=>'Pegawai Tugas Belajar BPS',
	        	],
        	[
        		'name'=>'Mahasiswa STIS',
        	],
	        	[
	        	'name'=>'Instansi Pemerintah (non BPS)',
	        	],
        	[
        		'name'=>'Instansi Swasta',
        	],
	        	[
	        	'name'=>'Lembaga Internasional',
	        	],
        	[
        		'name'=>'Lembaga Pendidikan'
        	],
	        	[
	        	'name'=>'Peneliti Mahasiswa/Pribadi'
	        	],
	            	];

        DB::table('segmentations')->insert($segmentations);
    }
}
