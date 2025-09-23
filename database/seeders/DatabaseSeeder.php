<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Create 10 tags
        $tags = \App\Models\Tag::factory(10)->create();

    // Create 20 jobs, each with 2 random tags
        \App\Models\Job::factory(20)->create()->each(function($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
