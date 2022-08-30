<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $ent_posts = [
        [
            "title" => "Code Geass",
            "slug" => "code-geass",
            "author" => "lelouch",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ex quo obcaecati, deserunt mollitia laborum animi quisquam ipsam, aliquid unde alias, repudiandae porro! Expedita modi laudantium inventore aliquid id dolorem laborum? Eius quis iusto, dolorem dolor, quod cupiditate libero odit nobis veritatis, porro nostrum in. Impedit temporibus ad vel nisi laudantium, praesentium ea reprehenderit architecto aperiam blanditiis voluptas voluptatum. Nulla quibusdam iusto provident. Quas accusantium, doloribus iusto repudiandae, voluptates iste voluptas repellat odit ea qui eum illo quidem eligendi deleniti!"
        ],
        [
            "title" => "Inception",
            "slug" => "inception",
            "author" => "Caprio",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ex quo obcaecati, deserunt mollitia laborum animi quisquam ipsam, aliquid unde alias, repudiandae porro! Expedita modi laudantium inventore aliquid id dolorem laborum? Eius quis iusto, dolorem dolor, quod cupiditate libero odit nobis veritatis, porro nostrum in. Impedit temporibus ad vel nisi laudantium, praesentium ea reprehenderit architecto aperiam blanditiis voluptas voluptatum. Nulla quibusdam iusto provident. Quas accusantium, doloribus iusto repudiandae, voluptates iste voluptas repellat odit ea qui eum illo quidem eligendi deleniti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum omnis eum doloremque quam, beatae optio id fugiat consequatur eligendi hic quibusdam quis minus vitae rerum, sunt tenetur, ab earum perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe hic sint nam quos aliquid, alias quo accusantium, necessitatibus a mollitia delectus accusamus placeat illo voluptate unde magnam suscipit dolores fugit?"
        ]
    ];

    public static function all()
    {
        return collect(self::$ent_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // };
        return $posts->firstWhere('slug', $slug);
    }
}
