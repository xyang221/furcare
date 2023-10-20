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
use App\Http\Controllers\Api\SpecieController;
use App\Http\Controllers\Api\BreedController;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\ClientServiceController;
use App\Http\Controllers\Api\ServiceController;

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

    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::put('/users/{id}', [UserController::class, 'update']);

    Route::delete('/users/{id}/archive', [UserController::class, 'archive']);
    Route::get('/archives/users', [UserController::class, 'archivelist']);
    Route::put('/users/{id}/restore', [UserController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [UserController::class, 'destroy']);
    
    Route::apiResource('/zipcodes', ZipcodeController::class);

    Route::apiResource('/addresses', AddressController::class);

    Route::get('/petowners', [PetOwnerController::class, 'index']);
    Route::post('/petowners', [PetOwnerController::class, 'store']);
    Route::get('/petowners/{id}', [PetOwnerController::class, 'show']);
    Route::put('/petowners/{id}', [PetOwnerController::class, 'update']);

    Route::get('/petowners/{id}/appointments', [PetOwnerController::class, 'getPetOwnerAppointments']);
    Route::delete('/petowners/{id}/archive', [PetOwnerController::class, 'archive']);
    Route::get('/archives/petowners', [PetOwnerController::class, 'archivelist']);
    Route::put('/petowners/{id}/restore', [PetOwnerController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [PetOwnerController::class, 'destroy']);

    Route::post('/petowners/{id}/addpet',[PetController::class, 'store']);
    Route::get('/petowners/{ownerId}/pets',[PetController::class, 'getPetOwnersPet']);
    
    Route::delete('/pets/{id}/archive', [PetController::class, 'archive']);
    Route::get('/archives/pets', [PetController::class, 'archivelist']);
    Route::put('/pets/{id}/restore', [PetController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [PetController::class, 'destroy']);

    Route::apiResource('/pets', PetController::class);
    
    Route::post('/pet/upload-image',[PetController::class, 'uploadImage']);

    Route::apiResource('/breeds', BreedController::class);

    Route::get('/staffs', [StaffController::class, 'index']);
    Route::post('/staffs', [StaffController::class, 'store']);
    Route::get('/staffs/{id}', [StaffController::class, 'show']);
    Route::put('/staffs/{id}', [StaffController::class, 'update']);

    Route::delete('/staffs/{id}/archive', [StaffController::class, 'archive']);
    Route::get('/archives/staffs', [StaffController::class, 'archivelist']);
    Route::put('/staffs/{id}/restore', [StaffController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [StaffController::class, 'destroy']);
    
    Route::apiResource('/services', ServiceController::class);

    Route::get('/appointments/pending', [AppointmentController::class, 'getPending']);
    Route::put('/appointments/{id}/confirm', [AppointmentController::class, 'confirm']);
    Route::get('/appointments/confirmed', [AppointmentController::class, 'getConfirmed']);
    Route::put('/appointments/{id}/cancel', [AppointmentController::class, 'cancel']);
    Route::get('/appointments/cancelled', [AppointmentController::class, 'getCancelled']);
    Route::put('/appointments/{id}/completed', [AppointmentController::class, 'completed']);
    Route::get('/appointments/completed', [AppointmentController::class, 'getCompleted']);
    Route::put('/appointments/{id}/noshow', [AppointmentController::class, 'noshow']);
    Route::get('/appointments/bydate', [AppointmentController::class, 'getbyDate']);
    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::get('/appointments/{id}', [AppointmentController::class, 'show']);
    Route::post('/appointments', [AppointmentController::class, 'store']);
    Route::put('/appointments/{id}', [AppointmentController::class, 'update']);


    Route::apiResource('/clientservices', ClientServiceController::class);


    Route::post('/logout', [AuthController::class, 'logout']);

});
// });

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);


Route::apiResource('/species', SpecieController::class);

