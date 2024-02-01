<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['FrontEnd', 'BackEnd', 'Design'];

        foreach($types as $type){
            $newType = new Type();
            $newType->type_id = $type;
            $newType->obiettivo = Str::slug($type);

            $newType->save();

        }

    }
}
