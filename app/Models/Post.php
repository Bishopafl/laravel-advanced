<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // public $timestamps = false;
    protected $guarded = [];

    /**
     * renames the created_at and updated_at column names in the db
     */
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
    /**
     * remove primary keys from a table in the database
     */
    protected $primaryKey = null;
    public $incrementing = false;
    
}
