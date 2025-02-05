<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class SerieController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        //$request->session()->forget('mensagem.sucesso');
        //dd($series);
        return view('series.index', compact('series', 'mensagemSucesso'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        //dd($request->all());
         $serie = Serie::create($request->all());
         //$request->session()->flash('mensagem.sucesso', "Série $serie->nome adicionada com sucesso");        
            return to_route('series.index')->with('mensagem.sucesso', "Série $serie->nome adicionada com sucesso");
    }

    public function destroy(Serie $series) {
       // dd($request->route());
       //dd($serie);
       if($series) {
        $series->delete();
        //$request->session()->flash('mensagem.sucesso', "Série $series->nome removida com sucesso");
       }
        
       return to_route('series.index')->with('mensagem.sucesso', "Série $series->nome removida com sucesso");
    }

    public function edit(Serie $series) {        
        //dd($series);
        return view('series.edit', compact('series'));
     }

    public function update(Request $request, Serie $series) {
        //dd($request->nome);
        $series->update(["nome" => "$request->nome"]);
         
        return to_route('series.index')->with('mensagem.sucesso', "Série $series->nome atualizada com sucesso");
     }
}
