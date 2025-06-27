<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The job listings that require this skill.
     */
    public function jobListings()
    {
        return $this->belongsToMany(JobListing::class, 'job_listing_skill');
    }
}
