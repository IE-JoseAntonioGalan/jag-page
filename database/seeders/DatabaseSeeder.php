<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\News;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        News::factory(25)->create();
        Event::factory(25)->create();
        Project::factory(25)->create();
    }
}
