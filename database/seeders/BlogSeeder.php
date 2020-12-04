<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    foreach (range(1,10) as $index) {
        	DB::table('blogs')->insert([
            'title' => $faker->sentence,
            'body'  => $faker->paragraph
        ]);
        }    
        
     
    }
}
