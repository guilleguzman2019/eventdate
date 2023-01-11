<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Livewire\Web as Livewire;

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


Route::get('/invitacion/{slug}',  Livewire\CardComponent::class)-> name('invitacion');


