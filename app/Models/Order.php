<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const SUCCESS_TEMPLATE  = 1;
    const QUESTION_TEMPLATE = 2;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'number',
        'email',
        'phone_number',
        'bestelling',
        'dategetorder',
        'date',
        'rejected',
        'special',
        'hide'
    ];

    /**
     * Get lists of available templates
     *
     * @return array
     */
    public static function templates()
    {
        return [
            self::SUCCESS_TEMPLATE   =>  'uw order is klaar',
            self::QUESTION_TEMPLATE  =>  'wij hebben een vraag over uw order'
        ];
    }
}
