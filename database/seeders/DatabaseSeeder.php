<?php

namespace Database\Seeders;

use App\Models\Problem;
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
     
          Problem::factory(3)->create();
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'igor',
        //     'email' => 'admin@admin.com',
        // ]);
            //$this->call(UserSeeder::class);
    }
}
