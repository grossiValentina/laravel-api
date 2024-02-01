<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();
            $project->type_id = mt_rand(1, 3);
            $project->titolo = $faker->sentence(4);
            $project->descrizione = $faker->text(200);
            $project->slug = Str::slug($project->titolo);

            $project->save();
        }
    }
}
