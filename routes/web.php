<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicApiController;

Route::get('/', function () {
    return redirect('/admin');
});

// Route::prefix('api')->group(function () {
//     Route::get('/build-recent-blogs', [PublicApiController::class, 'buildRecentBlogs']);
//     Route::get('/latest-news-recent-blogs', [PublicApiController::class, 'latestNewsRecentBlogs']);
//     Route::get('/thinks-recent-blogs', [PublicApiController::class, 'thinksRecentBlogs']);
//     Route::get('/blogs/{slug}', [PublicApiController::class, 'blogDetail']);
//     Route::get('/projects', [PublicApiController::class, 'projects']);
//     Route::get('/testimonials', [PublicApiController::class, 'testimonials']);
//     Route::get('/job-opening', [PublicApiController::class, 'jobOpening']);
//     Route::post('/apply-job', [PublicApiController::class, 'applyJob']);
// });