<?php

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
           $newArticle = new Article();
           $newArticle -> title = $faker->word();
           $newArticle -> body = $faker->sentence();
           $newArticle -> author = $faker->name();
           $newArticle -> date = $faker->date();
           $newArticle -> category = $faker->word();
           $newArticle -> tag = $faker->word();
           $newArticle -> save();

        }
    }
}
