<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use App\Models\Post;
use Database\Factories\UserFactory;
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
         $users = User::factory(10)->create();
         foreach ($users as $user){
             $aboutMe = "Hi, my name is {$user["name"]} I am a blogger";
             Page::factory()->create([
                'title' => 'About Me',
                 'body' => $aboutMe,
                 'published' => '1',
                 'user_id' => $user["id"]
            ]);

             $contactInfo = "Email: {$user["email"]}";
             Page::factory()->create([
                 'title' => 'Contact Me',
                 'body' => $contactInfo,
                 'published' => '1',
                 'user_id' => $user["id"]
             ]);
         }
         Post::factory(10)->create();

    }
}
