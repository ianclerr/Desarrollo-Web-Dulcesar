<?php

use Illuminate\Support\Facades\Route;

// Ruta raíz - Landing Page principal
Route::view('/', 'landing.home')->name('landing.home');

Route::view('/home', 'landing.home')->name('home');
Route::view('/about', 'landing.about')->name('about');
Route::view('/welcome2', 'landing.welcome2')->name('welcome2');
Route::view('/distribuidores', 'landing.distribuidores')->name('distribuidores');
Route::view('/contact', 'landing.contact')->name('contact');
Route::view('/recetario', 'landing.recetario')->name('recetario');
Route::view('/ecommerce/home', 'ecommerce.home')->name('ecommerce.home');
Route::view('/ecommerce/home2', 'ecommerce.home2')->name('ecommerce.home2');