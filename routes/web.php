<?php

use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//! POST Route
// Route::get('/test',function(){
//     return 'Will be OK';
// });
Route::get('/posts',[PostController::class,'index'])->name('posts.index');

//! Create Route

// Route::get('/posts/create',function(){
//     return "<h1>Hiiii</h1>";
// });

Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');

//!Store Route

// Route::post('/posts',function() {return "hello";})->name('posts.store');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');


//!SHOW Route
// Route::get('/posts/{post}',function(){
    //     return "<h1>hello this page show</h1>";    
    // });
Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');

//!Edit Route
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');

//! Update Route
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');

//! DElETE Route
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destory');


// 1- define a new route so the user can acces it through browser
// 2- difine controller that renders a veiw
// 3- define view that contains list of posts
// 4- remove any static html data from the view



//! database
    // 1- structure change for database (create table , edit coulmn ,remove coulmn)
    // 2- operations on database (insert record , edit record , delete record)
     