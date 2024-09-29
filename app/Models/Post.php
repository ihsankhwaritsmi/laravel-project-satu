<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
            [
                'id'=> 1,
                'slug'=> 'judul-post-pertama',
                'title' => 'Judul Post Pertama',
                'author' => 'Ihsan Al Khwaritsmi',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, a, inventore voluptas dicta accusamus modi nesciunt voluptatibus quo deleniti obcaecati facere ipsa, eligendi qui libero incidunt voluptate quia velit dolorem.'
            ],
            [
                'id'=> 2,
                'slug'=> 'judul-post-kedua',
                'title' => 'Judul Post Kedua',
                'author' => 'Al Khwaritsmi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, dignissimos nam illum quo minus ullam beatae fugiat error nesciunt exercitationem esse accusantium libero maxime delectus placeat necessitatibus officia architecto unde?'
            ]
        ];
    }

    public static function find($slug):array{
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if(!$post){
            abort(404);
        }
        return $post;
    }
}
