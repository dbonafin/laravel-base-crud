<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'price',
        'type',
        'series',
        'description',
        'thumb',
        'sale_date'
    ];
}
