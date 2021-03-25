<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\Course;
use App\Models\Student;
use App\Models\Unit;
use App\Models\Workshop;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->course_id = Course::whereName('Associate Degree of Information Technology')->first()->id;
        $student->first_name = 'Melodie';
        $student->last_name = 'Santiago';
        $student->address = 'P.O. Box 814, 3690 Libero. Road';
        $student->city = 'Warrnambool';
        $student->state = 'VIC';
        $student->postcode = '3155';
        $student->email = 'pellentesque@erateget.org';
        $student->phone = '(06) 8392 3207';
        $student->enrolment_date = '2017-02-02';
        $student->status = 'completed';
        $student->save();
        $student->units()->attach(Unit::whereIn('code', [
            'ISY10209',
            'CSC00235',
            'ISY00243',
            'ISY10212',
            'CSC00228',
            'ISY00245',
            'ISY00324',
        ])->get()->pluck('id'));
        $student->assessments()->attach(Assessment::whereName('Online Test 1')->first()->id, [
            'submitted_date' => '2019-03-01',
            'marks_awarded' => '4.5',
        ]);
        $student->assessments()->attach(Assessment::whereName('Online Test 2')->first()->id, [
            'submitted_date' => '2019-03-08',
            'marks_awarded' => '5',
        ]);
        $student->assessments()->attach(Assessment::whereName('Online Test 3')->first()->id, [
            'submitted_date' => '2019-04-15',
            'marks_awarded' => '4',
        ]);

        $student1 = new Student();
        $student1->course_id = Course::whereName('Associate Degree of Information Technology')->first()->id;
        $student1->first_name = 'Kaden';
        $student1->last_name = 'Clarke';
        $student1->address = '3130 Ipsum. Rd.';
        $student1->city = 'Hervey Bay';
        $student1->state = 'QLD';
        $student1->postcode = '4133';
        $student1->email = 'velit.egestas@Maecenasornare.com';
        $student1->phone = '(08) 3851 1808';
        $student1->enrolment_date = '2018-02-04';
        $student1->status = 'enrolled';
        $student1->save();
        $student1->units()->attach(Unit::whereIn('code', [
            'ISY10209',
            'ISY00324',
            'ISY00243',
            'ISY00243',
            'CSC00325',
            'CSC00228',
        ])->get()->pluck('id'));

        $student2 = new Student();
        $student2->course_id = Course::whereName('Bachelor of Education')->first()->id;
        $student2->first_name = 'Zorita';
        $student2->last_name = 'Slater';
        $student2->address = 'P.O. Box 434, 6645 Tortor St.';
        $student2->city = 'Parramatta';
        $student2->state = 'NSW';
        $student2->postcode = '2012';
        $student2->email = 'non.lobortis.quis@id.org';
        $student2->phone = '(01) 3511 9967';
        $student2->enrolment_date = '2019-02-08';
        $student2->status = 'enrolled';
        $student2->save();
        $student2->workshops()->attach(Workshop::whereIn('id', [1, 2])->get()->pluck('id'));
    }
}
