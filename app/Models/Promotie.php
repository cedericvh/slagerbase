<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Promotie extends Model
{
  
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'promoties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titel',
        'body'
    ];

    /**
     * Get wysiwig by slug
     *
     * @param $query
     * @param $slug
     * @return mixed
     */
    public function scopeByTitle($query, $titel)
    {
        return $query->where('titel', $titel);
    }
  
  
  
    
}
