<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $user = [
        //     'name' => 'user',
        //     'email' => 'user@mail.ru',
        //     'password' => Hash::make(123123123)
        // ];

        // $user = User::firstOrCreate(
        //     [
        //         'email' => $user['email'],
        //     ],
        //     [
        //         'name' => $user['name'],
        //         'password' => $user['password']
        //     ]
        // );

        // Profile::firstOrCreate([
        //     'user_id' => $user->id
        // ]);
        // $user->profile()->create();

        $this->call([
               UserSeeder::class,
               CategorySeeder::class,
            // TagSeeder::class,
            // PostSeeder::class,
            // ProductSeeder::class,
            // CommentSeeder::class
        ]);
    }
}
