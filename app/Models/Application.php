<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'job_listing_id',
        'cover_letter',
    ];

    /**
     * Get the candidate (user) who submitted this application.
     */
    public function candidate()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the job listing for which this application was submitted.
     */
    public function jobListing()
    {
        return $this->belongsTo(JobListing::class, 'job_listing_id');
    }
}
