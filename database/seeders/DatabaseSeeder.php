<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sarah',
            'email' => 'sarahre1@hotmail.com',
            'password' => 'password'
        ]);

        Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5226'
        ]);

        Course::factory()->create([
            'courseName' => 'JavaScript',
            'courseID' => 'HTTP5227'
        ]);

        Course::factory()->create([
            'courseName' => 'React',
            'courseID' => 'HTTP5228'
        ]);

        Student::factory(20)->create();
    }
}
