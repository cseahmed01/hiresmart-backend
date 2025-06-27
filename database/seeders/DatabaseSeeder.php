<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\SkillSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\JobListingSeeder;
use Database\Seeders\ApplicationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SkillSeeder::class,
            JobListingSeeder::class,
            ApplicationSeeder::class,
        ]);
    }
}
