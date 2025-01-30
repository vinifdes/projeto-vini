<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(Request $request) {
        $series = ['Prison Break', 
                'The Walking Dead',
                'Stranger Things'];

        return view('series.index', compact('series'));
    }
}
