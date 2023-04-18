<?php

use App\Http\Controllers\Folder\PageController;
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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/comics', [PageController::class,'index'])->name('comics.index');

Route::get('/comics/create', [PageController::class, 'create'])->name('comics.create');

Route::get('/comics/{comic}', [PageController::class, 'show'])->name('comics.show');

Route::post('/comics', [PageController::class, 'store'])->name('comics.store');
