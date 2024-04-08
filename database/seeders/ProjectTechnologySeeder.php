<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $projects = Project::all(1);
        $technologies = Technology::all()->pluck('id');

        // $project->technologies()->attach([2,3,5]);
        // $project->technologies()->detach([2,3]);    così rimane solo il 5
    
        foreach ($projects as $project) {
            $projects->technologies()->sync($technologies);
        }
    }
}