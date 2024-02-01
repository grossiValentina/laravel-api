<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['js', 'vue.js', 'laravel', 'php'];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->nome = $technology;
            $newTechnology->slug = Str::slug($technology);
            $newTechnology->hex_color = $faker->hexColor();
            
            $newTechnology->save();
        }
    }
}
