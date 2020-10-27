<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'title',
        'description',
        'author',
        'publisher',
        'year'
    ];
}
