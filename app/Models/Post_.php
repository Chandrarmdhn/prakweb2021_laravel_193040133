<?php

namespace App\Models;



class Post 
{
    private static $blog_posts =  [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Chandra Dwi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere doloremque sapiente veritatis consectetur architecto sed provident corporis quaerat sint exercitationem. Inventore voluptate consectetur dicta error, delectus nulla perferendis consequatur doloremque sapiente iste quo itaque sint mollitia et tempora optio deserunt laboriosam reprehenderit temporibus incidunt atque illo explicabo. Dolore quos voluptate repellendus numquam ipsam earum doloribus beatae quisquam similique placeat natus dicta, ea, iste consectetur facere quae, aut quidem saepe suscipit 
        distinctio deleniti? Nobis est facere perferendis odio? Corporis, placeat ducimus."
    ],
    [
        "title" => "Judul Tulisan Dwi",
        "slug" => "judul-post-kedua",
        "author" => "Dwi",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ea ullam sunt recusandae officia eligendi nostrum, voluptatum rem, dolor quo veniam sed impedit ipsam vitae error provident similique enim quam obcaecati adipisci aspernatur sapiente doloremque distinctio quisquam? Aliquid vitae nobis sed earum, officia inventore. Architecto dignissimos maiores iste dicta, et culpa iure numquam consequuntur quaerat laudantium dolorem aut possimus aspernatur. Ipsam fuga esse reprehenderit accusantium ipsum suscipit, error eveniet? Omnis, dicta facilis ex temporibus, quaerat, 
        veniam maxime ut nobis provident suscipit velit natus saepe at. Dignissimos qui voluptate inventore perspiciatis odit! Ut perspiciatis cupiditate assumenda repellat nulla magnam officiis velit repellendus alias, quaerat excepturi, obcaecati in exercitationem necessitatibus. Voluptatem, voluptatum saepe."
    ]

];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
          
     return $posts->firstWhere('slug',$slug);
    }

    

}
