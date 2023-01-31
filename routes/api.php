<?php

use App\Http\Controllers\API\Crud_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/', [Crud_Controller::class, 'showData']);
Route::post('/store-data', [Crud_Controller::class, 'storeData']);
Route::post('/update', [Crud_Controller::class, 'Update']);
Route::get('/delete/{id}', [Crud_Controller::class, 'delete']);
