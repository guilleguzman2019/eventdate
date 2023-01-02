<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Panel as Livewire;

Route::view('/', 'panel.dashboard') -> name('panel.dashboard');


Route::get('/cards', Livewire\CardComponent::class) -> name('panel.cards');

