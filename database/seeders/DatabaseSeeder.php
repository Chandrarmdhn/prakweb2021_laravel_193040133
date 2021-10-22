<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Chandra',
            'email' => 'chandra@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Oca',
            'email' => 'oca@gmail.com',
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
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit, accusantium repellendus ipsa laudantium fuga excepturi a facere enim libero veritatis doloribus. Quibusdam, vitae sapiente consequuntur excepturi perspiciatis nobis saepe. Dignissimos excepturi veritatis impedit ratione quae molestiae odio quisquam in consequuntur, quos iusto temporibus repudiandae aut accusamus, officiis quaerat. Nam, molestias iste vel perferendis voluptatem natus dolore nobis? Iste et nam cum ut a, consectetur vitae impedit rerum harum? Reiciendis perferendis cumque deserunt accusamus pariatur, placeat quibusdam, tempora molestiae, consectetur et voluptas maiores corrupti obcaecati beatae. Temporibus, optio suscipit?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit, accusantium repellendus ipsa laudantium fuga excepturi a facere enim libero veritatis doloribus. Quibusdam, vitae sapiente consequuntur excepturi perspiciatis nobis saepe. Dignissimos excepturi veritatis impedit ratione quae molestiae odio quisquam in consequuntur, quos iusto temporibus repudiandae aut accusamus, officiis quaerat. Nam, molestias iste vel perferendis voluptatem natus dolore nobis? Iste et nam cum ut a, consectetur vitae impedit rerum harum? Reiciendis perferendis cumque deserunt accusamus pariatur, placeat quibusdam, tempora molestiae, consectetur et voluptas maiores corrupti obcaecati beatae. Temporibus, optio suscipit?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit, accusantium repellendus ipsa laudantium fuga excepturi a facere enim libero veritatis doloribus. Quibusdam, vitae sapiente consequuntur excepturi perspiciatis nobis saepe. Dignissimos excepturi veritatis impedit ratione quae molestiae odio quisquam in consequuntur, quos iusto temporibus repudiandae aut accusamus, officiis quaerat. Nam, molestias iste vel perferendis voluptatem natus dolore nobis? Iste et nam cum ut a, consectetur vitae impedit rerum harum? Reiciendis perferendis cumque deserunt accusamus pariatur, placeat quibusdam, tempora molestiae, consectetur et voluptas maiores corrupti obcaecati beatae. Temporibus, optio suscipit?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta, incidunt deleniti provident ratione eveniet eaque minus cupiditate porro dolorum fugit, accusantium repellendus ipsa laudantium fuga excepturi a facere enim libero veritatis doloribus. Quibusdam, vitae sapiente consequuntur excepturi perspiciatis nobis saepe. Dignissimos excepturi veritatis impedit ratione quae molestiae odio quisquam in consequuntur, quos iusto temporibus repudiandae aut accusamus, officiis quaerat. Nam, molestias iste vel perferendis voluptatem natus dolore nobis? Iste et nam cum ut a, consectetur vitae impedit rerum harum? Reiciendis perferendis cumque deserunt accusamus pariatur, placeat quibusdam, tempora molestiae, consectetur et voluptas maiores corrupti obcaecati beatae. Temporibus, optio suscipit?',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}
