<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/save-push-notification-token', [HomeController::class, 'savePushNotificationToken'])->name('save-push-notification-token');
Route::post('/send-push-notification', [HomeController::class, 'sendPushNotification'])->name('send.push-notification');
