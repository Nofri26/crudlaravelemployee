<?php

use Illuminate\Support\Facades\Route;
use Modules\Employee\Http\Controllers\EmployeeController;

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

Route::group([], function () {
    // Route::resource('employee', EmployeeController::class)->names('employee');
    Route::get('/employee', [Modules\Employee\Http\Controllers\EmployeeController::class,'index']);
    Route::post('/employee', [Modules\Employee\Http\Controllers\EmployeeController::class,'store']);
    Route::get('/employee/create', [Modules\Employee\Http\Controllers\EmployeeController::class,'create']);
    Route::get('/employee/{id}/edit', [Modules\Employee\Http\Controllers\EmployeeController::class,'edit']);
    Route::put('/employee/{id}', [Modules\Employee\Http\Controllers\EmployeeController::class,'update']);
    Route::delete('/employee/{id}', [Modules\Employee\Http\Controllers\EmployeeController::class,'destroy']);
});
