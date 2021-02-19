<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $connection = 'mysql';

    protected $table = 'books';

    public $timestamps = false;

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'modern_name',
        'new_testament'
    ];
}
