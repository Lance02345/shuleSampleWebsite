<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'date',
        'required_image',
        'optional_image1',
        'optional_image2',
    ];
}
