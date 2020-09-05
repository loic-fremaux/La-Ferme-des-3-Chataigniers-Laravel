<?php

namespace App\Http\Controllers;

use App\PatesPlatsCuisinesGroup;
use App\ViandeDetail;
use Illuminate\Http\Request;

class PatesPlatsCuisinesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $elements = PatesPlatsCuisinesGroup::all();
        return view('vente_a_la_boutique.pates_et_plats_cuisines', ['elements' => $elements]);
    }
}
