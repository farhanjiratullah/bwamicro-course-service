<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageCourse extends Model
{
    protected $fillable = [
        'image', 'course_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
