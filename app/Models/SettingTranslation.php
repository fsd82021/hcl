<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    protected $fillable = [
        'website_title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'address',
        'working_hours',
        'footer_description',
    ];
}
