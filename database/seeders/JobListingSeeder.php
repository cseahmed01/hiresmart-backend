<?php
namespace Database\Seeders;
use App\Models\JobListing;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        $employers = User::where('role', 'employer')->get();
        $skills = Skill::all();

        foreach ($employers as $employer) {
            JobListing::factory()
                ->count(3)
                ->for($employer)
                ->create()
                ->each(function ($job) use ($skills) {
                    $job->skills()->attach(
                        $skills->random(rand(1, 3))->pluck('id')->toArray()
                    );
                });
        }
    }
}
