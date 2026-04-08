<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard/{role}', function ($role) {
    return view('dashboard', compact('role'));
});