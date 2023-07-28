<?php

namespace App\Models;


class Post


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        return static::getAllPost()->firstWhere('slug', $slug);
    }
}
