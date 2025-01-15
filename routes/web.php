<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
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
Route::get('/mentors',[HomeController::class, 'mentorspanel'])->name('mentors');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/mission-vision',[HomeController::class, 'missionvision'])->name('mission-vision');
Route::get('/hr-terminology',[HomeController::class, 'hrterminology'])->name('hr-terminology');


// quiz routes
Route::get('/', [QuizController::class, 'showQuiz']);
Route::post('/submitQuiz', [QuizController::class, 'submitQuiz'])->name('submitQuiz');
