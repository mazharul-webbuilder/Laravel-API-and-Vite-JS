<?php
use Illuminate\Support\Facades\Route;

require  __DIR__ . '/task-list-app.php';




/**
 * If no registered route match to the incoming
 * HTTP request This down below fallback function will work
*/
Route::fallback(function () {
    return 'If No route is found, this route will execute';
});
