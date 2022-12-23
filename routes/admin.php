<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Livewire\Admin as Livewire;

Route::get('/', Admin\DashboardController::class) -> name('admin.dashboard');

Route::get('/categorias', Livewire\CategoryComponent::class) -> name('admin.categories');

Route::get('/templates', Livewire\TemplateComponent::class) -> name('admin.templates');