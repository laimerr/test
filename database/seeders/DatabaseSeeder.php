<?php

namespace Database\Seeders;

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
      \App\Models\User::factory(...paramerters: 10)->create();

        Post::factory(...parameters: 1)->create([
          "name" => "Admin",
          "email" => "qmrkentq@gmail.com",
          "password" => bcrypt(value: "12345"),
        ]);
    }
}
