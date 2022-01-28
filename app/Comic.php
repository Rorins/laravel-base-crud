<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //Mass assignment
    protected $fillable=[
        'title',
        'description',
        'type',
        'thumb',
        'price',
        'sale_date',
        'series',
    ];
}
