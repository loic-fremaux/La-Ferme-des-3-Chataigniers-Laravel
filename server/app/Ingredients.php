<?php

namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{

    protected $table = 'ingredients';

    protected $fillable = [
        'name'
    ];
}