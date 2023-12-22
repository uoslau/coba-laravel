<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title"     =>  "Judul Post Pertama",
            "slug"      =>  "judul-post-pertama",
            "body"      =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, nobis error voluptates ea sint expedita, esse explicabo magni ullam quos, neque mollitia autem dolore at officiis nesciunt in est dignissimos voluptatibus. Repudiandae perspiciatis molestiae voluptatem voluptas velit explicabo ab blanditiis officiis eveniet. Voluptates nemo magnam pariatur laboriosam nam, tempora earum architecto ratione necessitatibus velit voluptas asperiores fuga non animi quia praesentium. Libero doloremque, beatae, architecto blanditiis, nobis possimus alias rem necessitatibus omnis soluta accusamus molestias mollitia provident? Aspernatur, eos voluptate."
        ],
        [
            "title"     =>  "Judul Post Kedua",
            "slug"      =>  "judul-post-kedua",
            "body"      =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id, blanditiis provident nam quibusdam architecto a. Laboriosam id nulla autem sunt voluptatibus ullam a eveniet! Ipsa voluptas fuga veniam hic quisquam impedit facilis mollitia sit. Suscipit et sequi placeat accusantium magni magnam tempora modi, quidem voluptatum vitae unde rem laborum qui, quam facere natus, voluptas quasi reiciendis aut dolor soluta architecto a. Doloribus perferendis ratione magnam dolorum vel consequuntur vitae vero ullam harum voluptatem tenetur fugit, assumenda rerum nisi minus aliquid distinctio dolor non quidem laboriosam pariatur possimus? Ipsam mollitia ab placeat, molestiae voluptates atque ex non est libero doloremque."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
