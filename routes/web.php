<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| C'est ici que vous pouvez enregistrer des itinéraires web pour votre demande. Ces
| sont chargés par le RouteServiceProvider au sein d'un groupe qui
| contient le groupe de middleware "web". Maintenant, créez quelque chose de génial !
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/directory', function () {
    return view('directory');
});
