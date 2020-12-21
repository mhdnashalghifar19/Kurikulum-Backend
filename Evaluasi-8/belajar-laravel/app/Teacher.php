<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // use SoftDeletes;
    
    protected $fillable = ['nama', 'nip', 'email', 'jurusan'];
}
