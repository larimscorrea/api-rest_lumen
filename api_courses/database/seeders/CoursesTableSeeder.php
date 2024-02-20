<?php

namespace Database\Seeders;

use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseFactory::factory(\App\Course::class, 10)->create();
    }
}
