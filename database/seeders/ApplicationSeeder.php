<?php
namespace Database\Seeders;
use App\Models\Application;
use App\Models\User;
use App\Models\JobListing;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        $candidates = User::where('role', 'candidate')->get();
        $jobs = JobListing::all();

        foreach ($candidates as $candidate) {
            $appliedJobs = $jobs->random(rand(1, 3));
            foreach ($appliedJobs as $job) {
                Application::create([
                    'user_id' => $candidate->id,
                    'job_listing_id' => $job->id,
                    'cover_letter' => fake()->paragraph(),
                ]);
            }
        }
    }
}

