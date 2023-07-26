<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alan",
        "email" => "alanzagi2007@gmail.com"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single route
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = null;
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
            break; // Keluar dari perulangan jika post ditemukan
        }
    }

    if ($new_post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $new_post
        ]);
    } else {
        return view('post_not_found'); // Tampilkan halaman post_not_found jika post tidak ditemukan
    }
});
