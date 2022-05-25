<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name' => 'Noe',
            'email' => 'noe@cosasdedevs.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
            'is_staff' => true,
        ]);

        Post::factory()->count(50)->create();
    }
}
