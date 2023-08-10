<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Alan',
            'email' => 'alanzagi2007@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Adam',
            'email' => 'adamadam@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul-satu',
            'slug' => 'judul-satu',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut optio fugiat placeat, quas tenetur saepe nesciunt magni quod corporis itaque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nulla sit voluptatum ut sint optio autem sapiente mollitia pariatur earum, doloremque odio fugit animi aut dolorum quam? Asperiores ducimus corrupti, dolorem incidunt aliquam minima eligendi, tempora quis quo molestiae eius, eum necessitatibus accusamus veritatis quisquam totam sit commodi perspiciatis laudantium rerum nihil ipsum quos blanditiis itaque! Doloremque soluta inventore deleniti itaque deserunt neque quia accusamus. Cupiditate soluta, laborum libero necessitatibus doloremque unde, quo voluptas, iste maiores voluptatum consequatur aliquam nisi nesciunt quaerat aspernatur? Quis mollitia natus veritatis, enim illum dolore rerum sint alias numquam aperiam veniam quasi praesentium dicta molestias.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul-dua',
            'slug' => 'judul-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut optio fugiat placeat, quas tenetur saepe nesciunt magni quod corporis itaque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nulla sit voluptatum ut sint optio autem sapiente mollitia pariatur earum, doloremque odio fugit animi aut dolorum quam? Asperiores ducimus corrupti, dolorem incidunt aliquam minima eligendi, tempora quis quo molestiae eius, eum necessitatibus accusamus veritatis quisquam totam sit commodi perspiciatis laudantium rerum nihil ipsum quos blanditiis itaque! Doloremque soluta inventore deleniti itaque deserunt neque quia accusamus. Cupiditate soluta, laborum libero necessitatibus doloremque unde, quo voluptas, iste maiores voluptatum consequatur aliquam nisi nesciunt quaerat aspernatur? Quis mollitia natus veritatis, enim illum dolore rerum sint alias numquam aperiam veniam quasi praesentium dicta molestias.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul-tiga',
            'slug' => 'judul-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut optio fugiat placeat, quas tenetur saepe nesciunt magni quod corporis itaque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nulla sit voluptatum ut sint optio autem sapiente mollitia pariatur earum, doloremque odio fugit animi aut dolorum quam? Asperiores ducimus corrupti, dolorem incidunt aliquam minima eligendi, tempora quis quo molestiae eius, eum necessitatibus accusamus veritatis quisquam totam sit commodi perspiciatis laudantium rerum nihil ipsum quos blanditiis itaque! Doloremque soluta inventore deleniti itaque deserunt neque quia accusamus. Cupiditate soluta, laborum libero necessitatibus doloremque unde, quo voluptas, iste maiores voluptatum consequatur aliquam nisi nesciunt quaerat aspernatur? Quis mollitia natus veritatis, enim illum dolore rerum sint alias numquam aperiam veniam quasi praesentium dicta molestias.',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul-empat',
            'slug' => 'judul-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut optio fugiat placeat, quas tenetur saepe nesciunt magni quod corporis itaque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nulla sit voluptatum ut sint optio autem sapiente mollitia pariatur earum, doloremque odio fugit animi aut dolorum quam? Asperiores ducimus corrupti, dolorem incidunt aliquam minima eligendi, tempora quis quo molestiae eius, eum necessitatibus accusamus veritatis quisquam totam sit commodi perspiciatis laudantium rerum nihil ipsum quos blanditiis itaque! Doloremque soluta inventore deleniti itaque deserunt neque quia accusamus. Cupiditate soluta, laborum libero necessitatibus doloremque unde, quo voluptas, iste maiores voluptatum consequatur aliquam nisi nesciunt quaerat aspernatur? Quis mollitia natus veritatis, enim illum dolore rerum sint alias numquam aperiam veniam quasi praesentium dicta molestias.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
