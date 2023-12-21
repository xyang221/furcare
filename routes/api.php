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
use App\Http\Controllers\Api\AdmissionController;
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
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\TestResultController;
use App\Http\Controllers\Api\MedicineController;
use App\Http\Controllers\Api\PetConditionController;
use App\Http\Controllers\Api\TreatmentController;
use App\Http\Controllers\Api\MedicationController;
use App\Http\Controllers\Api\MobileAuthController;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Route::prefix('/admin')->group(function(){

    // });

    // Route::prefix('/user')->group(function(){

    // });

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
    Route::get('/petowners-search/{name}', [PetOwnerController::class, 'searchPetowner']);
    Route::put('/petowners/{id}', [PetOwnerController::class, 'update']);

    Route::get('/petowners/{id}/appointments', [PetOwnerController::class, 'getPetOwnerAppointments']);
    Route::delete('/petowners/{id}/archive', [PetOwnerController::class, 'archive']);
    Route::get('/archives/petowners', [PetOwnerController::class, 'archivelist']);
    Route::put('/petowners/{id}/restore', [PetOwnerController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [PetOwnerController::class, 'destroy']);

    Route::get('/pets-search/{name}', [PetController::class, 'searchPet']);
    Route::post('/petowners/{id}/addpet', [PetController::class, 'store']);
    Route::get('/petowners/{ownerId}/pets', [PetController::class, 'getPetOwnersPet']);

    Route::delete('/pets/{id}/archive', [PetController::class, 'archive']);
    Route::get('/archives/pets', [PetController::class, 'archivelist']);
    Route::put('/pets/{id}/restore', [PetController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [PetController::class, 'destroy']);

    Route::apiResource('/pets', PetController::class);

    // Route::post('/pet/upload-image',[PetController::class, 'uploadImage']);

    Route::apiResource('/species', SpecieController::class);
    Route::get('/species/{id}', [SpecieController::class, 'show']);
    Route::put('/species/{id}', [SpecieController::class, 'update']);

    Route::apiResource('/breeds', BreedController::class);
    Route::get('/breeds-specie/{id}', [BreedController::class, 'getBreeds']);

    Route::get('/staffs', [StaffController::class, 'index']);
    Route::post('/staffs', [StaffController::class, 'store']);
    Route::get('/staffs/{id}', [StaffController::class, 'show']);
    Route::put('/staffs/{id}', [StaffController::class, 'update']);

    Route::delete('/staffs/{id}/archive', [StaffController::class, 'archive']);
    Route::get('/archives/staffs', [StaffController::class, 'archivelist']);
    Route::put('/staffs/{id}/restore', [StaffController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [StaffController::class, 'destroy']);

    Route::apiResource('/services', ServiceController::class);
    Route::put('/services/{id}/isAvailable', [ServiceController::class, 'serviceAvailable']);

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
    Route::post('/appointments/petowner/{id}', [AppointmentController::class, 'store']);
    Route::put('/appointments/{id}', [AppointmentController::class, 'update']);

    Route::apiResource('/vets', DoctorController::class);

    Route::get('/diagnosis', [DiagnosisController::class, 'index']);
    Route::post('/diagnosis/petowner/{id}/avail/{sid}', [DiagnosisController::class, 'store']);
    Route::get('/diagnosis/{id}', [DiagnosisController::class, 'show']);
    Route::get('/diagnosis/pet/{id}', [DiagnosisController::class, 'getbyPet']);
    Route::get('/diagnosis/petowner/{id}/service/{sid}', [DiagnosisController::class, 'getDiagnosisByServiceandPetowner']);
    Route::put('/diagnosis/{id}', [DiagnosisController::class, 'update']);
    Route::delete('/diagnosis/{id}/archive', [DiagnosisController::class, 'archive']);
    Route::get('/archives/diagnosis', [DiagnosisController::class, 'archivelist']);
    Route::put('/diagnosis/{id}/restore', [DiagnosisController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [DiagnosisController::class, 'destroy']);

    Route::get('/servicesavailed', [DiagnosisController::class, 'index']);
    Route::post('/servicesavailed/petowner/{id}/service/{sid}', [ServicesAvailedController::class, 'store']);
    Route::get('/servicesavailed/petowner/{id}/service/{sid}', [ServicesAvailedController::class, 'showByPetownerServiceAvail']);
    Route::get('/servicesavailed/petowner/{id}', [ServicesAvailedController::class, 'showByPetownerBilling']);
    Route::get('/servicesavailed/petowner/{id}/completed', [ServicesAvailedController::class, 'showByPetownerChargeSlip']);
    Route::put('/servicesavailed/{id}', [ServicesAvailedController::class, 'update']);
    Route::delete('/servicesavailed/{id}/archive', [ServicesAvailedController::class, 'archive']);
    Route::get('/archives/servicesavailed', [ServicesAvailedController::class, 'archivelist']);
    Route::put('/servicesavailed/{id}/restore', [ServicesAvailedController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [ServicesAvailedController::class, 'destroy']);

    Route::apiResource('/clientservices', ClientServiceController::class);
    Route::get('/clientservices/petowner/{id}', [ClientServiceController::class, 'show']);
    Route::put('/clientservices/{id}', [ClientServiceController::class, 'update']);
    Route::get('/clientservices/petowner/{id}/all', [ClientServiceController::class, 'showall']);
    Route::post('/clientservices/petowner/{id}', [ClientServiceController::class, 'store']);

    Route::apiResource('/deworminglogs', DewormingLogController::class);
    Route::post('/deworminglogs/petowner/{id}/service/{sid}', [DewormingLogController::class, 'store']);
    Route::get('/deworminglogs/pet/{id}', [DewormingLogController::class, 'getbyPet']);
    Route::get('/deworminglogs/petowner/{id}/service/{sid}', [DewormingLogController::class, 'getDewormingByServiceandPetowner']);
    Route::get('/deworminglogs/{id}', [DewormingLogController::class, 'show']);
    Route::put('/deworminglogs/{id}', [DewormingLogController::class, 'update']);
    Route::delete('/deworminglogs/{id}/archive', [DewormingLogController::class, 'archive']);
    Route::get('/archives/deworminglogs', [DewormingLogController::class, 'archivelist']);
    Route::put('/deworminglogs/{id}/restore', [DewormingLogController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [DewormingLogController::class, 'destroy']);

    Route::apiResource('/againsts', AgainstController::class);
    Route::get('/vaccinationlogs/pet/{id}', [VaccinationLogController::class, 'getbyPet']);
    Route::post('/vaccinationlogs/petowner/{id}/service/{sid}', [VaccinationLogController::class, 'store']);
    Route::get('/vaccinationlogs/{id}', [VaccinationLogController::class, 'show']);
    Route::get('/vaccinationlogs/petowner/{id}/service/{sid}', [VaccinationLogController::class, 'getDiagnosisByServiceandPetowner']);
    Route::put('/vaccinationlogs/{id}', [VaccinationLogController::class, 'update']);
    Route::delete('/vaccinationlogs/{id}/archive', [VaccinationLogController::class, 'archive']);
    Route::get('/archives/vaccinationlogs', [VaccinationLogController::class, 'archivelist']);
    Route::put('/vaccinationlogs/{id}/restore', [VaccinationLogController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [VaccinationLogController::class, 'destroy']);

    Route::get('/testresults', [TestResultController::class, 'index']);
    Route::post('/testresults/petowner/{id}/service/{sid}', [TestResultController::class, 'store']);
    Route::get('/testresults/{id}', [TestResultController::class, 'show']);
    Route::get('/testresults/pet/{id}', [TestResultController::class, 'getbyPet']);
    Route::get('/testresults/petowner/{id}/service/{sid}', [TestResultController::class, 'getDiagnosisByServiceandPetowner']);
    Route::put('/testresults/{id}', [TestResultController::class, 'update']);
    Route::post('/testresults/{id}/upload-attachment', [TestResultController::class, 'uploadAttachment']);
    Route::delete('/testresults/{id}/archive', [TestResultController::class, 'archive']);
    Route::get('/archives/testresults', [TestResultController::class, 'archivelist']);
    Route::put('/testresults/{id}/restore', [TestResultController::class, 'restore']);
    Route::delete('/archives/{id}/forcedelete', [TestResultController::class, 'destroy']);

    Route::get('/treatments', [TreatmentController::class, 'index']);
    Route::post('/treatments/petowner/{poid}/service/{sid}', [TreatmentController::class, 'store']);
    Route::get('/treatments/petowner/{id}/service/{sid}', [TreatmentController::class, 'getCurrentTreatment']);
    Route::get('/treatments/pet/{id}', [TreatmentController::class, 'getPetTreatments']);
    Route::get('/treatments/{id}/petconditions', [TreatmentController::class, 'getTreatmentPetConditions']);
    Route::get('/treatments/{id}/medications', [TreatmentController::class, 'getTreatmentMedications']);
    Route::get('/archives/treatments', [TreatmentController::class, 'archivelist']);
    Route::put('/archives/treatments/{id}', [TreatmentController::class, 'restore']);
    Route::delete('/archives/treatments/{id}', [TreatmentController::class, 'forcedelete']);

    Route::get('/petconditions', [PetConditionController::class, 'index']);
    Route::post('/petconditions/treatment/{id}', [PetConditionController::class, 'store']);
    Route::get('/petconditions/{id}', [PetConditionController::class, 'show']);
    Route::put('/petconditions/{id}', [PetConditionController::class, 'update']);
    Route::get('/archives/petconditions', [PetConditionController::class, 'archivelist']);
    Route::put('/archives/petconditions/{id}', [PetConditionController::class, 'restore']);
    Route::delete('/archives/petconditions/{id}', [PetConditionController::class, 'forcedelete']);

    Route::apiResource('/medicines', MedicineController::class);
    Route::get('/archives/medicines', [MedicineController::class, 'archivelist']);
    Route::put('/archives/medicines/{id}', [MedicineController::class, 'restore']);
    Route::delete('/archives/medicines/{id}', [MedicineController::class, 'forcedelete']);

    Route::get('/medications', [MedicationController::class, 'index']);
    Route::post('/medications/treatment/{id}', [MedicationController::class, 'store']);
    Route::put('/medications/{id}', [MedicationController::class, 'update']);
    Route::post('/medications/treatment/{id}', [MedicationController::class, 'store']);
    Route::get('/archives/medications', [MedicationController::class, 'archivelist']);
    Route::put('/archives/medications/{id}', [MedicationController::class, 'restore']);
    Route::delete('/archives/medications/{id}', [MedicationController::class, 'forcedelete']);

    Route::get('/admissions', [AdmissionController::class, 'index']);
    Route::post('/admissions/petowner/{poid}/service/{sid}', [AdmissionController::class, 'store']);
    Route::get('/admissions/petowner/{id}/service/{sid}', [AdmissionController::class, 'getCurrentTreatment']);
    Route::get('/admissions/petowner/{id}', [AdmissionController::class, 'getClientAdmissions']);
    Route::get('/admissions/pet/{id}', [AdmissionController::class, 'getPetAdmissions']);
    Route::get('/archives/admissions', [AdmissionController::class, 'archivelist']);
    Route::put('/archives/admissions/{id}', [AdmissionController::class, 'restore']);
    Route::delete('/archives/admissions/{id}', [AdmissionController::class, 'forcedelete']);



    Route::post('/logout', [AuthController::class, 'logout']);
});
// });

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('/mobile')->group(function () {
        Route::post('/signup', [MobileAuthController::class, 'signup']);
        Route::post('/login', [MobileAuthController::class, 'login']);

        Route::get('/users/{id}', [UserController::class, 'show']);
        Route::put('/users/{id}', [UserController::class, 'update']);

        Route::get('/addresses', [AddressController::class, 'index']);
        Route::get('/zipcodes', [ZipcodeController::class, 'index']);

        Route::get('/petowners/{id}', [PetOwnerController::class, 'show']);
        Route::put('/petowners/{id}', [PetOwnerController::class, 'update']);

        Route::get('/petowners/{ownerId}/pets', [PetController::class, 'getPetOwnersPet']);

        Route::get('/petowners/{id}/appointments', [PetOwnerController::class, 'getPetOwnerAppointments']);

        Route::get('/services', [ServiceController::class, 'index']);

        Route::post('/appointments/petowner/{id}', [AppointmentController::class, 'store']);
        Route::put('/appointments/{id}', [AppointmentController::class, 'update']);
    });
});

Route::apiResource('/zipcodes', ZipcodeController::class);
