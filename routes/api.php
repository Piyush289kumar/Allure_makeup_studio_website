<?php

use App\Http\Controllers\PublicApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/app-config-meta-data', [PublicApiController::class, 'appConfigMetaData']);
Route::get('/b/{category}/limits', [PublicApiController::class, 'blogData']);

Route::get('/blogs', [PublicApiController::class, 'getFilteredBlogs']); // unified filter API
Route::get('/blogs/{slug}', [PublicApiController::class, 'blogDetail']);
// Policies
Route::get('/policies/{slug}', [PublicApiController::class, 'policyDetail']);

Route::post('/early-access', [PublicApiController::class, 'earlyAccessStore']);


// OLD
Route::get('/build-recent-blogs', [PublicApiController::class, 'buildRecentBlogs']);
Route::get('/latest-news-recent-blogs', [PublicApiController::class, 'latestNewsRecentBlogs']);
Route::get('/thinks-recent-blogs', [PublicApiController::class, 'thinksRecentBlogs']);
Route::get('/informational-blogs', [PublicApiController::class, 'informationalBlogs']);
Route::get('/projects', [PublicApiController::class, 'projects']);
Route::get('/testimonials', [PublicApiController::class, 'testimonials']);
Route::get('/job-opening', [PublicApiController::class, 'jobOpening']);
Route::get('/job-opening/{id}', [PublicApiController::class, 'jobDetail']);
Route::post('/apply-job', [PublicApiController::class, 'applyJob']);