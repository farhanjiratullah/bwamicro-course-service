<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Mentor extends Model
{
    protected $fillable = [
        'name', 'profile', 'email', 'profession'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
