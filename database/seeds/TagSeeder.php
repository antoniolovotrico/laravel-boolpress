<?php

use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newTag = new Tag();
            $newTag -> title = $faker->word();
            $newTag -> save();
        }
    }
}
