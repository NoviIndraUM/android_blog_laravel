<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

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
            'name' => 'Novi Indra F',
            'username' => 'novi_indra_f',
            'email' => 'novi.indra@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy.dod@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Blog::factory(20)->create();

        // Blog::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, blanditiis natus totam laborum aliquid delectus alias eveniet nemo, qui, ducimus ipsam. Cumque illum eos eum reprehenderit animi sunt odit ratione!',
        //     'body' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure inventore aut labore dolorem saepe magnam ab, ut consequuntur ullam vero numquam minima. Animi voluptate quis odio soluta qui dolorum sed aspernatur dolore ipsam quidem, rerum inventore dignissimos vel accusamus accusantium, aliquid repudiandae, quae doloremque quasi rem numquam provident! Ex perferendis odit laborum delectus laboriosam quis, minima placeat dignissimos voluptatem quae optio. Iure vel unde, obcaecati architecto dignissimos dolore rem, atque id a cum fugit eveniet officiis blanditiis temporibus nostrum dolorem numquam deleniti. Qui numquam, error adipisci molestias quidem pariatur totam minima! Asperiores animi enim explicabo sed quibusdam vero iste similique.',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);

        // Blog::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, blanditiis natus totam laborum aliquid delectus alias eveniet nemo, qui, ducimus ipsam. Cumque illum eos eum reprehenderit animi sunt odit ratione!',
        //     'body' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure inventore aut labore dolorem saepe magnam ab, ut consequuntur ullam vero numquam minima. Animi voluptate quis odio soluta qui dolorum sed aspernatur dolore ipsam quidem, rerum inventore dignissimos vel accusamus accusantium, aliquid repudiandae, quae doloremque quasi rem numquam provident! Ex perferendis odit laborum delectus laboriosam quis, minima placeat dignissimos voluptatem quae optio. Iure vel unde, obcaecati architecto dignissimos dolore rem, atque id a cum fugit eveniet officiis blanditiis temporibus nostrum dolorem numquam deleniti. Qui numquam, error adipisci molestias quidem pariatur totam minima! Asperiores animi enim explicabo sed quibusdam vero iste similique.',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);

        // Blog::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, blanditiis natus totam laborum aliquid delectus alias eveniet nemo, qui, ducimus ipsam. Cumque illum eos eum reprehenderit animi sunt odit ratione!',
        //     'body' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure inventore aut labore dolorem saepe magnam ab, ut consequuntur ullam vero numquam minima. Animi voluptate quis odio soluta qui dolorum sed aspernatur dolore ipsam quidem, rerum inventore dignissimos vel accusamus accusantium, aliquid repudiandae, quae doloremque quasi rem numquam provident! Ex perferendis odit laborum delectus laboriosam quis, minima placeat dignissimos voluptatem quae optio. Iure vel unde, obcaecati architecto dignissimos dolore rem, atque id a cum fugit eveniet officiis blanditiis temporibus nostrum dolorem numquam deleniti. Qui numquam, error adipisci molestias quidem pariatur totam minima! Asperiores animi enim explicabo sed quibusdam vero iste similique.',
        //     'category_id' => 3,
        //     'user_id' =>1
        // ]);

        // Blog::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, blanditiis natus totam laborum aliquid delectus alias eveniet nemo, qui, ducimus ipsam. Cumque illum eos eum reprehenderit animi sunt odit ratione!',
        //     'body' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure inventore aut labore dolorem saepe magnam ab, ut consequuntur ullam vero numquam minima. Animi voluptate quis odio soluta qui dolorum sed aspernatur dolore ipsam quidem, rerum inventore dignissimos vel accusamus accusantium, aliquid repudiandae, quae doloremque quasi rem numquam provident! Ex perferendis odit laborum delectus laboriosam quis, minima placeat dignissimos voluptatem quae optio. Iure vel unde, obcaecati architecto dignissimos dolore rem, atque id a cum fugit eveniet officiis blanditiis temporibus nostrum dolorem numquam deleniti. Qui numquam, error adipisci molestias quidem pariatur totam minima! Asperiores animi enim explicabo sed quibusdam vero iste similique.',
        //     'category_id' => 2,
        //     'user_id' =>2
        // ]);
    }
}
