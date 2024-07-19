<?php

use App\Http\Controllers\Guest\PageController as GuestPageController;
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

// Abbiamo scritto guest.products (e guest.home) specificando guets perché potrei avere sia una home per i guest sia una home per gli admin quindi è bene specificare
Route::get('/', [GuestPageController::class, 'index'])->name('pages.index');
