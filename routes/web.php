<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\HrTerminologyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'index'])->name('home');
Route::get('/register', [HomeController::class, 'index'])->name('home');
Route::get('/leadership-team', [HomeController::class, 'leadershipteam'])->name('leadership-team');
Route::get('/core-team', [HomeController::class, 'coreteam'])->name('core-team');
Route::get('/mentors', [HomeController::class, 'mentorspanel'])->name('mentors');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/mission-vision', [HomeController::class, 'missionvision'])->name('mission-vision');
Route::get('/hr-terminology', [HomeController::class, 'hrterminology'])->name('hr-terminology');
Route::get('/hr-certification', [HomeController::class, 'hrcertification'])->name('hr-certification');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('forgot-password', [LoginController::class, 'showLinkRequestForm'])->name('password.request');
// Send Reset Link
Route::post('forgot-password', [LoginController::class, 'sendResetLinkEmail'])->name('password.email');
// Show Reset Password Form
Route::get('reset-password/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');
// Handle Password Reset
Route::post('reset-password', [LoginController::class, 'reset'])->name('password.update');

Route::get('/verify-otp', [HomeController::class, 'index'])->name('home');

// Process the login form
Route::post('login', [LoginController::class, 'login'])->name('login');

// Process the registration form
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Handle logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// quiz routes
Route::get('/', [QuizController::class, 'showQuiz']);
Route::get('/login', action: [QuizController::class, 'showQuiz']);
Route::get('/verify-otp', action: [QuizController::class, 'showQuiz']);
Route::get('/register', [QuizController::class, 'showQuiz']);
Route::post('/submitQuiz', [QuizController::class, 'submitQuiz'])->name('submitQuiz');

// hr ternoilogy routes
Route::get('/hr-terminology', [HrTerminologyController::class, 'showPage']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile'); // Protected route
    })->name('profile');
});

Route::post('/submit-contact-form', function (Illuminate\Http\Request $request) {
    Log::info('Request Data:', $request->all());

    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'phone' => 'required|string|max:100',
        'city' => 'required|string|max:100',
        'role' => 'required|string|max:100',
        'company' => 'required|string|max:100',
        'message' => 'required|string|max:5000',
    ]);

    Mail::to('hrconnect2025@gmail.com')
        ->send(new ContactFormMail($validated));

    return back()->with('success', 'Your message has been sent successfully!');
});


// Google Login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// otp based login
Route::post('/send-otp', [LoginController::class, 'sendOtp'])->name('send-otp');
Route::post('/verify-otp', [LoginController::class, 'verifyOtp'])->name('verify-otp');