<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['state_id' => 1, 'name' => 'Casablanca'],
            ['state_id' => 1, 'name' => 'Mohammedia'],
            ['state_id' => 1, 'name' => 'Benslimane'],
            ['state_id' => 2, 'name' => 'Rabat'],
            ['state_id' => 2, 'name' => 'Salé'],
            ['state_id' => 3, 'name' => 'Marrakech'],
            ['state_id' => 3, 'name' => 'Safi'],
            ['state_id' => 4, 'name' => 'Fès'],
            ['state_id' => 4, 'name' => 'Meknès'],
            ['state_id' => 5, 'name' => 'Tangier'],
            ['state_id' => 5, 'name' => 'Tetouan'],
            ['state_id' => 6, 'name' => 'Agadir'],
            ['state_id' => 6, 'name' => 'Taroudant'],
            ['state_id' => 7, 'name' => 'Errachidia'],
            ['state_id' => 7, 'name' => 'Ouarzazate'],
            ['state_id' => 8, 'name' => 'Beni Mellal'],
            ['state_id' => 8, 'name' => 'Khénifra'],
            ['state_id' => 9, 'name' => 'Oujda'],
            ['state_id' => 9, 'name' => 'Nador'],
            ['state_id' => 10, 'name' => 'Laâyoune'],
            ['state_id' => 10, 'name' => 'Smara'],
            ['state_id' => 11, 'name' => 'Guelmim'],
            ['state_id' => 11, 'name' => 'Tan-Tan'],
        ]);

        DB::table('cities')->insert([
            ['state_id' => 1, 'name' => 'Paris'],
            ['state_id' => 1, 'name' => 'Versailles'],
            ['state_id' => 1, 'name' => 'Boulogne-Billancourt'],
            ['state_id' => 2, 'name' => 'Marseille'],
            ['state_id' => 2, 'name' => 'Nice'],
            ['state_id' => 2, 'name' => 'Cannes'],
            ['state_id' => 3, 'name' => 'Lyon'],
            ['state_id' => 3, 'name' => 'Grenoble'],
            ['state_id' => 4, 'name' => 'Bordeaux'],
            ['state_id' => 4, 'name' => 'Poitiers'],
        ]);

        // Cities for United States
        DB::table('cities')->insert([
            ['state_id' => 1, 'name' => 'Los Angeles'],
            ['state_id' => 1, 'name' => 'San Francisco'],
            ['state_id' => 1, 'name' => 'San Diego'],
            ['state_id' => 2, 'name' => 'Houston'],
            ['state_id' => 2, 'name' => 'Dallas'],
            ['state_id' => 2, 'name' => 'Austin'],
            ['state_id' => 3, 'name' => 'Miami'],
            ['state_id' => 3, 'name' => 'Orlando'],
            ['state_id' => 3, 'name' => 'Tampa'],
            ['state_id' => 4, 'name' => 'New York City'],
            ['state_id' => 4, 'name' => 'Buffalo'],
            ['state_id' => 4, 'name' => 'Albany'],
            ['state_id' => 5, 'name' => 'Chicago'],
            ['state_id' => 5, 'name' => 'Naperville'],
            ['state_id' => 5, 'name' => 'Peoria'],
            ['state_id' => 6, 'name' => 'Cleveland'],
            ['state_id' => 6, 'name' => 'Cincinnati'],
            ['state_id' => 6, 'name' => 'Columbus'],
            ['state_id' => 7, 'name' => 'Atlanta'],
            ['state_id' => 7, 'name' => 'Savannah'],
            ['state_id' => 7, 'name' => 'Augusta'],
        ]);

        // Cities for Canada
        DB::table('cities')->insert([
            ['state_id' => 1, 'name' => 'Toronto'],
            ['state_id' => 1, 'name' => 'Ottawa'],
            ['state_id' => 1, 'name' => 'Mississauga'],
            ['state_id' => 2, 'name' => 'Montreal'],
            ['state_id' => 2, 'name' => 'Quebec City'],
            ['state_id' => 2, 'name' => 'Laval'],
            ['state_id' => 3, 'name' => 'Vancouver'],
            ['state_id' => 3, 'name' => 'Richmond'],
            ['state_id' => 3, 'name' => 'Burnaby'],
            ['state_id' => 4, 'name' => 'Calgary'],
            ['state_id' => 4, 'name' => 'Edmonton'],
            ['state_id' => 5, 'name' => 'Halifax'],
            
        ]);
        DB::table('cities')->insert([
            // Baden-Württemberg
            ['state_id' => 1, 'name' => 'Stuttgart'],
            ['state_id' => 1, 'name' => 'Mannheim'],
            ['state_id' => 1, 'name' => 'Karlsruhe'],
            ['state_id' => 1, 'name' => 'Freiburg'],
        
            // Bavaria
            ['state_id' => 2, 'name' => 'Munich'],
            ['state_id' => 2, 'name' => 'Nuremberg'],
            ['state_id' => 2, 'name' => 'Augsburg'],
            ['state_id' => 2, 'name' => 'Regensburg'],
        
            // Berlin
            ['state_id' => 3, 'name' => 'Berlin'],  // Berlin is both a state and a city
        
            // Brandenburg
            ['state_id' => 4, 'name' => 'Potsdam'],
            ['state_id' => 4, 'name' => 'Cottbus'],
            ['state_id' => 4, 'name' => 'Brandenburg an der Havel'],
        
            // Bremen
            ['state_id' => 5, 'name' => 'Bremen'],
            ['state_id' => 5, 'name' => 'Bremerhaven'],
        
            // Hamburg
            ['state_id' => 6, 'name' => 'Hamburg'], // Hamburg is both a state and a city
        
            // Hesse
            ['state_id' => 7, 'name' => 'Frankfurt'],
            ['state_id' => 7, 'name' => 'Wiesbaden'],
            ['state_id' => 7, 'name' => 'Darmstadt'],
        
            // Lower Saxony
            ['state_id' => 8, 'name' => 'Hanover'],
            ['state_id' => 8, 'name' => 'Braunschweig'],
            ['state_id' => 8, 'name' => 'Göttingen'],
            ['state_id' => 8, 'name' => 'Oldenburg'],
        ]);

        // Cities for United Kingdom
        DB::table('cities')->insert([
            ['state_id' => 1, 'name' => 'London'],
            ['state_id' => 1, 'name' => 'Manchester'],
            ['state_id' => 1, 'name' => 'Birmingham'],
            ['state_id' => 2, 'name' => 'Edinburgh'],
            ['state_id' => 2, 'name' => 'Glasgow'],
            ['state_id' => 2, 'name' => 'Aberdeen'],
            ['state_id' => 3, 'name' => 'Cardiff'],
            ['state_id' => 3, 'name' => 'Swansea'],
            ['state_id' => 4, 'name' => 'Belfast'],
            ['state_id' => 4, 'name' => 'Londonderry'],
        ]);

        // Cities for France
       
       
    }
}
