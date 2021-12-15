<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/me', function (\Illuminate\Http\Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['namespace' => 'Auth'], function () {
    Route::post('/login', 'LoginController@login');
    Route::post('/register', 'RegisterController@register');
});


Route::get('admin/users', [UserController::class, 'index']);
