<?php

use Illuminate\Support\Facades\Route;

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
route::any('agenda/search', 'AgendaController@search')->name('agenda.search');
Route::resource('agenda', 'AgendaController');

Route::get('/', function()
{
    return redirect()->route('agenda.index');
});
