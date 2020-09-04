<?php

namespace App\Http\Controllers;

use App\Description;
use App\PatesPlatsCuisinesElement;
use App\PatesPlatsCuisinesGroup;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $desc = PatesPlatsCuisinesElement::all()->first()->getAllergenesAsString();

        return view('test', ['desc' => $desc]);
    }
}
