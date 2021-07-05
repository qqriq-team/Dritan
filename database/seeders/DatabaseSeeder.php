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
                'cover_image'=> 'https://via.placeholder.com/150',
                'yt_link' => 'https://www.youtube.com/watch?v=kpeEQVFuaxk',
                'images' => 'https://via.placeholder.com/150',
                'lang_mne' => 'mne',
                'title_mne' => 'prvi blog mne',
                'cover_text_mne' => 'text text text mne',
                'blog_mne' => 'blog blog blog mne',
                'lang_en' => 'en',
                'title_en' => 'first blog en',
                'cover_text_en' => 'text text text en',
                'blog_en' => 'blog blog blog en',
                'lang_al' => 'al',
                'title_al' => 'nje blog al',
                'cover_text_al' => 'text text text al',
                'blog_al' => 'blog blog blog al',
            ]
        );
    }
}
