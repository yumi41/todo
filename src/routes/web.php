<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/register', [ContactController::class, 'edit']);
Route::group(['prefix' => 'users'], function () {
    Route::get('edit/{id}', 'UsersController@getEdit')->name('users.edit');
    Route::post('edit/{id}', 'UsersController@postEdit')->name('users.postEdit');
});