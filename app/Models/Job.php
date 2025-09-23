<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Laravel assumes the table is 'jobs' by default.
    // Specify the actual table name instead.
    protected $table = 'job_listings';
}
