<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});






route::prefix('/games')->name('games.')->group(function(){


    Route::get('/', function () {
        $games = \App\Models\Game::all();
        return view('games',['games' => $games]);
    });
        //http://127.0.0.1:8000/games
    
    Route::get('/{Title}', function (string $Title ){
      
        return view('game-info',['Title' => $Title],['info' => 'Ce jeux est trés bien']);
        //  http://127.0.0.1:8000/games/quake
    })->name('games');
});




Route::get('/delete', function(Request $request){
    $posts = \App\Models\Post::Game(1);
    $posts->delete();
})->name('Delete');