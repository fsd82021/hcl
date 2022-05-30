<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialTranslation extends Model
{
    protected $fillable = [
        'title',
        'job_title',
        'description'
    ];
}
