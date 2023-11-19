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
use App\Http\Controllers\Api\ServicesAvailedController;
use App\Http\Controllers\Api\DewormingLogController;
use App\Http\Controllers\Api\VaccinationLogController;
use App\Http\Controllers\Api\AgainstController;
use App\Http\Controllers\Api\VaccinationAgainstController;
use App\Http\Controllers\Api\DiagnosisController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\TestResultController;
use App\Http\Controllers\Api\MedicineController;
use App\Http\Controllers\Api\PetConditionController;
use App\Http\Controllers\Api\TreatmentController;

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

    Route::post('/upload-image',[ImageController::class, 'store']);
    Route::get('/images',[ImageController::class, 'index']);
    

    Route::apiResource('/species', SpecieController::class);
    Route::get('/species/{id}', [SpecieController::class, 'show']);
    Route::put('/species/{id}', [SpecieController::class, 'update']);
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

    Route::apiResource('/diagnosis', DiagnosisController::class);
    Route::get('/diagnosis/pet/{id}', [DiagnosisController::class,'getbyPet']);
    Route::post('/diagnosis/pet/{id}/service/{serviceid}', [DiagnosisController::class,'store']);
    // Route::post('/diagnosis/pet/{id}', [DiagnosisController::class,'store']);
    

    Route::apiResource('/clientservices', ClientServiceController::class);

    Route::apiResource('/deworminglogs', DewormingLogController::class);
    Route::post('/deworminglogs/pet/{id}', [DewormingLogController::class,'store']);
    Route::get('/deworminglogs/pet/{id}', [DewormingLogController::class,'getbyPet']);
    Route::get('/deworminglogs/{id}', [DewormingLogController::class,'show']);
    Route::put('/deworminglogs/{id}', [DewormingLogController::class,'update']);

    Route::apiResource('/vaccinationlogs', VaccinationLogController::class);
    Route::post('/vaccinationlogs/pet/{id}', [VaccinationLogController::class,'store']);
    Route::get('/vaccinationlogs/pet/{id}', [VaccinationLogController::class,'getbyPet']);

    Route::apiResource('/againsts', AgainstController::class);
    Route::apiResource('/vaccinationagainsts', VaccinationAgainstController::class);

    Route::get('/testresults', [TestResultController::class,'index']);
    Route::post('/testresults/pet/{id}', [TestResultController::class,'store']);
    Route::get('/testresults/{id}', [TestResultController::class,'show']);
    Route::get('/testresults/pet/{id}', [TestResultController::class,'getbyPet']);
    Route::put('/testresults/{id}', [TestResultController::class,'update']);
    Route::delete('/testresults/{id}', [TestResultController::class,'destory']);
    Route::get('/archives/testresults', [TestResultController::class,'archivelist']);
    Route::put('/archives/testresults/{id}', [TestResultController::class,'restore']);
    Route::delete('/archives/testresults/{id}', [TestResultController::class,'forcedelete']);

    Route::apiResource('/treatments', TreatmentController::class);
    Route::post('/treatments/pet/{id}',[ TreatmentController::class, 'store']);
    Route::get('/treatments/pet/{id}',[ TreatmentController::class, 'getPetTreatments']);
    Route::get('/treatments/{id}/petconditions',[ TreatmentController::class, 'getTreatmentPetConditions']);
    Route::get('/treatments/{id}/medications',[ TreatmentController::class, 'getTreatmentMedications']);
    Route::get('/archives/treatments',[ TreatmentController::class, 'archivelist']);
    Route::put('/archives/treatments/{id}',[ TreatmentController::class, 'restore']);
    Route::delete('/archives/treatments/{id}',[ TreatmentController::class, 'forcedelete']);

    Route::apiResource('/petconditions', PetConditionController::class);
    Route::post('/petconditions/treatment/{id}',[ PetConditionController::class, 'store']);
    Route::get('/archives/petconditions',[ PetConditionController::class, 'archivelist']);
    Route::put('/archives/petconditions/{id}',[ PetConditionController::class, 'restore']);
    Route::delete('/archives/petconditions/{id}',[ PetConditionController::class, 'forcedelete']);


    Route::apiResource('/medicines', MedicineController::class);
    Route::get('/archives/medicines', [MedicineController::class, 'archivelist']);
    Route::put('/archives/medicines/{id}', [MedicineController::class, 'restore']);
    Route::delete('/archives/medicines/{id}', [MedicineController::class, 'forcedelete']);
    

    Route::post('/logout', [AuthController::class, 'logout']);

});
// });

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);


Route::apiResource('/servicesavailed', ServicesAvailedController::class);
Route::post('/servicesavailed/petowner/{id}/pet/{petid}/add',[ ServicesAvailedController::class, 'store']);
Route::get('/servicesavailed/{id}/list',[ ServicesAvailedController::class, 'showByPetowner']);




