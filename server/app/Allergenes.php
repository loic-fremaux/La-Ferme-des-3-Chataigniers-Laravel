<?php

namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Allergenes extends Model
{

    protected $table = 'allergenes';

    protected $fillable = [
        'name'
    ];
}