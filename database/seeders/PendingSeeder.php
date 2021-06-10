<?php

namespace Database\Seeders;

use App\Models\Pending;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PendingSeeder extends Seeder
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
        	Pending::create([
        		'completed' => false,
        		'title' => $faker->sentence($nbWords = 4 , $variablesWords = false),
        		'approved' => false,
        		'waiting' => true,
        		'taskId' => Str::random(10) 
        	]);
        }
    }
}
