<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newPost = new Post();
            $newPost->username = $faker->unique()->name();
            $newPost->description = $faker->paragraph(2, true);
            $newPost->cover_url = $faker->imageUrl(360, 360, 'posts', true, 'post');
            $newPost->save();
        }
    }
}
