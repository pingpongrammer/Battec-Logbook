<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BattecController;

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

Route::get('/', [BattecController::class, 'dashboard']);
Route::get('/members', [BattecController::class, 'members']);
Route::get('/add-member', [BattecController::class, 'addMember']);
Route::get('/partial-member/{id}', [BattecController::class, 'partialMember']);
Route::post('/updatePartial/{id}', [BattecController::class, 'updatePartial']);
Route::get('/visitors', [BattecController::class, 'visitors']);
Route::get('/add-visitors', [BattecController::class, 'addVisitors']);
Route::post('/store-visitors', [BattecController::class, 'storeVisitors']);
Route::post('/store-member', [BattecController::class, 'storeMember']);
Route::get('/searchMember', [BattecController::class, 'searchMember']);
Route::get('/searchVisitor', [BattecController::class, 'searchVisitor']);
Route::get('/resetData', [BattecController::class, 'resetData']);
Route::post('/deleteDataAll', [BattecController::class, 'deleteDataAll']);
