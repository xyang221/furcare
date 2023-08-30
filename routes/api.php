<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PetOwnerController;
use App\Http\Controllers\Api\AddressController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// prefix('admin')->
// Route::middleware(['auth','isAdmin'])->group(function() {

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/petowners', PetOwnerController::class);
    // Route::get('/petowners', [PetOwnerController::class, 'index']);
    Route::apiResource('/addresses', AddressController::class);
});
// });


Route::post('/signup', [AuthController::class, 'signup']);
// Route::get('/signup', [AddressController::class,'addAddress'])->name('address.add');

Route::post('/login', [AuthController::class, 'login']);

// Route::apiResource('petowners', PetOwnerController::class);
