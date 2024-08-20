<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', [GeneralController::class, 'home'])->name('home');
Route::get('/about-us', [GeneralController::class, 'about_us'])->name('about_us');
Route::get('/mission-and-vision', [GeneralController::class, 'mission_vision'])->name('mission_vision');
Route::get('/manufacturing-facilities', [GeneralController::class, 'manufactor'])->name('manufactor');
Route::get('/contact-us', [GeneralController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-form/handler', [GeneralController::class, 'contactSubmission'])->name('contact_form');

Route::middleware('guest')->group(function () {
    Route::get('/login', [GeneralController::class, 'login'])->name('login');
    Route::post('/login/handler', [GeneralController::class, 'login_handler'])->name('login_handler');
});