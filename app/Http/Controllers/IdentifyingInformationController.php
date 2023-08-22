<?php

namespace App\Http\Controllers;

use App\Models\IdentifyingInformation;
use App\Models\FamilyPlanningInformation;
use App\Models\FamilyInformation;
use App\Models\AssesmentAndUploads;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class IdentifyingInformationController extends Controller
{
    
    public function index()
    {
        
    }

     public function createFamilyPlanning($id)
    {
        $getThisId = IdentifyingInformation::findOrFail($id);
        return view('frontend.general-intake-sheet.family-planning-information', compact('getThisId'));
    }

     public function createFamilyInformation($id)
    {
        $getThisId = IdentifyingInformation::findOrFail($id);
        return view('frontend.general-intake-sheet.family-information', compact('getThisId'));
    }

       public function createAssesment($id)
    {
        $getThisId = IdentifyingInformation::findOrFail($id);
        return view('frontend.general-intake-sheet.assesment-and-uploads', compact('getThisId'));
    }

    public function create()
    {
        return view('frontend.general-intake-sheet.intake-sheet-identifying-information');
    }

   
    public function storeIdentifyingInformation(Request $request)
    {
        $request->validate([
        'case_number' => ['required', 'string'],
        'new_old' => ['required', 'string'],
        'date' => ['required', 'string'],
        'name_of_client' => ['required', 'string'],
        'contact' => ['required', 'string'],
        'address' => ['required', 'string'],
        'birth_date' => ['required', 'string'],
        'age' => ['required', 'string'],
        'birth_place' => ['required', 'string'],
        'religion' => ['required', 'string'],
        'occupation' => ['required', 'string'],
        'educational_attainment' => ['required', 'string'],
        'name_of_nearest_relatives' => ['required', 'string'],
        'address_of_nearest_relatives' => ['required', 'string'],
        'if_youth' => ['nullable', 'string'],
        'housing' => ['required', 'string'],
        'estimated_loss_or_damage' => ['nullable', 'string'],
        'if_client_is_disabled' => ['nullable', 'string'],
        'client_sought_outside_assistance' => ['required', 'string'],
        'client_sought_outside_assistance_if_yes_type_of_assistance' => ['nullable', 'string'],
        'client_sought_outside_assistance_source' => ['nullable', 'string'],
        'client_sought_outside_assistance_date' => ['nullable', 'string'],
        'client_sought_outside_assistance_source_of_referral' => ['nullable', 'string'],
        'burial_status' => ['nullable', 'string'],
        'medical_status' => ['nullable', 'string'],
        'student_assistance_status' => ['nullable', 'string'],
        'transportation_status' => ['nullable', 'string'],
        ]);
        $generateId = uniqid();
        $identifyingInformation = IdentifyingInformation::create([
            'unique_id' =>$generateId,
            'case_number' =>$request->case_number,
            'new_old' =>$request->new_old,
            'date' =>$request->date,
            'name_of_client' =>$request->name_of_client,
            'contact' =>$request->contact,
            'address' =>$request->address,
            'birth_date' =>$request->birth_date,
            'age' =>$request->age,
            'birth_place' =>$request->birth_place,
            'religion' =>$request->religion,
            'occupation' =>$request->occupation,
            'educational_attainment' =>$request->educational_attainment,
            'name_of_nearest_relatives' =>$request->name_of_nearest_relatives,
            'address_of_nearest_relatives' =>$request->address_of_nearest_relatives,
            'if_youth' =>$request->if_youth,
            'housing' =>$request->housing,
            'estimated_loss_or_damage' =>$request->estimated_loss_or_damage,
            'if_client_is_disabled' =>$request->if_client_is_disabled,
            'client_sought_outside_assistance' =>$request->client_sought_outside_assistance,
            'client_sought_outside_assistance_if_yes_type_of_assistance' =>$request->client_sought_outside_assistance_if_yes_type_of_assistance,
            'client_sought_outside_assistance_source' =>$request->client_sought_outside_assistance_source,
            'client_sought_outside_assistance_date' =>$request->client_sought_outside_assistance_date,
            'client_sought_outside_assistance_source_of_referral' =>$request->client_sought_outside_assistance_source_of_referral,
            'burial_status' =>$request->burial_status,
            'medical_status' =>$request->medical_status,
            'student_assistance_status' =>$request->student_assistance_status,
            'transportation_status' =>$request->transportation_status,
            'archive_status' =>0,
        ]);
        $thisId = $generateId;
        $id = IdentifyingInformation::where('unique_id', $thisId)->first();
        toast('Saved Successfully!','success')->autoClose(6000);
        return redirect('/general-intake-sheet/family-planning/'.$id->id);
       
    }

     public function storeFamilyPlanningInformation(Request $request)
    {
        $request->validate([
       
        'practicing_family_planning' => ['required', 'string'],
        'practicing_family_planning_if_yes' => ['nullable', 'string'],
        'practicing_family_planning_if_no' => ['nullable', 'string'],
        'nature_of_employment' => ['required', 'string'],
        'sss' => ['nullable', 'string'],
        'gsis' => ['nullable', 'string'],
        'others' => ['nullable', 'string'],
        'housing' => ['required', 'string'],
        'use_and_source_of_portable_water' => ['required', 'string'],
        'light' => ['required', 'string'],
        'toilet' => ['required', 'string'],
        'kitchen' => ['required', 'string'],
        'recreactional_activity' => ['required', 'string'],
        'religious_spiritual_activity' => ['nullable', 'string'],
        'physical_needs' => ['required', 'string'],
        'groom_and_personal_hygiene' => ['nullable', 'string'],
        'problem_solving' => ['nullable', 'string'],
        'decision_making' => ['required', 'string'],
        'his_family' => ['nullable', 'string'],
        'community' => ['nullable', 'string'],
        ]);

        $familyPlanningInformation = FamilyPlanningInformation::create([
            'identifying_information_id' =>$request->identifying_information_id,
            'practicing_family_planning' =>$request->practicing_family_planning,
            'practicing_family_planning_if_yes' =>$request->practicing_family_planning_if_yes,
            'practicing_family_planning_if_no' =>$request->practicing_family_planning_if_no,
            'nature_of_employment' =>$request->nature_of_employment,
            'sss' =>$request->sss,
            'gsis' =>$request->gsis,
            'others' =>$request->others,
            'housing' =>$request->housing,
            'use_and_source_of_portable_water' =>$request->use_and_source_of_portable_water,
            'light' =>$request->light,
            'toilet' =>$request->toilet,
            'kitchen' =>$request->kitchen,
            'recreactional_activity' =>$request->recreactional_activity,
            'religious_spiritual_activity' =>$request->religious_spiritual_activity,
            'physical_needs' =>$request->physical_needs,
            'groom_and_personal_hygiene' =>$request->groom_and_personal_hygiene,
            'problem_solving' =>$request->problem_solving,
            'decision_making' =>$request->decision_making,
            'his_family' =>$request->his_family,
            'community' =>$request->community,
            
        ]);
        $id = $request->identifying_information_id;
        // $id = IdentifyingInformation::where('id', $id)->first();
        toast('Saved Successfully!','success')->autoClose(6000);
        return redirect('general-intake-sheet/family-information/'.$id);
       
    }


     public function storeFamilyInformation(Request $request)
    {
       
            $identifying_information_id = $request->identifying_information_id;
            $name = $request->name;
            $age = $request->age;
            $date_of_birth = $request->date_of_birth;
            $sex = $request->sex;
            $civil_status = $request->civil_status;
            $relattion_of_client = $request->relattion_of_client;
            $highest_educational_attainment = $request->highest_educational_attainment;
            $skills = $request->skills;
            $occupation = $request->occupation;
            $estimated_monthly_income = $request->estimated_monthly_income;
            $source = $request->source;
            $health_status = $request->health_status;
            $remarks = $request->remarks;

           for ($i=0; $i < count($name) ; $i++) { 
                $savedata = [
                    'identifying_information_id' => $identifying_information_id[$i],
                    'name' =>  $name[$i],
                    'age' => $age[$i],
                    'date_of_birth' =>  $date_of_birth[$i],
                    'sex' =>  $sex[$i],
                    'civil_status' =>  $civil_status[$i],
                    'relattion_of_client' =>  $relattion_of_client[$i],
                    'highest_educational_attainment' => $highest_educational_attainment[$i],
                    'skills' =>  $skills[$i],
                    'occupation' =>  $occupation[$i],
                    'estimated_monthly_income' => $estimated_monthly_income[$i],
                    'source' =>  $source[$i],
                    'health_status' =>  $health_status[$i],
                    'remarks' => $remarks[$i],
                ];
            $familyInformation = FamilyInformation::create($savedata);
           }
            $id = $identifying_information_id;
            // $id = FamilyPlanningInformation::where('id', $id)->first();
            toast('Saved Successfully!','success')->autoClose(6000);
            return redirect('general-intake-sheet/assesment-and-uploads/'.$id[0]);
    }

      public function storeAssesmentAndUploads(Request $request)
    {
        $request->validate([
       
        'identifying_information_id' => ['required', 'string'],
        'problem_presented_by_client' => ['nullable', 'string'],
        'initial_assesment_of_the_problem' => ['nullable', 'string'],
        'to_improve_economic_condition_functioning' => ['nullable', 'string'],
        'to_improve_social_functioning' => ['nullable', 'string'],
        'to_overcome_presented_crisis' => ['nullable', 'string'],
        'to_correct_manifested_social_deviance' => ['nullable', 'string'],
        'to_develop_desired_attitudes_and_capabilities' => ['nullable', 'string'],
        'to_improve_handicapping_condition' => ['nullable', 'string'],
        'other_rehabilitation_goals' => ['nullable', 'string'],
        'other_rehabilitation_goals_specify' => ['nullable', 'string'],
        'recommendation' => ['required', 'string'],
        'plan_of_action' => ['required', 'string'],
        'valid_id' => ['nullable', 'mimes:jpeg,png,bmp'],
        'certificate_of_indigency' => ['nullable', 'mimes:jpeg,png,bmp'],
        'death_certificate' => ['nullable', 'mimes:jpeg,png,bmp'],
        'funeral_contract' => ['nullable', 'mimes:jpeg,png,bmp'],
        'signature_of_client' => ['required', 'mimes:jpeg,png,bmp'],
        'signature_of_worker' => ['required', 'mimes:jpeg,png,bmp'],
        ]);

        if($request->has('valid_id')){

                $imageValidID = time().rand(1,1000).'.'.$request->valid_id->getClientOriginalName();
                $request->valid_id->move(public_path('uploads'), $imageValidID);

                $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);

                $assesment = AssesmentAndUploads::create([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'valid_id' => $imageValidID,
                    'signature_of_client' =>$imageSignatureClient,
                    'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }

            elseif($request->has('certificate_of_indigency')){

                $imageCertificateOfIndigency = time().rand(1,1000).'.'.$request->certificate_of_indigency->getClientOriginalName();
                $request->certificate_of_indigency->move(public_path('uploads'), $imageCertificateOfIndigency);

                $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);

                $assesment = AssesmentAndUploads::create([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'certificate_of_indigency' =>$imageCertificateOfIndigency,
                    'signature_of_client' =>$imageSignatureClient,
                    'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }
            elseif($request->has('death_certificate')){

                $imageDeathCert = time().rand(1,1000).'.'.$request->death_certificate->getClientOriginalName();
                $request->death_certificate->move(public_path('uploads'), $imageDeathCert);

                $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);

                $assesment = AssesmentAndUploads::create([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'death_certificate' =>$imageDeathCert,
                    'signature_of_client' =>$imageSignatureClient,
                    'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }
            elseif($request->has('funeral_contract')){

                $imageFuneral = time().rand(1,1000).'.'.$request->funeral_contract->getClientOriginalName();
                $request->funeral_contract->move(public_path('uploads'), $imageFuneral);

                $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);

                $assesment = AssesmentAndUploads::create([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'funeral_contract' =>$imageFuneral,
                    'signature_of_client' =>$imageSignatureClient,
                    'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }
             else
             {
                $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);

                $assesment = AssesmentAndUploads::create([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'signature_of_client' =>$imageSignatureClient,
                    'signature_of_worker' =>$imageSignatureWorker,
                ]);

             }
            Alert::success('Done!','success')->autoClose(6000);
            return redirect('/dashboard');
       
    }


   
    public function show(IdentifyingInformation $identifyingInformation)
    {
        
    }

  
    public function showIdentifyingInformation($id)
    {
        $data = IdentifyingInformation::where('id', $id)->first();
        return view('frontend.edit-general-intake-sheet.identifying-information', compact('data'));
    }

     public function showFamilyPlanning($id)
    {
        $data = FamilyPlanningInformation::where('identifying_information_id', $id)->first();
        return view('frontend.edit-general-intake-sheet.family-planning-information', compact('data'));
    }

    public function showFamilyInformation($id)
    {
        $data = FamilyInformation::where('identifying_information_id', $id)->get();
        return view('frontend.edit-general-intake-sheet.family-information', compact('data'));
        
    }

     public function showAssesment($id)
    {
        $data = AssesmentAndUploads::where('identifying_information_id', $id)->first();

        return view('frontend.edit-general-intake-sheet.assesment-and-uploads', compact('data'));
        
    }

  
    public function updateIdentifyingInformation(Request $request, $id)
    {
         $request->validate([
        'case_number' => ['required', 'string'],
        'new_old' => ['required', 'string'],
        'date' => ['required', 'string'],
        'name_of_client' => ['required', 'string'],
        'contact' => ['required', 'string'],
        'address' => ['required', 'string'],
        'birth_date' => ['required', 'string'],
        'age' => ['required', 'string'],
        'birth_place' => ['required', 'string'],
        'religion' => ['required', 'string'],
        'occupation' => ['required', 'string'],
        'educational_attainment' => ['required', 'string'],
        'name_of_nearest_relatives' => ['required', 'string'],
        'address_of_nearest_relatives' => ['required', 'string'],
        'if_youth' => ['nullable', 'string'],
        'housing' => ['required', 'string'],
        'estimated_loss_or_damage' => ['nullable', 'string'],
        'if_client_is_disabled' => ['nullable', 'string'],
        'client_sought_outside_assistance' => ['required', 'string'],
        'client_sought_outside_assistance_if_yes_type_of_assistance' => ['nullable', 'string'],
        'client_sought_outside_assistance_source' => ['nullable', 'string'],
        'client_sought_outside_assistance_date' => ['nullable', 'string'],
        'client_sought_outside_assistance_source_of_referral' => ['nullable', 'string'],
        'burial_status' => ['nullable', 'string'],
        'medical_status' => ['nullable', 'string'],
        'student_assistance_status' => ['nullable', 'string'],
        'transportation_status' => ['nullable', 'string'],
        ]);

        $updateThis = IdentifyingInformation::findOrFail($id);
        $updateThis->update($request->all());
        toast('Successfully Updated!','success')->autoClose(6000);
        return back();
    }

       public function updateFamilyPlanning(Request $request, $id)
    {
          $request->validate([
       
        'practicing_family_planning' => ['required', 'string'],
        'practicing_family_planning_if_yes' => ['nullable', 'string'],
        'practicing_family_planning_if_no' => ['nullable', 'string'],
        'nature_of_employment' => ['required', 'string'],
        'sss' => ['nullable', 'string'],
        'gsis' => ['nullable', 'string'],
        'others' => ['nullable', 'string'],
        'housing' => ['required', 'string'],
        'use_and_source_of_portable_water' => ['required', 'string'],
        'light' => ['required', 'string'],
        'toilet' => ['required', 'string'],
        'kitchen' => ['required', 'string'],
        'recreactional_activity' => ['required', 'string'],
        'religious_spiritual_activity' => ['nullable', 'string'],
        'physical_needs' => ['required', 'string'],
        'groom_and_personal_hygiene' => ['nullable', 'string'],
        'problem_solving' => ['nullable', 'string'],
        'decision_making' => ['required', 'string'],
        'his_family' => ['nullable', 'string'],
        'community' => ['nullable', 'string'],
        ]);

        $updateThis = FamilyPlanningInformation::where('identifying_information_id' , $id)->first();
        $updateThis->update($request->all());
        toast('Successfully Updated!','success')->autoClose(6000);
        return back();
    }

        public function updateFamilyInformation(Request $request)
    {
       

            $identifying_information_id = $request->identifying_information_id;
            $name = $request->name;
            $age = $request->age;
            $date_of_birth = $request->date_of_birth;
            $sex = $request->sex;
            $civil_status = $request->civil_status;
            $relattion_of_client = $request->relattion_of_client;
            $highest_educational_attainment = $request->highest_educational_attainment;
            $skills = $request->skills;
            $occupation = $request->occupation;
            $estimated_monthly_income = $request->estimated_monthly_income;
            $source = $request->source;
            $health_status = $request->health_status;
            $remarks = $request->remarks;

           for ($i=0; $i < count($name) ; $i++) {

                $familyInformation = FamilyInformation::where('id' , $request->id)->get();
              
                $savedata = [
                    
                    'name' =>  $name[$i],
                    'age' => $age[$i],
                    'date_of_birth' =>  $date_of_birth[$i],
                    'sex' =>  $sex[$i],
                    'civil_status' =>  $civil_status[$i],
                    'relattion_of_client' =>  $relattion_of_client[$i],
                    'highest_educational_attainment' => $highest_educational_attainment[$i],
                    'skills' =>  $skills[$i],
                    'occupation' =>  $occupation[$i],
                    'estimated_monthly_income' => $estimated_monthly_income[$i],
                    'source' =>  $source[$i],
                    'health_status' =>  $health_status[$i],
                    'remarks' => $remarks[$i],
                ];
            $familyInformation->update($savedata);
        }

        toast('Successfully Updated!','success')->autoClose(6000);
        return back();
    }

       public function updateAssesment(Request $request, $id)
    {

        // $request->validate([
       
        // 'identifying_information_id' => ['required', 'string'],
        // 'problem_presented_by_client' => ['nullable', 'string'],
        // 'initial_assesment_of_the_problem' => ['nullable', 'string'],
        // 'to_improve_economic_condition_functioning' => ['nullable', 'string'],
        // 'to_improve_social_functioning' => ['nullable', 'string'],
        // 'to_overcome_presented_crisis' => ['nullable', 'string'],
        // 'to_correct_manifested_social_deviance' => ['nullable', 'string'],
        // 'to_develop_desired_attitudes_and_capabilities' => ['nullable', 'string'],
        // 'to_improve_handicapping_condition' => ['nullable', 'string'],
        // 'other_rehabilitation_goals' => ['nullable', 'string'],
        // 'other_rehabilitation_goals_specify' => ['nullable', 'string'],
        // 'recommendation' => ['required', 'string'],
        // 'plan_of_action' => ['required', 'string'],
        // 'valid_id' => ['nullable', 'mimes:jpeg,png,bmp'],
        // 'certificate_of_indigency' => ['nullable', 'mimes:jpeg,png,bmp'],
        // 'death_certificate' => ['nullable', 'mimes:jpeg,png,bmp'],
        // 'funeral_contract' => ['nullable', 'mimes:jpeg,png,bmp'],
        // 'signature_of_client' => ['required', 'mimes:jpeg,png,bmp'],
        // 'signature_of_worker' => ['required', 'mimes:jpeg,png,bmp'],
        // ]);

        if($request->has('valid_id')){

                $imageValidID = time().rand(1,1000).'.'.$request->valid_id->getClientOriginalName();
                $request->valid_id->move(public_path('uploads'), $imageValidID);

                // $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                // $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                // $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                // $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);
                $assesment = AssesmentAndUploads::where('identifying_information_id' , $id)->first();
                $assesment->update([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'valid_id' => $imageValidID,
                    // 'signature_of_client' =>$imageSignatureClient,
                    // 'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }

            elseif($request->has('certificate_of_indigency')){

                $imageCertificateOfIndigency = time().rand(1,1000).'.'.$request->certificate_of_indigency->getClientOriginalName();
                $request->certificate_of_indigency->move(public_path('uploads'), $imageCertificateOfIndigency);

                // $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                // $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                // $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                // $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);
                $assesment = AssesmentAndUploads::where('identifying_information_id' , $id)->first();
                $assesment->update([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'certificate_of_indigency' =>$imageCertificateOfIndigency,
                    // 'signature_of_client' =>$imageSignatureClient,
                    // 'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }
            elseif($request->has('death_certificate')){

                $imageDeathCert = time().rand(1,1000).'.'.$request->death_certificate->getClientOriginalName();
                $request->death_certificate->move(public_path('uploads'), $imageDeathCert);

                // $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                // $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                // $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                // $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);
                  $assesment = AssesmentAndUploads::where('identifying_information_id' , $id)->first();
                $assesment->update([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'death_certificate' =>$imageDeathCert,
                    // 'signature_of_client' =>$imageSignatureClient,
                    // 'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }
            elseif($request->has('funeral_contract')){

                $imageFuneral = time().rand(1,1000).'.'.$request->funeral_contract->getClientOriginalName();
                $request->funeral_contract->move(public_path('uploads'), $imageFuneral);

                // $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                // $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                // $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                // $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);
                $assesment = AssesmentAndUploads::where('identifying_information_id' , $id)->first();
                $assesment->update([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    'funeral_contract' =>$imageFuneral,
                    // 'signature_of_client' =>$imageSignatureClient,
                    // 'signature_of_worker' =>$imageSignatureWorker,
                ]);
             }
             else
             {
                // $imageSignatureClient = time().rand(1,1000).'.'.$request->signature_of_client->getClientOriginalName();
                // $request->signature_of_client->move(public_path('uploads'), $imageSignatureClient);

                // $imageSignatureWorker = time().rand(1,1000).'.'.$request->signature_of_worker->getClientOriginalName();
                // $request->signature_of_worker->move(public_path('uploads'), $imageSignatureWorker);

                $assesment = AssesmentAndUploads::where('identifying_information_id' , $id)->first();
                $assesment->update([
                    'identifying_information_id' =>$request->identifying_information_id,
                    'problem_presented_by_client' =>$request->problem_presented_by_client,
                    'initial_assesment_of_the_problem' =>$request->initial_assesment_of_the_problem,
                    'to_improve_economic_condition_functioning' =>$request->to_improve_economic_condition_functioning,
                    'to_improve_social_functioning' =>$request->to_improve_social_functioning,
                    'to_overcome_presented_crisis' =>$request->to_overcome_presented_crisis,
                    'to_correct_manifested_social_deviance' =>$request->to_correct_manifested_social_deviance,
                    'to_develop_desired_attitudes_and_capabilities' =>$request->to_develop_desired_attitudes_and_capabilities,
                    'to_improve_handicapping_condition' =>$request->to_improve_handicapping_condition,
                    'other_rehabilitation_goals' =>$request->other_rehabilitation_goals,
                    'other_rehabilitation_goals_specify' =>$request->other_rehabilitation_goals_specify,
                    'recommendation' =>$request->recommendation,
                    'plan_of_action' =>$request->plan_of_action,
                    // 'signature_of_client' =>$imageSignatureClient,
                    // 'signature_of_worker' =>$imageSignatureWorker,
                ]);

             }

        
        toast('Successfully Updated!','success')->autoClose(6000);
        return back();
    }

  
    public function destroy(IdentifyingInformation $identifyingInformation)
    {
        
    }
}
