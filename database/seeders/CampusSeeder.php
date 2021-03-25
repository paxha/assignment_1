<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campus = new Campus();
        $campus->name = 'Coffs Harbour';
        $campus->save();

        $campus1 = new Campus();
        $campus1->name = 'Gold Coast';
        $campus1->save();

        $campus2 = new Campus();
        $campus2->name = 'Lismore';
        $campus2->save();
    }
}
