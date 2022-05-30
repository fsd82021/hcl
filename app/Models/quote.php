<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'company', 'address', 'city', 'zip',
        'telephone', 'pieces_count', 'weight', 'height', 'width',
        'depth', 'commodity', 'message'
    ];
}
