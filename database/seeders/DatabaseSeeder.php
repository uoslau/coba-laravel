<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt(12345)
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, recusandae.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo veritatis excepturi quia. Distinctio quod minus tempora animi. Consectetur beatae at, deleniti non repellendus ab dicta rerum sunt, vero magni culpa quia blanditiis exercitationem nihil. Voluptatum voluptates id totam iste, veniam iure eum dolore similique sequi odit aliquam maxime ex voluptatibus?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, recusandae.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo veritatis excepturi quia. Distinctio quod minus tempora animi. Consectetur beatae at, deleniti non repellendus ab dicta rerum sunt, vero magni culpa quia blanditiis exercitationem nihil. Voluptatum voluptates id totam iste, veniam iure eum dolore similique sequi odit aliquam maxime ex voluptatibus?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, recusandae.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo veritatis excepturi quia. Distinctio quod minus tempora animi. Consectetur beatae at, deleniti non repellendus ab dicta rerum sunt, vero magni culpa quia blanditiis exercitationem nihil. Voluptatum voluptates id totam iste, veniam iure eum dolore similique sequi odit aliquam maxime ex voluptatibus?',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
