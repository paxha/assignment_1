<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assessment = new Assessment();
        $assessment->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $assessment->name = 'Online Test 1';
        $assessment->description = 'Multiple choice quiz';
        $assessment->due_date = '2019-03-01';
        $assessment->total_marks = '5';
        $assessment->save();

        $assessment = new Assessment();
        $assessment->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $assessment->name = 'Online Test 2';
        $assessment->description = 'Multiple choice quiz';
        $assessment->due_date = '2019-03-08';
        $assessment->total_marks = '5';
        $assessment->save();

        $assessment = new Assessment();
        $assessment->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $assessment->name = 'Online Test 3';
        $assessment->description = 'Multiple choice quiz';
        $assessment->due_date = '2019-04-15';
        $assessment->total_marks = '5';
        $assessment->save();

        $assessment = new Assessment();
        $assessment->unit_id = Unit::whereCode('CSC72001')->first()->id;
        $assessment->name = 'Exam';
        $assessment->description = 'Examination';
        $assessment->total_marks = '40';
        $assessment->save();
    }
}
