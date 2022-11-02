<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
        foreach(range(1,30) as $index){
            DB::table('tasks')->insert([
                'name' => $faker->text(10),
                'title' => $faker->sentence(5),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
                'is_completed' => '0'
            ]);
        }
    }
}
