<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Property extends Model implements TranslatableContract
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
    protected $fillable = ['main_image','icon'];

    public function comments(){
        return $this->hasMany(Comment::class , 'property_id');
    }

    public function catrgory(){
        return $this->belongsTo(Category::class , 'category_id');
    }

}
