<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Lets truncate our existing record to start form scratch
    	Article::truncate();

    	$faker = \Faker\Factory::create();

    	// lets create few article in our Article table
    	for ($i=0; $i <50 ; $i++) { 
    		Article::Create([
    			'title' => $faker->sentence,
    			'body' => $faker->paragraph,
    		]);
    	}
    }
}
