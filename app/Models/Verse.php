<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    protected $connection = 'mysql';

    protected $table = 'verses';

    public $timestamps = false;
    
    protected $fillable = [
        'chapter',
        'verse',
        'text'
    ];
}
