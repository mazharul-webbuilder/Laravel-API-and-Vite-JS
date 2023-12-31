<?php
use Illuminate\Support\Facades\Route;

require  __DIR__ . '/task-list-app.php';
require  __DIR__ . '/custom-css-js-with-vite.php';




/**
 * If no registered route match to the incoming
 * HTTP request This down below fallback function will work
*/
Route::fallback(function () {
    return 'If No route is found, this route will execute';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
