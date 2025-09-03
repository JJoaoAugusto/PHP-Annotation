<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/criar-conta', function () {
    return view('create-account');
})->name('create-account');

Route::post('/criar-conta', function () {
    return 'Validação e inserção do usuário criado';
})->name('insert-account');

Route::get('/login', function () {
    return view('login');
})->name('login');
