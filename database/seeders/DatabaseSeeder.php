<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CourseSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(CampusSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(WorkshopSeeder::class);
        $this->call(AssessmentSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
