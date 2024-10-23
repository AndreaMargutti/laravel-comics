<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    $comics = config("comics");
    return view ('pages.home', compact('comics'));
});

Route::get('/home/{index}', function (string $index) {
    $comics = config("comics");
    if(isset($comics[$index])){
        $comic = $comics[$index];
        //dump($comic);
    } else {
        abort(404);
    }

    return view ('pages.show', compact("comic"));
})->name('comics.show');