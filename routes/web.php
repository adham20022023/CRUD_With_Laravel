<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//id autoincrement
//title varchar
//posted_by integer
//created at time
//Descrption => text
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
//!
//static method called get in class route
//call back function mean => when something happen go and execute this function
//higher order function => is the function that return another function
//!
Route::get('/', function () { //
    return view('welcome');
});
//!
// we will add :: class => to tell this is a class not a constant
//TestController::class ==> 'namespace\\App\\Http\\Controllers\\TestController'

// Route::get('test3','App\Http\Controllers\TestController@TestAction');
//!
//this not right we should separate the logic into another file
//!
// Route::get('/test2',function(){
//     $posts=[
//         ['id'=>'2002','title'=>'Adham Elganzoury Test','Created_at'=>'2002-9-27','posted_by'=>'AAIE']
//     ];

//     return view('test',['posts'=>$posts]);
// });
//{post} => is a variable
Route::group(['prefix'=>'posts','middleware'=>'auth'],function(){
Route::get('/',[PostController::class,'index'])->name('posts.index');
Route::get('/create',[PostController::class,'create'])->name('posts.create');
Route::POST('',[PostController::class,'store'])->name('posts.store');
Route::get('/{post}',[PostController::class,'show'])->name('posts.show');
Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::put('/{post}/update',[PostController::class,'update'])->name('posts.update');
});

Route::fallback(fn()=>redirect(Route('posts.index'))); // this is the default route for any link

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
