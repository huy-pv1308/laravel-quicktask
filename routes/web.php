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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('users', UserController::class)->middleware('admin');

Route::controller(TicketController::class)->prefix('tickets')->name('tickets.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{ticket}', 'show')->name('show');
    Route::get('/{ticket}/edit', 'edit')->name('edit');
    Route::put('/{ticket}', 'update')->name('update');
    Route::delete('/{ticket}', 'destroy')->name('destroy');
});

require __DIR__.'/auth.php';
