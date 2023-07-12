<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jahidin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis incidunt veniam ex amet recusandae quos eum labore consequuntur aperiam ea sed, dignissimos, exercitationem expedita minus odit sequi sapiente sit?"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nurul Fatkhan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis incidunt veniam ex amet recusandae quos eum labore consequuntur aperiam ea sed, dignissimos, exercitationem expedita minus odit sequi sapiente sit?"
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
