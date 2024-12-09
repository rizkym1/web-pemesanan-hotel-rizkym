<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'admin',
        //     'no_telp' => '098765432121',
        //     'email' => 'admin@gmail.com',
        //     'level' => 'admin',
        //     'username' => 'admin',
        //     'password' => bcrypt('admin'),
        // ]);

        // User::create([
        //     'name' => 'resepsionis',
        //     'no_telp' => '098765432112',
        //     'email' => 'resepsionis@gmail.com',
        //     'level' => 'resepsionis',
        //     'username' => 'resepsionis',
        //     'password' => bcrypt('resepsionis'),
        // ]);

        // User::create([
        //     'name' => 'user',
        //     'no_telp' => '09876543123',
        //     'email' => 'user@gmail.com',
        //     'level' => 'user',
        //     'username' => 'user',
        //     'password' => bcrypt('user'),
        // ]);

        \App\Models\FasilitasUmum::factory(10)->create();
    }
}
