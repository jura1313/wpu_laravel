<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "JuRA",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora accusamus corrupti, similique non voluptates libero iure est rerum suscipit fugit maiores quo ratione aut in perferendis laboriosam assumenda ad aliquid?
            "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dody",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis aspernatur recusandae totam. Modi possimus facilis eum corporis? Ut laborum temporibus accusamus provident, debitis accusantium repellat eius quisquam facere quidem quis. Aut cum suscipit, unde iusto sapiente facilis, veritatis fuga numquam rem ratione explicabo repellendus. Eum accusantium similique, numquam qui eaque rerum pariatur vel ex delectus blanditiis quae? Excepturi maiores suscipit nostrum quis id adipisci molestias voluptatibus velit accusantium veniam, alias minima reprehenderit obcaecati. Modi error porro necessitatibus enim aliquid accusamus alias quibusdam voluptas voluptatem itaque. Aut saepe consectetur expedita. Quis deleniti laudantium quasi distinctio itaque, porro hic ipsum nobis cumque, temporibus esse nisi deserunt? Suscipit, facilis illum repudiandae sequi ut officiis ipsa impedit minus natus facere repellendus ducimus ad ea excepturi nulla, dolor optio omnis. Quae quo eos cumque autem!"
        ]
        ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
