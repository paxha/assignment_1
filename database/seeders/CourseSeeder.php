<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course();
        $course->code = '2202321';
        $course->name = 'Associate Degree of Information Technology';
        $course->credit_points = 192;
        $course->note = 'First 2 years of B InfTech';
        $course->save();

        $course1 = new Course();
        $course1->code = '3002111';
        $course1->name = 'Bachelor of Information Technology';
        $course1->credit_points = 288;
        $course1->save();

        $course2 = new Course();
        $course2->code = '3002116';
        $course2->name = 'Bachelor of Applied Computing';
        $course2->credit_points = 288;
        $course2->note = 'Entry pathways from TAFE';
        $course2->save();

        $course3 = new Course();
        $course3->code = '3007016';
        $course3->name = 'Bachelor of Technology Education';
        $course3->credit_points = 384;
        $course3->save();

        $course4 = new Course();
        $course4->code = '3707000';
        $course4->name = 'Bachelor of Education';
        $course4->credit_points = 192;
        $course4->note = 'Graduate entry';
        $course4->save();
    }
}
