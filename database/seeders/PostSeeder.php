<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'Картинка 1',
            'description' => 'admin',
            'image' => 'image_1.png',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Картинка 2',
            'description' => 'Картинка 2',
            'image' => 'image_2.png',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Картинка 2',
            'description' => 'Картинка 2',
            'image' => 'image_3.png',
            'user_id' => 1,
        ]);
    }
}
