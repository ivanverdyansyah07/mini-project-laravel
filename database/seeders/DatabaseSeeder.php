<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'adminblog@gmail.com',
            'password' => bcrypt('admin123'),
            'description' => 'Ini adalah admin yang akan maintenance pada website blog ini.',
            'role' => 'admin',
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti architecto iure delectus voluptate? Modi quod, eligendi facilis inventore unde vero at doloremque. Iure laudantium non, iste sit et fugit vel.',
        ]);

        Category::create([
            'name' => 'Design Graphic',
            'slug' => 'design-graphic',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium nulla facere voluptas quo earum, placeat, ipsum dignissimos illo molestias maxime. Repellat odit omnis nisi quae.',
        ]);
    }
}
