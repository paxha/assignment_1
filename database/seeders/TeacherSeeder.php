<?php

namespace Database\Seeders;

use App\Models\Campus;
use App\Models\Location;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = new Teacher();
        $teacher->campus_id = Campus::whereName('Coffs Harbour')->first()->id;
        $teacher->location_id = Location::whereName('M.G.33')->first()->id;
        $teacher->first_name = 'Bruce';
        $teacher->last_name = 'Armstrong';
        $teacher->email = 'bruce.armstrong@scu.edu.au';
        $teacher->phone = '66593174';
        $teacher->save();

        $teacher1 = new Teacher();
        $teacher1->campus_id = Campus::whereName('Coffs Harbour')->first()->id;
        $teacher1->location_id = Location::whereName('M.G.32')->first()->id;
        $teacher1->first_name = 'Graham';
        $teacher1->last_name = 'Cooper';
        $teacher1->email = 'graham.cooper@scu.edu.au';
        $teacher1->phone = '66593327';
        $teacher1->save();

        $teacher2 = new Teacher();
        $teacher2->campus_id = Campus::whereName('Gold Coast')->first()->id;
        $teacher2->first_name = 'Michelle';
        $teacher2->last_name = 'Kennedy';
        $teacher2->email = 'michelle.kennedy@scu.edu.au';
        $teacher2->save();

        $teacher3 = new Teacher();
        $teacher3->campus_id = Campus::whereName('Gold Coast')->first()->id;
        $teacher3->first_name = 'Alex';
        $teacher3->last_name = 'Hendry';
        $teacher3->email = 'alex.hendry@scu.edu.au';
        $teacher3->save();

        $teacher4 = new Teacher();
        $teacher4->campus_id = Campus::whereName('Lismore')->first()->id;
        $teacher4->first_name = 'Nicola';
        $teacher4->last_name = 'Jayne';
        $teacher4->email = 'nicola.jayne@scu.edu.au';
        $teacher4->phone = '66203118';
        $teacher4->save();

        $teacher5 = new Teacher();
        $teacher5->campus_id = Campus::whereName('Gold Coast')->first()->id;
        $teacher5->location_id = Location::whereName('A3.03')->first()->id;
        $teacher5->first_name = 'Raina';
        $teacher5->last_name = 'Mason';
        $teacher5->email = 'raina.mason@scu.edu.au';
        $teacher5->phone = '755893194';
        $teacher5->save();
    }
}
