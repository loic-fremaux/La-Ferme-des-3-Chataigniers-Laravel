<?php

namespace App;

use App\Http\Allergenes;
use App\Http\Ingredients;
use Illuminate\Database\Eloquent\Model;

class PatesPlatsCuisinesElement extends Model
{

    protected $table = 'pates_et_plats_cuisines_elements';

    protected $fillable = [
        'group_id', 'title', 'weight', 'image_path'
    ];

    public function getAllergenesAsString(): string
    {
        return ucfirst(join(", ",
            array_map(function ($object) {
                return $object->name;
            }, $this->belongsToMany(
                Allergenes::class,
                'pates_et_plats_cuisines_allergenes',
                'element_id',
                'allergene_id'
            )->get(['name'])->all())
        ));
    }

    public function getIngredientsAsString(): string
    {
        return ucfirst(join(", ",
            array_map(function ($object) {
                return $object->name;
            }, $this->belongsToMany(
                Ingredients::class,
                'pates_et_plats_cuisines_ingredients',
                'element_id',
                'ingredient_id'
            )->get(['name'])->all())
        ));
    }
}
