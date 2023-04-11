<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;

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


Route::get('/login',[AuthController::class,'login']);
Route::post('/loginstore',[AuthController::class,'loginstore']);





Route::middleware(['IsLoggedIn','IsEmployee'])->group(function(){
    Route::get('/employee',[EmployeeController::class,'employeedashboard']);
    Route::get('/employee-pass',[EmployeeController::class,'updatePassword']);
    Route::get('/upload-image',[EmployeeController::class,'uploadImage']);
    Route::post('/store-image',[EmployeeController::class,'storeImage']);
    Route::get('/employee-edit/{id}',[AdminController::class,'edemployee']);

    Route::post('/employee-update/{id}',[AdminController::class,'upEmloyee']);
     

});


Route::middleware(['IsLoggedIn','IsAdmin'])->group(function(){

    Route::get('/create-employee',[AdminController::class,'employeeCreate']);
    Route::post('/employeestore',[AdminController::class,'employeestore']);
    Route::get('/admin',[AdminController::class,'admindashboard']);
    Route::get('/display_employees',[AdminController::class,'generate_view']);
    Route::get('/employee-postions',[AdminController::class,'employeePosition']);
    Route::get('/create-category',[AdminController::class,'createCategory']);
    Route::get('/category',[AdminController::class,'Category']);
    Route::get('/position',[AdminController::class,'Position']);
    Route::get('/insert-category',[AdminController::class,'insertCategory']);
    
    Route::get('/create-position',[AdminController::class,'createPosition']);
    Route::get('/insert-position',[AdminController::class,'insertPosition']);

    Route::get('/employee-delete/{id}',[AdminController::class,'deleteEmployee']);

    Route::get('/change-position/{id}',[AdminController::class,'changePosition']);
    Route::post('/update-position/{id}',[AdminController::class,'updatePosition']);


    Route::get('/edit-category/{id}',[AdminController::class,'edCategory']);

    Route::post('/update-category/{id}',[AdminController::class,'updateCategory']);
    Route::get('/delete-category/{id}',[AdminController::class,'deleteCategory']);

  
    Route::get('/edit-position/{id}',[AdminController::class,'edPosition']);
    Route::post('/position-updated/{id}',[AdminController::class,'positionUpdated']);

    Route::get('/delete-position/{id}',[AdminController::class,'deletePosition']);

  






    Route::get('/employee-edit/{id}',[AdminController::class,'edemployee']);

    Route::post('/employee-update/{id}',[AdminController::class,'updateEmloyee']);
    Route::get('/generate-pdf/{id}',[AdminController::class,'generatePdf']);

    Route::get('/generate-pdf2',[AdminController::class,'generatePdf2']);

    Route::get('waiting-employees',[AdminController::class,'waitingEmployees']);
    
    Route::get('/generate-salary1',[AdminController::class,'generatesalary1']);

    Route::get('/post-cat',[AdminController::class,'positionCategory']);

});

Route::get('/template',[AuthController::class,'template']);


Route::get('/logout',[AuthController::class,'logout']);



