<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $attributes = [
        'title',
        'description',
        'type',
        'series',
        'thumb',
        'price',
        'sale_date',
        'slug'
    ];
}
