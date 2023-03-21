<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\telefoneController;

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

/**Route::post('/agenda',[agendaController::class, 'store']);
Route::get('/agenda',[agendaController::class, 'index']);
Route::get('/agenda/{id}',[agendaController::class, 'show']);
Route::put('/agenda/{id}',[agendaController::class, 'update']);
Route::delete('/agenda/{id}',[agendaController::class, 'destroy']);



Route::post('/telefone',[telefoneController::class, 'store']);
Route::get('/telefone',[telefoneController::class, 'index']);
Route::get('/telefone/{id}',[telefoneController::class, 'show']);
Route::put('/telefone/{id}',[telefoneController::class, 'update']);
Route::delete('/telefone/{id}',[telefoneController::class, 'destroy']);
**/
Route::apiResources([
    'telefone' => telefoneController::class,
     'agenda' =>agendaController::class]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
