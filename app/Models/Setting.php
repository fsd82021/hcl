<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Setting extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'website_title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'working_hours',
        'address',
        'footer_description',
    ];

    protected $fillable = [
        'logo',
        'breadcrumb',
        'facebook',
        'twitter',
        'instagram',
        'email',
        'phone',
        'white_logo',
        'pdf',
    ];
    protected $hidden = [
        'translations'
    ];
}
