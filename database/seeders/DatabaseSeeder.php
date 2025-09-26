<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
use App\Models\Job;
use App\Models\Employer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'test@example.com',
        ]);

        // Create 5 employers
        $employers = Employer::factory(5)->create();

        // Create 10 tags
        $tags = Tag::factory(10)->create();

        // Create 20 jobs
        Job::factory(20)->make()->each(function ($job) use ($employers, $tags) {
            // Assign a random employer
            $job->employer_id = $employers->random()->id;
            $job->save();

            // Attach 2 random tags
            $job->tags()->attach($tags->random(2));
        });
    }
}
