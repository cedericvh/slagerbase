<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsitem extends Model
{
    protected $table = 'newsitems';

    protected $fillable = [
        'name',
        'body'
    ];
}
