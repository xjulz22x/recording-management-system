<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = User::role('staff')->paginate(10);
        return view('frontend.admin.staff.staff-list', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
           'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'numeric', 'min:11'],
            'profile_picture' => ['nullable', 'mimes:jpeg,png,bmp,gif'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

       
         if($request->has('profile_picture')){
                $new_profile_picture = time().rand(1,1000).'.'.$request->profile_picture->getClientOriginalName();
                $request->profile_picture->move(public_path('profiles'), $new_profile_picture);
                     $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'middle_name' => $request->middle_name,
                    'address' => $request->address,
                    'phone_number' => $request->phone_number,
                    'profile_picture' => $new_profile_picture,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ])->assignRole('staff');
        }else{
                    $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'middle_name' => $request->middle_name,
                    'address' => $request->address,
                    'phone_number' => $request->phone_number,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ])->assignRole('staff');

        }
        Alert::success('System Alert', 'Successfully Created Staff!');
        return redirect('/staff-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getStaff = User::findOrFail($id);
        return view('frontend.admin.staff.edit-staff-profile' , compact('getStaff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
           'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'numeric' , 'min:11'],
            'address' => ['required', 'string', 'max:255'],
            'profile_picture' => ['nullable', 'mimes:jpeg,png,bmp,gif'],
        ]);

        if($request->has('profile_picture')){
                $imageName = time().rand(1,1000).'.'.$request->profile_picture->getClientOriginalName();
                $request->profile_picture->move(public_path('profiles'), $imageName);
                $staff = User::findOrFail($id);
                $staff->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'middle_name' => $request->middle_name,
                    'address' => $request->address,
                    'phone_number' => $request->phone_number,
                    'profile_picture' => $imageName,
                    'email' => $request->email,
                ]);
        }
            $staff = User::findOrFail($id);
            $staff->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'middle_name' => $request->middle_name,
                    'address' => $request->address,
                    'phone_number' => $request->phone_number,
                    'email' => $request->email,
                ]);
        toast('Successfully Updated!','success')->autoClose(6000);
        return redirect('/staff-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $userDelete = User::findOrFail($id);
        if($userDelete->profile_picture == null)
        {
        $userDelete->delete();
        return response()->json(['status'=> 'Successfully Deleted.']);
        }
        unlink(public_path('profiles/'. $userDelete->profile_picture));
        $userDelete->delete();
        return response()->json(['status'=> 'Successfully Deleted.']);
       
    }
}
