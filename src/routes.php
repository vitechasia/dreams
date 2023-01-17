<?php

Route::get('/login', [\Vdes\Dreams\AuthController::class,'showFormLogin'])->name('login');
Route::post('/proses', [\Vdes\Dreams\AuthController::class,'login']);

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', function () {
        return view('template.dreams.index');
    })->name('home');
    Route::post('/update/{id}/profile', [\Vdes\Dreams\AuthController::class,'gantidata']);
    Route::get('/logout', [\Vdes\Dreams\AuthController::class,'logout'])->name('logout');
    Route::resource('/users', \App\Http\Controllers\Admin\UserController::class);
});
