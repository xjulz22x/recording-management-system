<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showIndex(){
        return view('frontend.index');
    }

    public function showThis(){
        return view('frontend.index');
    }

    public function showBurial(){
        return view('frontend.burial.burial-list');
    }

    public function showBurialForm(){
        return view('frontend.burial.burial-form');
    }

    public function showBurialForm2(){
        return view('frontend.burial.burial-form-2');
    }

    public function showBurialForm3(){
        return view('frontend.burial.burial-form-3');
    }

    public function showeditBurialForm1(){
        return view('frontend.burial.edit-burial-form-1');
    }

    public function showeditBurialForm2(){
        return view('frontend.burial.edit-burial-form-2');
    }

    public function showeditBurialForm3(){
        return view('frontend.burial.edit-burial-form-3');
    }

    public function showMedical(){
        return view('frontend.medical.medical-list');
    }

    public function showMedicalForm(){
        return view('frontend.medical.medical-form');
    }

    public function showMedicalForm2(){
        return view('frontend.medical.medical-form-2');
    }

    public function showMedicalForm3(){
        return view('frontend.medical.medical-form-3');
    }

    public function showeditMedicalForm1(){
        return view('frontend.medical.edit-medical-form-1');
    }

    public function showeditMedicalForm2(){
        return view('frontend.medical.edit-medical-form-2');
    }

    public function showeditMedicalForm3(){
        return view('frontend.medical.edit-medical-form-3');
    }

    public function showStudentAssistance(){
        return view('frontend.student-assistance.student-assistance-list');
    }

    public function showStudentAssistanceForm(){
        return view('frontend.student-assistance.student-assistance-form');
    }

    public function showStudentAssistanceForm2(){
        return view('frontend.student-assistance.student-assistance-form-2');
    }

    public function showStudentAssistanceForm3(){
        return view('frontend.student-assistance.student-assistance-form-3');
    }

    public function showeditStudentAssistanceForm1(){
        return view('frontend.student-assistance.edit-student-assistance-form-1');
    }

    public function showeditStudentAssistanceForm2(){
        return view('frontend.student-assistance.edit-student-assistance-form-2');
    }

    public function showeditStudentAssistanceForm3(){
        return view('frontend.student-assistance.edit-student-assistance-form-3');
    }

    public function showTransportation(){
        return view('frontend.transportation.transportation-list');
    }

    public function showTransportationForm(){
        return view('frontend.transportation.transportation-form');
    }

    public function showTransportationForm2(){
        return view('frontend.transportation.transportation-form-2');
    }
    
    public function showTransportationForm3(){
        return view('frontend.transportation.transportation-form-3');
    }
    
    public function showeditTransportationForm1(){
        return view('frontend.transportation.edit-transportation-form-1');
    }

    public function showeditTransportationForm2(){
        return view('frontend.transportation.edit-transportation-form-2');
    }
    
    public function showeditTransportationForm3(){
        return view('frontend.transportation.edit-transportation-form-3');
    }

    public function showadminprofile(){
        return view('frontend.admin.admin-profile');
    }

    public function showstafflist(){
        return view('frontend.admin.staff.staff-list');
    }
    
    public function showaddstaff(){
        return view('frontend.admin.staff.add-staff');
    }
   
    public function showeditstaffprofile(){
        return view('frontend.admin.staff.edit-staff-profile');
    }
}

