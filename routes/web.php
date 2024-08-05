<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jobs', function () {
    return view('jobs', ["jobs" => Job::all()]);
});
Route::get('/jobs/{id}', function ($id) {
    return view('job', ["job" => Job::find($id)]);
});
