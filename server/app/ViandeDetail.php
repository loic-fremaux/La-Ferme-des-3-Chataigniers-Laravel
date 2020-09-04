<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViandeDetail extends Model
{
    protected $table = 'viande_au_detail';

    protected $fillable = [
        'title', 'weight', 'image_path'
    ];
}
