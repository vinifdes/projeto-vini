<?php

use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

/*Route::controller(SerieController::class)->group(function() {

    Route::get('/series', 'index');
    
    Route::get('/series/create', 'create')->name('series.create');
    
    Route::post('/series/salvar', 'store');

});*/

/*Route::resource('/series', SerieController::class)->names([
    'index' => 'series.index',
    'show' => 'series.show',
    'create' => 'series.create',
    'store' => 'series.store',
    'edit' => 'series.edit',
    'update' => 'series.update',
    'destroy' => 'series.destroy',
]);*/


Route::resource('/series', SerieController::class)->only(['index', 'create', 'store', 'destroy']);

//Route::delete('/series/destroy/{id}', [SerieController::class, 'destroy'])->name('series.destroy');