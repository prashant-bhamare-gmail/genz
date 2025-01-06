<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/leadership-team',[HomeController::class, 'leadershipteam'])->name('leadership-team');
Route::get('/core-team',[HomeController::class, 'coreteam'])->name('core-team');
Route::get('/advisor-panel',[HomeController::class, 'advisorpanel'])->name('advisor-panel');
Route::get('/about',[HomeController::class, 'about'])->name('about');
