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

Route::get('/', function () {
    // return view('dashboard');
    return redirect()->route('ticket.index');
});

Route::prefix('sla')->group(function () {
    Route::get('/', 'App\Http\Controllers\SlaController@index')->name('sla.index');
    Route::get('/create', 'App\Http\Controllers\SlaController@create')->name('sla.create');
    Route::post('/store', 'App\Http\Controllers\SlaController@store')->name('sla.store');
    Route::get('/edit/{id}', 'App\Http\Controllers\SlaController@edit')->name('sla.edit');
    Route::put('/update/{id}', 'App\Http\Controllers\SlaController@update')->name('sla.update');
    Route::delete('/destroy/{id}', 'App\Http\Controllers\SlaController@destroy')->name('sla.destroy');
});

Route::prefix('list-group')->group(function () {
    Route::get('/', 'App\Http\Controllers\ListGroupController@index')->name('list-group.index');
    Route::GET('/update-list', 'App\Http\Controllers\ListGroupController@updateGroup')->name('list-group.update');
});

Route::prefix('ticket')->group(function () {
    Route::get('/', 'App\Http\Controllers\TicketController@index')->name('ticket.index');
    Route::post('/store', 'App\Http\Controllers\TicketController@store')->name('ticket.store');
    Route::get('/search', 'App\Http\Controllers\TicketController@search')->name('ticket.search');
});
