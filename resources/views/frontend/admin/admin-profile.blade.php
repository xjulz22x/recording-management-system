@extends('layout.main')
@section('content')
<div class=" bg-white pt-5 mb-5">
    <form class="forms-sample" method="POST" action="{{route('update-admin-profile', Auth::user()->id)}}" enctype="multipart/form-data">
         @method('PUT')
         @csrf
    <div class="row">
        <div class="col-md-12 ">
             <div class="d-flex align-items-center justify-content-center pt-5 pb-3 bg-light">
                <h4 class="text-right">Profile Settings</h4>
            </div>
        </div>
        
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" height="200px" src="{{Auth::user()->profile_picture == !null ? asset('/profiles/'.Auth::user()->profile_picture) : asset('/images/faces/no-profile.jpg') }}"><span class="font-weight-bold mt-5">{{Auth::user()->name}}</span>
                 <div class="form-group">
                    <label>Update Profile Picture</label>
                    <div class="input-group col-md-12">
                        <input type="file" class="form-control cold-md-12" accept="image/*" placeholder="Upload Image" name="profile_picture" @error('profile_picture') is-invalid @enderror/>
                        @error('profile_picture')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div><span class="text-black-50">{{Auth::user()->email}}</span><span> </span>
            </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="row mt-4 mb-3">
                     <div class="col-md-6"><label class="labels mt-2">First Name</label><input type="text" class="form-control" placeholder="full name" value="{{ old('first_name' , Auth::user()->first_name)}}" name="first_name"></div>
                     <div class="col-md-6"><label class="labels mt-2">Middle Name</label><input type="text" class="form-control" placeholder="full name" value="{{ old('middle_name' , Auth::user()->middle_name)}}" name="middle_name"></div>
                     <div class="col-md-6"><label class="labels mt-2">Last Name</label><input type="text" class="form-control" placeholder="full name" value="{{ old('last_name' , Auth::user()->last_name)}}" name="last_name"></div>
                    <div class="col-md-6"><label class="labels mt-2">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{ old('phone_number' , Auth::user()->phone_number)}}" name="phone_number"></div>
                    <div class="col-md-6"><label class="labels mt-2">Address</label><input type="text" class="form-control" placeholder="enter address" value="{{ old('address' , Auth::user()->address)}}" name="address"></div>
                    <div class="col-md-6"><label class="labels mt-2">Email Address</label><input type="text" class="form-control" placeholder="enter email add" value="{{ old('email' , Auth::user()->email)}}" name="email"></div>
                  
                </div>
            </div>
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
        </div>
     
    </div>
    </form>
</div>
</div>
</div>
@endsection()