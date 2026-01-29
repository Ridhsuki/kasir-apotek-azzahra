<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Create a user with a specific role
        // \App\Models\User::factory()->create([
        //     'name' => 'Owner Toko',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin123')
        // ]); // you can use a more secure approach

        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // key unik
            [
                'name' => 'Owner Toko',
                'password' => Hash::make('admin123'),
            ]
        );

        $this->call([
            SettingSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);

    }
}
