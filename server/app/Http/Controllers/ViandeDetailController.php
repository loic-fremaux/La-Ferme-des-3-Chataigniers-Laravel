<?php

namespace App\Http\Controllers;

use App\ViandeDetail;
use Illuminate\Http\Request;

class ViandeDetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $elements = ViandeDetail::all();
        return view('vente_a_la_boutique.viande_au_detail', ['elements' => $elements]);
    }
}
