<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'certificate', 'thumbnail', 'type', 'status', 'price', 'level', 'description', 'mentor_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function mentor() {
        return $this->belongsTo('App\Mentor');
    }

    public function chapters() {
        return $this->hasMany('App\Chapter')->orderBy('id', 'ASC');
    }

    public function images() {
        return $this->hasMany('App\ImageCourse')->orderBy('id', 'DESC');
    }

    public function reviews() {
        return $this->hasMany('App\Review')->orderBy('id', 'DESC');
    }
}
