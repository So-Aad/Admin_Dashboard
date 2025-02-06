<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Morocco', 'code' => 'MA', 'phonecode' => '+212'],
            ['id' => 2, 'name' => 'France', 'code' => 'FR', 'phonecode' => '+33'],
            ['id' => 3, 'name' => 'United States', 'code' => 'US', 'phonecode' => '+1'],
            ['id' => 4, 'name' => 'Canada', 'code' => 'CA', 'phonecode' => '+1'],
            ['id' => 5, 'name' => 'Germany', 'code' => 'DE', 'phonecode' => '+49'],
            ['id' => 6, 'name' => 'United Kingdom', 'code' => 'GB', 'phonecode' => '+44'],
           
        ]);
    }
}
