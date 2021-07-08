<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Languages;
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
    
        Category::create(
            [
                'name' => 'Građanski aktivizam'
            ]
        );

        Category::create(
            [
                'name' => 'Politički aktivizam'
            ]
        );
        Languages::create(
            [
                'name' => 'MNE'
            ]
        );
        Languages::create(
            [
                'name' => 'EN'
            ]
        );
        Languages::create(
            [
                'name' => 'AL'
            ]
        );
    }
}
