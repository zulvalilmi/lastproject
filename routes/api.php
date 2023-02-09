<?php

use App\Http\Controllers\Api\SetoranApiController;
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

Route::controller(SetoranApiController::class)->group(function(){
    Route::get('setorans', 'index');
    Route::get('setorans/detail/{id}', 'detail');
    Route::post('setorans/save', 'tambah');
});
