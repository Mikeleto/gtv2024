<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);

Route::get('/ejemplos', function () {
    return view('ejemplos');
});


Route::get('/visits', ShowVisits::class)->name('admin.visits.show');

Route::get('visits/{visit}/edit', EditVisits::class)->name('admin.visits.edit');

Route::get('visits/create', CreateVisits::class)->name('admin.visits.create');
