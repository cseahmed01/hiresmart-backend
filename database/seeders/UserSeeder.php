<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@hiresmart.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'is_verified' => true,
        ]);

        User::factory()->count(2)->create([
            'role' => 'employer',
            'is_verified' => true,
        ]);

        User::factory()->count(5)->create([
            'role' => 'candidate',
            'is_verified' => true,
        ]);
    }
}
