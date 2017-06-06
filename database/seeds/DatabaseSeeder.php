<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(AdminsTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(RegencysTableSeeder::class);
        $this->call(ReligionsTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(SegmentationsTableSeeder::class);
        $this->call(ReqstatsTableSeeder::class);
        $this->call(RescstatsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
