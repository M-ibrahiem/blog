<?php

use App\Http\Controllers\Test\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('blog');
});
// Route::get('/test', function (
// ) {
//     $books = ['PHP','Javascript','CSS'];
//     $name = 'Mahmoud';
//     return view('test.test',['books'=>$books,'name'=>$name]);
// });
Route::get('/test',[TestController::class,'firstAction']);
Route::get('/greet',[TestController::class,'greet']);
    