<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){

// });

// teachers route
Route::get('/', [CrudController::class, 'showData']);
Route::get('/add-data', [CrudController::class, 'addData']);
Route::post('/store-data', [CrudController::class, 'storeData']);
Route::get('/edit-data/{id}', [CrudController::class, 'editData']);
Route::post('/update/{id}', [CrudController::class, 'Update']);
Route::get('/delete/{id}', [CrudController::class, 'delete']);


// student route
Route::get('/student', [StudentController::class, 'AllStudent']);
Route::get('/add/student', [StudentController::class, 'AddStudent']);
Route::post('/store-student', [StudentController::class, 'storeStudent']);
