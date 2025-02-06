<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            ['country_id' => 1, 'name' => 'Casablanca-Settat'],
            ['country_id' => 1, 'name' => 'Rabat-Salé-Kénitra'],
            ['country_id' => 1, 'name' => 'Marrakech-Safi'],
            ['country_id' => 1, 'name' => 'Fès-Meknès'],
            ['country_id' => 1, 'name' => 'Tangier-Tétouan-Al Hoceïma'],
            ['country_id' => 1, 'name' => 'Souss-Massa'],
            ['country_id' => 1, 'name' => 'Draa-Tafilalet'],
            ['country_id' => 1, 'name' => 'Beni Mellal-Khénifra'],
            ['country_id' => 1, 'name' => 'Oriental'],
            ['country_id' => 1, 'name' => 'Laâyoune-Sakia El Hamra'],
            ['country_id' => 1, 'name' => 'Guelmim-Oued Noun'],
            ['country_id' => 1, 'name' => 'Marrakech'],
        ]);

        DB::table('states')->insert([
            ['country_id' => 2, 'name' => 'Île-de-France'],
            ['country_id' => 2, 'name' => 'Provence-Alpes-Côte d\'Azur'],
            ['country_id' => 2, 'name' => 'Auvergne-Rhône-Alpes'],
            ['country_id' => 2, 'name' => 'Nouvelle-Aquitaine'],
            
        ]);

        // Seed for United States
        DB::table('states')->insert([
            ['country_id' => 3, 'name' => 'California'],
            ['country_id' => 3, 'name' => 'Texas'],
            ['country_id' => 3, 'name' => 'Florida'],
            ['country_id' => 3, 'name' => 'New York'],
            ['country_id' => 3, 'name' => 'Illinois'],
            ['country_id' => 3, 'name' => 'Ohio'],
            ['country_id' => 3, 'name' => 'Georgia'],
           
        ]);

        // Seed for Canada
        DB::table('states')->insert([
            ['country_id' => 4, 'name' => 'Ontario'],
            ['country_id' => 4, 'name' => 'Quebec'],
            ['country_id' => 4, 'name' => 'British Columbia'],
            ['country_id' => 4, 'name' => 'Alberta'],
            ['country_id' => 4, 'name' => 'Nova Scotia'],
           
        ]);

        DB::table('states')->insert([
            ['country_id' => 5, 'name' => 'Baden-Württemberg'],
            ['country_id' => 5, 'name' => 'Bavaria'],
            ['country_id' => 5, 'name' => 'Berlin'],
            ['country_id' => 5, 'name' => 'Brandenburg'],
            ['country_id' => 5, 'name' => 'Bremen'],
            ['country_id' => 5, 'name' => 'Hamburg'],
            ['country_id' => 5, 'name' => 'Hesse'],
            ['country_id' => 5, 'name' => 'Lower Saxony'],
           
        ]);

        // Seed for United Kingdom
        DB::table('states')->insert([
            ['country_id' => 6, 'name' => 'England'],
            ['country_id' => 6, 'name' => 'Scotland'],
            ['country_id' => 6, 'name' => 'Wales'],
            ['country_id' => 6, 'name' => 'Northern Ireland'],
        ]);

        
      
    }
}
