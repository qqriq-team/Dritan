<?php

namespace Database\Seeders;

use App\Models\Blog;
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
        // \App\Models\User::factory(10)->create();
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin')
            ]

        );
        Blog::create(
            [
                'title' => 'prvi blog',
                'cover_image'=> 'https://via.placeholder.com/150',
                'cover_text' => 'text text text',
                'blog' => 'blog blog blog',
                'yt_link' => 'https://www.youtube.com/watch?v=kpeEQVFuaxk'
            ]
        );
    }
}
