<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // public $timestamps = false;
    protected $guarded = [];

    const CREATED_AT = 'created_date';

    const UPDATED_AT = 'updated_date';
}
