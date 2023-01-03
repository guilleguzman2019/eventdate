<?php

use Illuminate\Support\Facades\Route;




Route::get('redirect', function() {
    if ( Auth::user() -> role == 1 ) {
        return redirect() -> route('admin.dashboard');
    } else {
        return redirect() -> route('panel.dashboard');
    }
});


Route::get('/', function () {
    return view('welcome');
});






