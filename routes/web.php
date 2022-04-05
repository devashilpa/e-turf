<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\indexController;
use App\http\controllers\adminController;

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
    return view('index');
});
Route::get('/register',[indexController::class,'register']);
Route::get('/login',[indexController::class,'login']);
Route::get('/managerlogin',[indexController::class,'managerlogin']);
Route::get('/adminlogin',[indexController::class,'adminlogin']);
Route::get('/managerregister',[indexController::class,'managerregister']);
Route::get('/about',[indexController::class,'about']);
Route::get('/contact us',[indexController::class,'contact_us']);
Route::get('/logout',[indexController::class,'logout']);
Route::get('/adminindex',[adminController::class,'adminindex']);
Route::post('/managerregisterAction',[adminController::class,'managerregisterAction']);
Route::get('/managerRegisterView',[adminController::class,'managerRegisterView']);
Route::get('/approve/{id}',[adminController::class,'approveManager']);
Route::get('/decline/{id}',[adminController::class,'declineManager']);
Route::get('/addturf',[adminController::class,'addturf']);  
Route::post('/addturfAction',[adminController::class,'addturfAction']); 
Route::get('/viewturf',[adminController::class,'turfview']);

