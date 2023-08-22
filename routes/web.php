<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IdentifyingInformationController;
use App\Http\Controllers\BurialController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\DashboardController;


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

Route::get('/', function () {
    return view('auth.login');
});
    Route::group(['middleware'=>['role:admin|staff', 'auth']],function(){

        Route::get('/dashboard' , [DashboardController::class , 'index'])->name('index');

        Route::get('/profile/{id}' , [ProfileController::class , 'edit'])->name('edit-profile');
        Route::put('/profile-admin/{id}',[ProfileController::class,'update'])->name('update-admin-profile');

        Route::get('/general-intake-sheet/identifying-information' , [IdentifyingInformationController::class , 'create'])->name('general-intake-sheet');
        Route::post('/general-intake-sheet/identifying-information-store', [IdentifyingInformationController::class, 'storeIdentifyingInformation'])->name('general-intake-sheet-identifying-information-store');
        Route::get('/general-intake-sheet/{id}/identifying-information-view' , [IdentifyingInformationController::class , 'showIdentifyingInformation'])->name('show-identifying-information');
        Route::put('/general-intake-sheet/{id}/identifying-information-update' , [IdentifyingInformationController::class , 'updateIdentifyingInformation'])->name('update-identifying-information');
        
        Route::get('/general-intake-sheet/family-planning/{id}', [IdentifyingInformationController::class, 'createFamilyPlanning'])->name('create-family-planning');
        Route::post('/general-intake-sheet/family-planning-store', [IdentifyingInformationController::class, 'storeFamilyPlanningInformation'])->name('general-intake-sheet-family-planning-store');
        Route::get('/general-intake-sheet/{id}/family-planning-view', [IdentifyingInformationController::class, 'showFamilyPlanning'])->name('show-family-planning');
        Route::put('/general-intake-sheet/{id}/family-planning-update', [IdentifyingInformationController::class, 'updateFamilyPlanning'])->name('update-family-planning');

        Route::get('/general-intake-sheet/family-information/{id}', [IdentifyingInformationController::class, 'createFamilyInformation'])->name('create-family-information');
        Route::post('/general-intake-sheet/family-information-store', [IdentifyingInformationController::class, 'storeFamilyInformation'])->name('general-intake-sheet-family-information-store');
        Route::get('/general-intake-sheet/{id}/family-information-view', [IdentifyingInformationController::class, 'showFamilyInformation'])->name('show-family-information');
        Route::put('/general-intake-sheet/family-information-update', [IdentifyingInformationController::class, 'updateFamilyInformation'])->name('update-family-information');

        Route::get('/general-intake-sheet/assesment-and-uploads/{id}', [IdentifyingInformationController::class, 'createAssesment'])->name('create-assesment');
        Route::post('/general-intake-sheet/assesment-and-uploads-store', [IdentifyingInformationController::class, 'storeAssesmentAndUploads'])->name('general-intake-sheet-assesment-and-uploads-store');
        Route::get('/general-intake-sheet/{id}/assesment-and-uploads-view', [IdentifyingInformationController::class, 'showAssesment'])->name('show-assesment');
        Route::put('/general-intake-sheet/{id}/assesment-and-uploads-update', [IdentifyingInformationController::class, 'updateAssesment'])->name('update-assesment');

        Route::get('/burial-list' , [BurialController::class , 'index'])->name('burial-list');
        Route::delete('/burial-archive/{id}' , [BurialController::class , 'archive'])->name('burial-archive');

        Route::get('/archive-list' , [ArchiveController::class , 'index'])->name('archive-list');
        Route::delete('/restore-user/{id}' , [ArchiveController::class , 'restore'])->name('resore-user');
        Route::delete('/delete-user/{id}' , [ArchiveController::class , 'deleteAccount'])->name('delete-user');

        Route::get('/medical-list' , [MedicalController::class , 'index'])->name('medical-list');

        Route::get('/student-assistance-list' , [StudentController::class , 'index'])->name('student-assistance-list');

        Route::get('/transportation-list' , [TransportationController::class , 'index'])->name('transportation-list');

           Route::group(['middleware'=>['role:admin', 'auth']],function(){
            
                    Route::post('/store-staff', [StaffController::class, 'store'])->name('store-staff');
                    Route::get('/staff-list' , [StaffController::class , 'index'])->name('staff-list');
                    Route::get('/staff-edit-profile/{id}', [StaffController::class, 'edit'])->name('staff-edit');
                    Route::delete('/staff-delete/{id}' , [StaffController::class , 'destroy'])->name('staff-delete');
                    Route::put('/staff-update-profile/{id}',[StaffController::class,'update'])->name('staff-update');
        });




// Route::get('/burial-form' , [Controller::class , 'showBurialForm'])->name('burial-form');
// Route::get('/burial-form-2' , [Controller::class , 'showBurialForm2'])->name('burial-form-2');
// Route::get('/burial-form-3' , [Controller::class , 'showBurialForm3'])->name('burial-form-3');

// Route::get('/edit-burial-form-1' , [Controller::class , 'showeditBurialForm1'])->name('edit-burial-form-1');
// Route::get('/edit-burial-form-2' , [Controller::class , 'showeditBurialForm2'])->name('edit-burial-form-2');
// Route::get('/edit-burial-form-3' , [Controller::class , 'showeditBurialForm3'])->name('edit-burial-form-3');


// Route::get('/medical-form' , [Controller::class , 'showMedicalForm'])->name('medical-form');
// Route::get('/medical-form-2' , [Controller::class , 'showMedicalForm2'])->name('medical-form-2');
// Route::get('/medical-form-3' , [Controller::class , 'showMedicalForm3'])->name('medical-form-3');

// Route::get('/edit-medical-form-1' , [Controller::class , 'showeditMedicalForm1'])->name('edit-medical-form-1');
// Route::get('/edit-medical-form-2' , [Controller::class , 'showeditMedicalForm2'])->name('edit-medical-form-2');
// Route::get('/edit-medical-form-3' , [Controller::class , 'showeditMedicalForm3'])->name('edit-medical-form-3');



// Route::get('/student-assistance-form' , [Controller::class , 'showStudentAssistanceForm'])->name('student-assistance-form');
// Route::get('/student-assistance-form-2' , [Controller::class , 'showStudentAssistanceForm2'])->name('student-assistance-form-2');
// Route::get('/student-assistance-form-3' , [Controller::class , 'showStudentAssistanceForm3'])->name('student-assistance-form-3');

// Route::get('/edit-student-assistance-form-1' , [Controller::class , 'showeditStudentAssistanceForm1'])->name('edit-student-assistance-form-1');
// Route::get('/edit-student-assistance-form-2' , [Controller::class , 'showeditStudentAssistanceForm2'])->name('edit-student-assistance-form-2');
// Route::get('/edit-student-assistance-form-3' , [Controller::class , 'showeditStudentAssistanceForm3'])->name('edit-student-assistance-form-3');



// Route::get('/transportation-form' , [Controller::class , 'showTransportationForm'])->name('transportation-form');
// Route::get('/transportation-form-2' , [Controller::class , 'showTransportationForm2'])->name('transportation-form-2');
// Route::get('/transportation-form-3' , [Controller::class , 'showTransportationForm3'])->name('transportation-form-3');

// Route::get('/edit-transportation-form-1' , [Controller::class , 'showeditTransportationForm1'])->name('edit-transportation-form-1');
// Route::get('/edit-transportation-form-2' , [Controller::class , 'showeditTransportationForm2'])->name('edit-transportation-form-2');
// Route::get('/edit-transportation-form-3' , [Controller::class , 'showeditTransportationForm3'])->name('edit-transportation-form-3');



Route::get('/add-staff' , [Controller::class , 'showaddstaff'])->name('add-staff');
Route::get('/edit-staff-profile' , [Controller::class , 'showeditstaffprofile'])->name('edit-staff-profile');

// Route::get('/dashboard', function () {
//     return view('frontend.index');
// })->middleware(['auth'])->name('dashboard');

});

require __DIR__.'/auth.php';
