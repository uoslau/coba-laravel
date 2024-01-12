<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title"     => "Judul 1",
            "slug"      => "judul-1",
            "author"    => "Author 1",
            "body"      => "Isi 1"
        ],
        [
            "title"     => "Judul 2",
            "slug"      => "judul-2",
            "author"    => "Author 2",
            "body"      => "Isi 2"
        ]
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
