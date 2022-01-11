<?php

use App\Http\Livewire\AllTodos;
use App\Http\Livewire\Folder;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Welcome;
use App\Http\Livewire\Home;
use App\Http\Livewire\Note;
use App\Http\Controllers\LogoutController;



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
    return view('home');
});


require __DIR__.'/auth.php';

Route::get('/', Welcome::class);
Route::get('/home', Home::class);
Route::get('/note', note::class);
Route::get('/todo', AllTodos::class);
Route::get('/folder', Folder::class);
Route::get('/logout', Home::class)->middleware('auth');


