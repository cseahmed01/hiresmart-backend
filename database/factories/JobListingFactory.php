<?php
namespace Database\Factories;
use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobListingFactory extends Factory
{
    protected $model = JobListing::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(3),
            'location' => $this->faker->city(),
            'salary_min' => 30000,
            'salary_max' => 60000,
            'deadline' => now()->addDays(30),
            'is_archived' => false,
        ];
    }
}
