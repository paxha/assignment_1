<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = new Location();
        $location->name = 'M.G.33';
        $location->save();

        $location = new Location();
        $location->name = 'M.G.32';
        $location->save();

        $location = new Location();
        $location->name = 'A3.03';
        $location->save();

        $location = new Location();
        $location->name = 'TBA';
        $location->save();

        $location = new Location();
        $location->name = 'A3.06';
        $location->save();

        $location = new Location();
        $location->name = 'A3.02';
        $location->save();

        $location = new Location();
        $location->name = 'M.G.31';
        $location->save();

        $location = new Location();
        $location->name = 'Room A.123';
        $location->save();

        $location = new Location();
        $location->name = 'Room L.8';
        $location->save();
    }
}
