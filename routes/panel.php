<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Panel as Livewire;

use App\Http\Controllers;

Route::view('/', 'panel.dashboard') -> name('panel.dashboard');

Route::get('/edit-invitacion/{slug}', Controllers\EditInvitacionController::class) ->name('panel.edit.card');


Route::get('/cards', Livewire\CardComponent::class) -> name('panel.cards');


Route::get('boton', Livewire\BotonComponent::class) -> name('panel.boton.card');


