<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\loginController;
use GuzzleHttp\Middleware;

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
    return view('home',[
        "title" => "Home"
    ]);
});

// Route::get('/baju',[BajuController::class,'index'])->name('baju');
// Route::get('/baju/jenisBaju/{id}',[BajuController::class,'jenisBaju']);




Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/logincek',[LoginController::class,'logincek',])->name('logincek');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/register',[LoginController::class,'register'])->name('register');
Route::POST('/registerup',[LoginController::class,'registerup'])->name('registerup');


Route::get('/posts',[postController::class,'posts'])->name('posts');


Route::group(['middleware'=>['auth','ceklevel:admin']],function(){
        Route::get('/baju',[BajuController::class,'index']);
        Route::post('/insertdata',[BajuController::class, 'insertdata'])->name('insertdata');
        Route::get('/baju/{id}',[BajuController::class, 'tampildata'])->name('tampildata');
        Route::post('/update/{id}',[BajuController::class, 'update'])->name('update');

        Route::get('/delete/{id}',[BajuController::class,'delete'])->name('delete'); 
});
