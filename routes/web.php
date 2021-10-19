<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

Route::get('/', [ArticleController::class, 'index']);
Route::get('/create', [ArticleController::class, 'create']);
Route::get('/update/{id}', [ArticleController::class, 'update']);
Route::get('/delete/{id}', [ArticleController::class, 'delete']);


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/{username}', [HomeController::class, 'index'])->name('home');

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('lain', [HomeController::class, 'other'])->name('other');

// Route::post('/todo', [HomeController::class, 'store'])->name('todo.store');
// Route::post('/', [HomeController::class, 'store'])->name('subscribe');



// Route view dan redirect 

// Route::view('/', 'welcome');
// Route::redirect('/disini', '/kesana');

//Redirect Halaman dan Alias

Route::get('redirect', function () {
    return redirect()->route('homepage');
});

//Error
Route::get('/seed', function(\App\Models\Article $article){
    
    $faker = Faker\Factory::create(); 
    
    foreach(range(1,100) as $x){
        $article->create([
            'title' => $faker->sentence(10),
            'content' => $faker->sentence(50)
            
        ]);
    }


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

Route::prefix('account')->group(function(){

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

    // Route::resource('/user', 'App\Http\Controllers\ArticleController');

    // Route::apiResource('article', 'ApiArticleController');



});


