<?php

namespace Database\Seeders;

use App\Models\Campus;
use App\Models\Location;
use App\Models\Teacher;
use App\Models\Unit;
use App\Models\Workshop;
use Illuminate\Database\Seeder;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workshop = new Workshop();
        $workshop->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $workshop->campus_id = Campus::whereName('Gold Coast')->first()->id;
        $workshop->location_id = Location::whereName('Room A.123')->first()->id;
        $workshop->teacher_id = Teacher::whereFirstName('Graham')->whereLastName('Cooper')->first()->id;
        $workshop->weekday = 'Tuesday';
        $workshop->start_time = '09:00';
        $workshop->end_time = '11:00';
        $workshop->save();

        $workshop1 = new Workshop();
        $workshop1->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $workshop1->campus_id = Campus::whereName('Gold Coast')->first()->id;
        $workshop1->location_id = Location::whereName('Room A.123')->first()->id;
        $workshop1->teacher_id = Teacher::whereFirstName('Graham')->whereLastName('Cooper')->first()->id;
        $workshop1->weekday = 'Tuesday';
        $workshop1->start_time = '14:00';
        $workshop1->end_time = '16:00';
        $workshop1->save();

        $workshop1 = new Workshop();
        $workshop1->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $workshop1->campus_id = Campus::whereName('Gold Coast')->first()->id;
        $workshop1->location_id = Location::whereName('Room L.8')->first()->id;
        $workshop1->teacher_id = Teacher::whereFirstName('Raina')->whereLastName('Mason')->first()->id;
        $workshop1->weekday = 'Wednesday';
        $workshop1->start_time = '09:00';
        $workshop1->end_time = '11:00';
        $workshop1->save();

        $workshop1 = new Workshop();
        $workshop1->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $workshop1->campus_id = Campus::whereName('Gold Coast')->first()->id;
        $workshop1->location_id = Location::whereName('Room L.8')->first()->id;
        $workshop1->teacher_id = Teacher::whereFirstName('Raina')->whereLastName('Mason')->first()->id;
        $workshop1->weekday = 'Wednesday';
        $workshop1->start_time = '13:00';
        $workshop1->end_time = '15:00';
        $workshop1->save();
    }
}
