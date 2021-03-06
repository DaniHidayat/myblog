<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

        // User::create([
        //     'name' => 'Dani Hidayat',
        //     'email'=> 'danihidayat@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Jajang',
        //     'email'=> 'jajang@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'

        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);
        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam recusandae eligendi aperiam reiciendis, minus natus maiores, quaerat incidunt nobis consequuntur quisquam consequatur id consectetur doloremque numquam iusto ad eum. ',
        //     'body' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam recusandae eligendi aperiam reiciendis, minus natus maiores, quaerat incidunt nobis consequuntur quisquam consequatur id consectetur doloremque numquam iusto ad eum. Officia ullam dolorem maxime corporis? Et aut eius, repellat voluptatem assumenda quod voluptatibus perferendis deserunt recusandae fugit ipsum atque totam sapiente rem non incidunt quis, repudiandae officiis perspiciatis animi accusamus. Odit earum iure veniam cumque molestiae sed eum aspernatur, tenetur fugit exercitationem officia placeat a animi consequuntur iste nam similique quas harum voluptates quia nobis. Assumenda doloremque laborum necessitatibus. Unde, nihil minima deleniti accusantium eaque commodi. Tenetur reprehenderit ut molestias nisi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam recusandae eligendi aperiam reiciendis, minus natus maiores, quaerat incidunt nobis consequuntur quisquam consequatur id consectetur doloremque numquam iusto ad eum. ',
        //     'body' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam recusandae eligendi aperiam reiciendis, minus natus maiores, quaerat incidunt nobis consequuntur quisquam consequatur id consectetur doloremque numquam iusto ad eum. Officia ullam dolorem maxime corporis? Et aut eius, repellat voluptatem assumenda quod voluptatibus perferendis deserunt recusandae fugit ipsum atque totam sapiente rem non incidunt quis, repudiandae officiis perspiciatis animi accusamus. Odit earum iure veniam cumque molestiae sed eum aspernatur, tenetur fugit exercitationem officia placeat a animi consequuntur iste nam similique quas harum voluptates quia nobis. Assumenda doloremque laborum necessitatibus. Unde, nihil minima deleniti accusantium eaque commodi. Tenetur reprehenderit ut molestias nisi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam recusandae eligendi aperiam reiciendis, minus natus maiores, quaerat incidunt nobis consequuntur quisquam consequatur id consectetur doloremque numquam iusto ad eum. ',
        //     'body' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam recusandae eligendi aperiam reiciendis, minus natus maiores, quaerat incidunt nobis consequuntur quisquam consequatur id consectetur doloremque numquam iusto ad eum. Officia ullam dolorem maxime corporis? Et aut eius, repellat voluptatem assumenda quod voluptatibus perferendis deserunt recusandae fugit ipsum atque totam sapiente rem non incidunt quis, repudiandae officiis perspiciatis animi accusamus. Odit earum iure veniam cumque molestiae sed eum aspernatur, tenetur fugit exercitationem officia placeat a animi consequuntur iste nam similique quas harum voluptates quia nobis. Assumenda doloremque laborum necessitatibus. Unde, nihil minima deleniti accusantium eaque commodi. Tenetur reprehenderit ut molestias nisi.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
