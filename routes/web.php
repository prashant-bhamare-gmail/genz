<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\HrTerminologyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/login',[HomeController::class, 'index'])->name('home');
Route::get('/register',[HomeController::class, 'index'])->name('home');
Route::get('/leadership-team',[HomeController::class, 'leadershipteam'])->name('leadership-team');
Route::get('/core-team',[HomeController::class, 'coreteam'])->name('core-team');
Route::get('/mentors',[HomeController::class, 'mentorspanel'])->name('mentors');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/mission-vision',[HomeController::class, 'missionvision'])->name('mission-vision');
Route::get('/hr-terminology',[HomeController::class, 'hrterminology'])->name('hr-terminology');
Route::get('/hr-certification',[HomeController::class, 'hrcertification'])->name('hr-certification');
Route::get('/profile',[HomeController::class, 'profile'])->name('profile');


// Process the login form
Route::post('login', [LoginController::class, 'login'])->name('login');

// Process the registration form
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Handle logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// quiz routes
Route::get('/', [QuizController::class, 'showQuiz']);
Route::get('/login', [QuizController::class, 'showQuiz']);
Route::get('/register', [QuizController::class, 'showQuiz']);
Route::post('/submitQuiz', [QuizController::class, 'submitQuiz'])->name('submitQuiz');

// hr ternoilogy routes
Route::get('/hr-terminology', [HrTerminologyController::class, 'showPage']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile'); // Protected route
    })->name('profile');
});