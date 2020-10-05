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
			'parent_id' => $id
        ]);
        DB::table('locations')->insertGetId([
            'name' => 'Saint Petersburg',
			'parent_id' => $id
        ]);
        $id = DB::table('locations')->insertGetId([
            'name' => 'USA'
        ]);
        DB::table('locations')->insertGetId([
            'name' => 'New York',
			'parent_id' => $id
        ]);
        DB::table('locations')->insertGetId([
            'name' => 'Los Angeles',
			'parent_id' => $id
        ]);
    }
}
