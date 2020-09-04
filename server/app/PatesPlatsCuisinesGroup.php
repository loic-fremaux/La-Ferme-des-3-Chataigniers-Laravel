<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatesPlatsCuisinesGroup extends Model
{

    protected $table = 'pates_et_plats_cuisines_groups';

    protected $fillable = [
        'id', 'title'
    ];

    public function elements() {
        return PatesPlatsCuisinesElement::where('group_id', $this->id)->get();
    }
}
