@extends('layout.main')
@section('content')
<div class=" bg-white ">
    <div class="row">
        <div class="col-lg-12 bg-light ">
             <div class="d-flex align-items-center justify-content-left pt-5 ">
                <h4 class="text-right pt-5">Add Staff</h4>
            </div>
        </div>
          @if ($errors->any())
            <div>
                <ul>
                  @foreach ($errors->all() as $error )
                    <li>
                    {{$error}}
                    </li>
                  @endforeach
                </ul>
            </div>
              
            @endif
       <form class="forms-sample" method="POST" action="{{route('store-staff')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-12 bg-light">
            <div class="p-3 py-3">
                <div class="row mt-4 mb-3">
                    <div class="form-group">
                    <label>Upload Profile Picture</label>
                    <div class="input-group col-md-12">
                        <input type="file" class="form-control cold-md-12" accept="image/*" placeholder="Upload Image" name="profile_picture" @error('profile_picture') is-invalid @enderror/>
                        @error('profile_picture')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      
                    </div>
                    </div>
                     <div class="input-group col-md-12">
                     <div class="col-md-6"><label class="labels mt-2">First Name</label><input type="text" class="form-control" placeholder="full name" value="{{ old('first_name')}}" name="first_name"></div>
                     <div class="col-md-6"><label class="labels mt-2">Middle Name</label><input type="text" class="form-control" placeholder="full name" value="{{ old('middle_name')}}" name="middle_name"></div>
                     <div class="col-md-6"><label class="labels mt-2">Last Name</label><input type="text" class="form-control" placeholder="full name" value="{{ old('last_name')}}" name="last_name"></div>
                    <div class="col-md-6"><label class="labels mt-2">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{ old('phone_number')}}" name="phone_number"></div>
                    <div class="col-md-6"><label class="labels mt-2">Address</label><input type="text" class="form-control" placeholder="enter address" value="{{ old('address')}}" name="address"></div>
                    <div class="col-md-6"><label class="labels mt-2">Email Address</label><input type="text" class="form-control" placeholder="enter email add" value="{{ old('email')}}" name="email"></div>
                    <div class="col-md-3"><label class="labels mt-2">Password</label><input type="password" class="form-control" value="" placeholder="*******" name="password"></div>
               
                    </div>
                   
                  
                   
                </div>
            </div>
            <div class="mt-2 text-right mx-5"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
        </div>
       </form>
    </div>
</div>
</div>
</div>
@endsection()