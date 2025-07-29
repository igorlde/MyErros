<?php

namespace Database\Seeders;

use App\Models\Problem;
use App\Models\ProblemTranslation;
use App\Models\User;
use App\Models\Utility;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Utility::factory(1)->create();
         Problem::factory(1)->create();
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'igor',
        //     'email' => 'admin@admin.com',
        // ]);
        $this->call(UserSeeder::class);
    }
}
