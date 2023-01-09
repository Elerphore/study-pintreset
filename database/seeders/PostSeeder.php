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
            'image' => 'image_2.jpg',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Картинка 2',
            'description' => 'Картинка 2',
            'image' => 'image_3.jpg',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Картинка 2',
            'description' => 'Картинка 2',
            'image' => 'luny-logo.png',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Смешной кот',
            'description' => 'смешной жестб',
            'image' => 'e40f86b2ed6e27fd285a4a1e9dca1af4.png',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Да',
            'description' => 'Нет',
            'image' => 'greatness-1.jpg',
            'user_id' => 1,
        ]);
    }
}
