<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Specify the actual table name
    protected $table = 'job_listings';

    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    // Ensure salary is always treated as an integer
    protected $casts = [
        'salary' => 'integer',
    ];

    /**
     * A Job belongs to one Employer
     */
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    /**
     * A Job can have many Tags (many-to-many)
     */
    public function tags()
    {
        return $this->belongsToMany(
            \App\Models\Tag::class, // Related model
            'job_listing_tag',      // Pivot table name
            'job_listing_id',       // Foreign key on pivot table for Job
            'tag_id'                // Foreign key on pivot table for Tag
        );
    }

    /**
     * Accessor: Format salary nicely (e.g., 50000 → $50,000)
     */
    public function getSalaryFormattedAttribute()
    {
        return '$' . number_format((int) $this->salary, 0);
    }
}
