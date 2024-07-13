<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/games', function () {
    return view('games',['games' => [
        'quake',
        'starcraft'
        ]]);
});


Route::get('/delete', function(Request $request){
    $posts = \App\Models\Post::Game(1);
    $posts->delete();
})->name('Delete');

route::prefix('/games')->name('games.')->group(function(){
    Route::get('/{game}', function (string $slug){
       // $game = \App\Models\game::all();
        return view('game-info',['game' => $slug]);
    //  http://127.0.0.1:8000/games/quake
    })->where([
        'slug' => '[a-z0-9\-]+'
        //utilise des expression réguliere pour ajouté des contrainte a la route
    ])->name('games');
});