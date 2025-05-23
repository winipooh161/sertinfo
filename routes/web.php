<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Entrepreneur\CertificatesController;
use App\Http\Controllers\Entrepreneur\DashboardController as EntrepreneurDashboardController;
use App\Http\Controllers\Entrepreneur\AnalyticsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicCertificateController; // Добавляем новый контроллер
use App\Http\Controllers\User\CertificatesController as UserCertificatesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Маршрут для перенаправления на lk.sticap.ru
Route::get('/external-auth', function () {
    return redirect('https://sticap.ru');
})->name('external.auth');

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
  
    return redirect('/');
})->name('home');

if (app()->environment('production')) {
    URL::forceScheme('https');
}