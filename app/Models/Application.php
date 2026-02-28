<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'job_id',
        'full_name',
        'email',
        'phone',
        'linkedin_url',
        'portfolio_url',
        'resume_url',
        'cover_letter'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
