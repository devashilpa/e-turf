<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\indexController;
use App\http\controllers\adminController;
use App\http\controllers\managerController;
use App\http\controllers\userController;

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
Route::get('/managerindex',[managerController::class,'managerindex']);
Route::get('/register',[userController::class,'register']);
Route::post('/registerAction',[userController::class,'registerAction']);
Route::get('/viewuser',[managerController::class,'viewuser']);
Route::post('/managerloginAction',[managerController::class,'managerloginAction']);
Route::post('/loginAction',[userController::class,'loginAction']);
Route::get('/userindex',[userController::class,'userindex']);
Route::post('/adminloginAction',[adminController::class,'adminloginAction']);
Route::get('/booking',[userController::class,'booking']);
Route::get('/getturf',[userController::class,'getturf']);
Route::get('/userfeedback',[userController::class,'userfeedback']);
Route::post('/feedbackAction',[userController::class,'userfeedbackAction']);
Route::get('/ugallery',[userController::class,'ugallery']);
Route::get('/admingallery',[adminController::class,'admingallery']);
Route::post('/admingalleryAction',[adminController::class,'admingalleryAction']);
Route::get('/viewgallery',[adminController::class,'viewgallery']);
Route::get('/userviewbooking',[userController::class,'userviewbooking']);
Route::get('/viewfeedback',[managerController::class,'viewfeedback']);
// imageediting
Route::get('/updategallery/{id}',[adminController::class,'updategallery']);
Route::post('/updateAction/{id}',[adminController::class,'updateAction']);
Route::get('/book/{id}',[userController::class,'book']);
Route::post('/bookAction/{id}',[userController::class,'bookAction']);
Route::get('/viewbooking',[userController::class,'viewbooking']);
Route::get('/payment/{id}',[userController::class,'payment']);
Route::post('/paymentAction/{id}',[userController::class,'paymentAction']);
Route::get('/bookinghistory',[userController::class,'bookinghistory']);
Route::get('/delete/{id}',[userController::class,'delete']);
Route::get('/adminbookinghis',[adminController::class,'adminbookinghistory']);
Route::get('/adminpayment',[adminController::class,'adminpayment']);
Route::get('/adminuserview',[adminController::class,'adminuserview']);
Route::get('/managerbookinghistory',[managerController::class,'managerbookinghistory']);
Route::get('/editmanager',[managerController::class,'editmanager']);
Route::post('/editmanagerAction/{id}',[managerController::class,'editmanagerAction']);
Route::get('/igallery',[indexController::class,'igallery']);
Route::get('/viewmanager',[managerController::class,'viewmanager']);
Route::get('/userview',[userController::class,'userview']);
Route::get('/useredit/{id}',[userController::class,'useredit']);
Route::post('/usereditAction/{id}',[userController::class,'usereditAction']);
Route::get('/gbill/{id}',[userController::class,'gbill']);
Route::get('/delete/{id}',[userController::class,'deletehis']);