<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create([
            'name' => 'Jahidin',
            'username' => 'Jahidin',
            'email' => 'Jahidin@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Fatkhan',
        //     'email' => 'Fatkhan@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae. Soluta officia natus voluptatum, nesciunt nostrum ipsum</p><p> perspiciatis, labore cumque id in totam harum impedit facilis tempora modi magni nemo? Dolores, quam blanditiis! Perferendis distinctio maiores tenetur consequuntur ipsum cupiditate esse vitae!</p><p> Facere iure sequi nobis consectetur maxime perspiciatis similique autem expedita molestias excepturi. Doloribus aspernatur laudantium mollitia eius, quos provident nostrum dolor sit beatae omnis aliquam sapiente ad minus harum, dolorum soluta iste, similique voluptates vel dolore praesentium modi natus enim. Minus sunt recusandae ipsam minima cum! Reiciendis dolorem dicta omnis aperiam distinctio sapiente temporibus fugiat in, sequi minus veritatis numquam voluptatum. Ullam minus velit nulla officiis itaque nesciunt tenetur, sapiente distinctio ea nemo nam vel iste quos fuga excepturi non cupiditate odio, magnam vitae officia quisquam ipsam eligendi! Amet, magni quo?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae. Soluta officia natus voluptatum, nesciunt nostrum ipsum</p><p> perspiciatis, labore cumque id in totam harum impedit facilis tempora modi magni nemo? Dolores, quam blanditiis! Perferendis distinctio maiores tenetur consequuntur ipsum cupiditate esse vitae!</p><p> Facere iure sequi nobis consectetur maxime perspiciatis similique autem expedita molestias excepturi. Doloribus aspernatur laudantium mollitia eius, quos provident nostrum dolor sit beatae omnis aliquam sapiente ad minus harum, dolorum soluta iste, similique voluptates vel dolore praesentium modi natus enim. Minus sunt recusandae ipsam minima cum! Reiciendis dolorem dicta omnis aperiam distinctio sapiente temporibus fugiat in, sequi minus veritatis numquam voluptatum. Ullam minus velit nulla officiis itaque nesciunt tenetur, sapiente distinctio ea nemo nam vel iste quos fuga excepturi non cupiditate odio, magnam vitae officia quisquam ipsam eligendi! Amet, magni quo?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae. Soluta officia natus voluptatum, nesciunt nostrum ipsum</p><p> perspiciatis, labore cumque id in totam harum impedit facilis tempora modi magni nemo? Dolores, quam blanditiis! Perferendis distinctio maiores tenetur consequuntur ipsum cupiditate esse vitae!</p><p> Facere iure sequi nobis consectetur maxime perspiciatis similique autem expedita molestias excepturi. Doloribus aspernatur laudantium mollitia eius, quos provident nostrum dolor sit beatae omnis aliquam sapiente ad minus harum, dolorum soluta iste, similique voluptates vel dolore praesentium modi natus enim. Minus sunt recusandae ipsam minima cum! Reiciendis dolorem dicta omnis aperiam distinctio sapiente temporibus fugiat in, sequi minus veritatis numquam voluptatum. Ullam minus velit nulla officiis itaque nesciunt tenetur, sapiente distinctio ea nemo nam vel iste quos fuga excepturi non cupiditate odio, magnam vitae officia quisquam ipsam eligendi! Amet, magni quo?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio earum velit in exercitationem libero consequuntur, accusamus voluptatum saepe deleniti magni, nulla similique repellat ullam iste vitae. Soluta officia natus voluptatum, nesciunt nostrum ipsum</p><p> perspiciatis, labore cumque id in totam harum impedit facilis tempora modi magni nemo? Dolores, quam blanditiis! Perferendis distinctio maiores tenetur consequuntur ipsum cupiditate esse vitae!</p><p> Facere iure sequi nobis consectetur maxime perspiciatis similique autem expedita molestias excepturi. Doloribus aspernatur laudantium mollitia eius, quos provident nostrum dolor sit beatae omnis aliquam sapiente ad minus harum, dolorum soluta iste, similique voluptates vel dolore praesentium modi natus enim. Minus sunt recusandae ipsam minima cum! Reiciendis dolorem dicta omnis aperiam distinctio sapiente temporibus fugiat in, sequi minus veritatis numquam voluptatum. Ullam minus velit nulla officiis itaque nesciunt tenetur, sapiente distinctio ea nemo nam vel iste quos fuga excepturi non cupiditate odio, magnam vitae officia quisquam ipsam eligendi! Amet, magni quo?</p>'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
