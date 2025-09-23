<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * A Tag can belong to many Jobs (many-to-many)
     */
    public function jobs()
    {
        return $this->belongsToMany(
            \App\Models\Job::class, // Related model
            'job_listing_tag',       // Pivot table name
            'tag_id',                // Foreign key on pivot table for Tag
            'job_listing_id'         // Foreign key on pivot table for Job
        );
    }
}
