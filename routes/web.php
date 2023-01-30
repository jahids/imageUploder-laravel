<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [CrudController::class, 'showData']);
Route::get('/add-data', [CrudController::class, 'addData']);
Route::post('/store-data', [CrudController::class, 'storeData']);
Route::get('/edit-data/{id}', [CrudController::class, 'editData']);
Route::post('/update/{id}', [CrudController::class, 'Update']);
Route::get('/delete/{id}', [CrudController::class, 'delete']);
