<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 5 ; $i++) { 
        	Task::create([
        		'title' => $faker->sentence($nbWords = 4 , $variablesWords = false),
        		'completed' => false,
        		'approved' => false,
        		'taskId' => Str::random(10) 
        	]);
        }
    }
}
