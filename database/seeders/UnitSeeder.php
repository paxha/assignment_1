<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit1 = new Unit();
        $unit1->code = 'COM00207';
        $unit1->name = 'Communication in Organisations';
        $unit1->accessor = 'TBA';
        $unit1->save();

        $unit2 = new Unit();
        $unit2->code = 'CSC71001';
        $unit2->name = 'Programming I';
        $unit2->accessor = 'Carolyn Seton';
        $unit2->save();

        $unit3 = new Unit();
        $unit3->code = 'ISY00243';
        $unit3->name = 'Systems Analysis and Design';
        $unit3->accessor = 'Graham Cooper';
        $unit3->save();

        $unit4 = new Unit();
        $unit4->code = 'CSC72001';
        $unit4->name = 'Database Systems';
        $unit4->accessor = 'Elizabeth Yuwono';
        $unit4->save();
        $unit4->prerequisites()->attach($unit3->id);

        $unit5 = new Unit();
        $unit5->code = 'CSC72002';
        $unit5->name = 'Programming II';
        $unit5->accessor = 'Raina Mason';
        $unit5->save();

        $unit6 = new Unit();
        $unit6->code = 'CSC00240';
        $unit6->name = 'Data Communications and Networks';
        $unit6->accessor = 'Golam Sorwar';
        $unit6->save();

        $unit7 = new Unit();
        $unit7->code = 'ISY10209';
        $unit7->name = 'Web Development I';
        $unit7->accessor = 'Bill Smart';
        $unit7->save();

        $unit8 = new Unit();
        $unit8->code = 'CSC10214';
        $unit8->name = 'Designing the User Experience';
        $unit8->accessor = 'Carolyn Seton';
        $unit8->save();
        $unit8->prerequisites()->attach($unit7->id);

        $unit9 = new Unit();
        $unit9->code = 'CSC10215';
        $unit9->name = 'Developing the User Experience';
        $unit9->accessor = 'Carolyn Seton';
        $unit9->save();
        $unit9->prerequisites()->attach($unit8->id);

        $unit10 = new Unit();
        $unit10->code = 'CSC10210';
        $unit10->name = 'Object Oriented Program Development';
        $unit10->accessor = 'Barry Wilks';
        $unit10->save();

        $unit11 = new Unit();
        $unit11->code = 'ISY00246';
        $unit11->name = 'Client/Server Systems';
        $unit11->accessor = 'Barry Wilks';
        $unit11->save();
        $unit11->prerequisites()->attach($unit10->id);

        $unit12 = new Unit();
        $unit12->code = 'CSC10216';
        $unit12->name = 'Object Oriented GUI Development';
        $unit12->accessor = 'Barry Wilks';
        $unit12->save();
        $unit12->prerequisites()->attach($unit11->id);

        $unit13 = new Unit();
        $unit13->code = 'ISY10221';
        $unit13->name = 'Computing Project I: Analysis and Design';
        $unit13->accessor = 'Elizabeth Yuwono';
        $unit13->save();
        $unit13->prerequisites()->attach([$unit12->id, $unit11->id, $unit10->id]);
    }
}
