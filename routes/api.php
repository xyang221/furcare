<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PetOwnerController;
use App\Http\Controllers\Api\StaffController;
use App\Http\Controllers\Api\ZipcodeController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\PetController;
use App\Http\Controllers\Api\BreedController;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\ClientServiceController;

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

    Route::apiResource('/roles', RoleController::class);
    Route::apiResource('/users', UserController::class);
    // Route::apiResource('/petowners', PetOwnerController::class);
    Route::apiResource('/staffs', StaffController::class);
    Route::apiResource('/zipcodes', ZipcodeController::class);
    Route::apiResource('/addresses', AddressController::class);
    Route::apiResource('/pets', PetController::class);
    Route::apiResource('/breeds', BreedController::class);
    Route::apiResource('/appointments', AppointmentController::class);
    Route::apiResource('/clientservices', ClientServiceController::class);

Route::get('/petowners/{ownerId}/pets',[PetController::class, 'getPetOwnersPet']);

    Route::post('/logout', [AuthController::class, 'logout']);

});
// });

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
