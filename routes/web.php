<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CommuneController;



Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/auth', function () {
    return view('auth');
});

Route::get('/registration-etat-civil', [CandidateController::class, 'showRegistrationinfoForm'])->name('registration');
Route::get('/infodiplome', [AuthController::class, 'showRegistrationFormdip'])->name('registrationdiplome');

Route::get('/createaccount', function () {
    return view('createaccount');
});

Route::get('/get-communes/{wilayaId}', [CandidateController::class, 'getCommunes']);

Route::post('/user_store', [AuthController::class, 'store'])->name('userstore');
