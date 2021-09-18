<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\zadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/zadania/nrpermutacji', [zadController::class, 'genPermutacja']);
Route::get('/zadania/transpozycje', [zadController::class, 'genTranspozycja']);
Route::get('/zadania/kodpermutacji', [zadController::class, 'genKodperm']);
Route::get('/zadania/polecenia', [zadController::class, 'genPolecenia']);
Route::get('/zadania/skladaniepermutacji', [zadController::class, 'skladaniepermutacji']);
Route::get('/zadania/grafy', [zadController::class, 'genGraf']);
Route::get('/zadania/dgrafy', [zadController::class, 'genDgraf']);
Route::get('/zadania/kolorowaniegrafus', [zadController::class, 'genkolGraf']);
Route::get('/zadania/drzewa', [zadController::class, 'genDrzewo']);
Route::get('/{slug}', [PageController::class, 'strona']);
