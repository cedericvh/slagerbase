<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Wysiwig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wysiwig';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'body'
    ];

    /**
     * Get wysiwig by slug
     *
     * @param $query
     * @param $slug
     * @return mixed
     */
    public function scopeBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
