<?php

/*Install Bootstrap 5*/
//https://www.youtube.com/watch?v=7AJikfrdtSU&t=310s

/*Add Custom CSS and Js File*/
//https://youtu.be/6qs8PRQ-hLk?t=10

use Illuminate\Support\Facades\Route;


Route::get('/test-custom-css-js-with-vite', function (){
    return view('custom-css-js-with-vite.custom_css_and_js_with_vite');
});
