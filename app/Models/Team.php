<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Team extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'description'
    ];

    public $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = ['main_image','facebook','twiter','instgram'];
}
