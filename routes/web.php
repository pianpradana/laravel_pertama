<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/{id}', function ($id){

//     return 'User ' . $id;

// });

Route::prefix('user')->group(function(){

    //definisikan route
    Route::get('/change-password', function () {

        return 'change-password';
    
    });
    
    Route::get('/profile', function () {
    
    
        return 'profile';
    
    });
    
    Route::get('/photo', function () {
    
    
        return 'photo';
    
    });

});


