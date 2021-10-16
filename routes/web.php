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

// Route view dan redirect 

// Route::view('/', 'welcome');
// Route::redirect('/disini', '/kesana');

//Redirect Halaman dan Alias

Route::get('redirect', function () {
    return redirect()->route('homepage');
});

Route::get('homepage/landing-page', function () {
    return 'Landing'; 
})->name('homepage');


//Otorisasi Login

// Route::get('/login', function (){

//     return 'login';

// })->name('login');

// Route::prefix('user')->middleware('auth')->group(function(){

// Group Routing

Route::prefix('user')->group(function(){

    //definisikan route
    Route::prefix('setting1')->group(function (){

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

    Route::prefix('setting2')->group(function(){


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

    //Route Resource untuk CRUD = php artisan make:controller ArticleController --resource
    //Route List = php artisan route:list

    Route::resource('/user', 'App\Http\Controllers\ArticleController');

    // Route::apiResource('article', 'ApiArticleController');



});


