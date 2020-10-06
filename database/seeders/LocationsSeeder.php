<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('locations')->insertGetId([
            'name' => 'Russia'
        ]);
        DB::table('locations')->insertGetId([
            'name' => 'Moscow',
			'location_id' => $id
        ]);
        DB::table('locations')->insertGetId([
            'name' => 'Saint Petersburg',
			'location_id' => $id
        ]);
        $id = DB::table('locations')->insertGetId([
            'name' => 'USA'
        ]);
        DB::table('locations')->insertGetId([
            'name' => 'New York',
			'location_id' => $id
        ]);
        DB::table('locations')->insertGetId([
            'name' => 'Los Angeles',
			'location_id' => $id
        ]);
    }
}
