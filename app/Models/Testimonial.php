<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Testimonial extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'job_title',
        'description'
    ];

    public $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = ['id'];
}
