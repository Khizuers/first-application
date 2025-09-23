<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Specify the actual table name
    protected $table = 'job_listings';

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
            'job_listing_tag',       // Pivot table name
            'job_listing_id',        // Foreign key on pivot table for Job
            'tag_id'                 // Foreign key on pivot table for Tag
        );
    }
}
