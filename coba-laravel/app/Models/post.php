<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Pertama",
      "slug" => "judul-pertama",
      "author" => "Alan",
      "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium suscipit itaque impedit eligendi dolores labore repellendus quo quam mollitia porro a, eum modi, dolorem, temporibus at voluptates. Animi provident enim architecto, dolorum vitae placeat. Ipsum delectus id pariatur illo quis, tempore est quam nostrum ipsa aspernatur cum ab recusandae autem repellendus rem voluptatibus, non deserunt. Nam placeat hic temporibus sunt explicabo facilis voluptate. Nostrum reiciendis officia, soluta veritatis quo, asperiores maiores animi accusamus excepturi eum cupiditate saepe! Exercitationem quo maxime, vero modi, aut fugit quibusdam asperiores autem, unde nemo ut accusantium eaque voluptates porro quaerat eligendi nisi animi dolorem inventore?"
    ],
    [
      "title" => "Judul Kedua",
      "slug" => "judul-kedua",
      "author" => "Budi",
      "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium suscipit itaque impedit eligendi dolores labore repellendus quo quam mollitia porro a, eum modi, dolorem, temporibus at voluptates. Animi provident enim architecto, dolorum vitae placeat. Ipsum delectus id pariatur illo quis, tempore est quam nostrum ipsa aspernatur cum ab recusandae autem repellendus rem voluptatibus, non deserunt. Nam placeat hic temporibus sunt explicabo facilis voluptate. Nostrum reiciendis officia, soluta veritatis quo, asperiores maiores animi accusamus excepturi eum cupiditate saepe! Exercitationem quo maxime, vero modi, aut fugit quibusdam asperiores autem, unde nemo ut accusantium eaque voluptates porro quaerat eligendi nisi animi dolorem inventore?"
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
