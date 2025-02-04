<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class SerieController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        //dd($series);
        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        //dd($request->all());
         Serie::create($request->all());
        
            return to_route('series.index');
    }

    public function destroy(Request $request) {
       // dd($request->route());
       $serie = Serie::find($request->series);
       if($serie) {
        $serie->delete();
       }
        
       return to_route('series.index');
    }
}
