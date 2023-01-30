<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [CrudController::class, 'showData']);
Route::get('/add-data', [CrudController::class, 'addData']);
Route::post('/store-data', [CrudController::class, 'storeData']);
