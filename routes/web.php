<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicApiController;

Route::get('/', function () {
    return redirect('/');
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactstore')->name('contact.store');

    Route::get('/blog', 'blogIndex')->name('blog.index');
    Route::get('/blog/{slug}', 'blogDetails')->name('blog.details');
    Route::get('/policy/{slug}', 'policyDetails')->name('policy.details');
});