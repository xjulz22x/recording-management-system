@extends('layout.main')
@section('content')
  <div class="main-panel">
    <div class="content-wrapper">       
      <div class="row">
           @if ($errors->any())
            <div>
                <ul>
                  @foreach ($errors->all() as $error )
                    <li class="text-danger">
                    {{$error}}
                    </li>
                  @endforeach
                </ul>
            </div>
            @endif
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
                  <h4 class="card-title mt-2 mb-5">GENERAL INTAKE SHEET</h4>
                <form class="form-sample"  method="POST" action="{{route('update-identifying-information' , $data->id)}}">
                  @method('PUT')
                  @csrf
                    <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Case No.</label>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="case_number" value="{{ old('case_number', $data->case_number)}}" @error('case_number') is-invalid @enderror/>
                                  @error('case_number')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <label class="col-sm-3 col-form-label">New/Old:</label>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="new_old" value="{{ old('new_old' , $data->new_old)}}" @error('new_old')  is-invalid @enderror/>
                                @error('new_old')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Date</label>
                              <div class="col-sm-5">
                                <input class="form-control" placeholder="dd/mm/yyyy" name="date" value="{{$data->date}}" @error('date')  is-invalid @enderror/>
                                  @error('date')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>
                          </div>

                      </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Burial Status</label>
                                @if ($data->burial_status == 1)
                                <div class="col-sm-4 ">
                                  <div class="form-check">
                                    <label class="form-check-label text-success font-weight-bolder">
                                      <input type="radio" class="form-check-input" name="burial_status" id="membershipRadios1" value="1" checked /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input text-danger" name="burial_status" id="membershipRadios2" value="0" /> Inactive </label>
                                  </div>
                                </div>
                                @else
                                   <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input" name="burial_status" id="membershipRadios1" value="1"  /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-danger font-weight-bolder">
                                      <input type="radio" class="form-check-input text-danger" name="burial_status" id="membershipRadios2" value="0" checked/> Inactive </label>
                                  </div>
                                </div>
                                @endif
                               
                              </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Medical Status</label>
                                @if ($data->medical_status == 1)
                                   <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-success font-weight-bolder">
                                      <input type="radio" class="form-check-input" name="medical_status" id="membershipRadios1" value="1" checked /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input text-danger" name="medical_status" id="membershipRadios2" value="0" /> Inactive </label>
                                  </div>
                                </div>
                                @else
                                   <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input" name="medical_status" id="membershipRadios1" value="1"  /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-danger font-weight-bolder">
                                      <input type="radio" class="form-check-input text-danger" name="medical_status" id="membershipRadios2" value="0" checked/> Inactive </label>
                                  </div>
                                </div>
                                @endif
                               
                              </div>
                            </div>
                        </div>
                           <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Student Assistance Status</label>
                                @if ($data->student_assistance_status == 1)
                                   <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-success font-weight-bolder">
                                      <input type="radio" class="form-check-input" name="student_assistance_status" id="membershipRadios1" value="1" checked /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input text-danger" name="student_assistance_status" id="membershipRadios2" value="0" /> Inactive </label>
                                  </div>
                                </div>
                                @else
                                   <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input" name="student_assistance_status" id="membershipRadios1" value="1"  /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-danger font-weight-bolder">
                                      <input type="radio" class="form-check-input text-danger" name="student_assistance_status" id="membershipRadios2" value="0" checked/> Inactive </label>
                                  </div>
                                </div>
                                @endif
                               
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Transportation Status</label>
                                @if ($data->transportation_status == 1)
                                   <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-success font-weight-bolder">
                                      <input type="radio" class="form-check-input" name="transportation_status" id="membershipRadios1" value="1" checked /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input text-danger" name="transportation_status" id="membershipRadios2" value="0" /> Inactive </label>
                                  </div>
                                </div>
                                @else
                                   <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-muted">
                                      <input type="radio" class="form-check-input" name="transportation_status" id="membershipRadios1" value="1"  /> Active </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label text-danger font-weight-bolder">
                                      <input type="radio" class="form-check-input text-danger" name="transportation_status" id="membershipRadios2" value="0" checked/> Inactive </label>
                                  </div>
                                </div>
                                @endif
                               
                              </div>
                            </div>
                        </div>
                          <p class="card-description">I - IDENTIFYING INFORMATION</p>
                        <div class="row">
                        
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name of Client</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="name_of_client" value="{{ old('name_of_client' , $data->name_of_client)}}"  @error('name_of_client')  is-invalid @enderror/>
                                @error('name_of_client')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Contact</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="contact" value="{{ old('contact', $data->contact)}}"  @error('contact')  is-invalid @enderror/>
                                @error('contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Birth Place</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="birth_place"  value="{{ old('birth_place', $data->birth_place)}}" @error('birth_place')  is-invalid @enderror/>
                                @error('birth_place')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Date of Birth</label>
                              <div class="col-sm-9">
                                <input class="form-control" placeholder="dd/mm/yyyy" name="birth_date" value="{{ old('birth_date', $data->birth_date)}}"  @error('birth_date')  is-invalid @enderror/>
                                @error('birth_date')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="address" value="{{ old('address' , $data->address)}}" @error('address') is-invalid @enderror>
                                @error('address')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
      
                                  <option value="{{$data->address}}">{{$data->address}}</option>
                                  {{-- <option value="Mother of Perpetual (Barangay II Poblacion)">Mother of Perpetual (Barangay II Poblacion)</option>
                                  <option value="Del Rosario (Barangay III Poblacion)">Del Rosario (Barangay III Poblacion)</option>
                                  <option value="Santo Niño (Barangay IV Poblacion)">Santo Niño (Barangay IV Poblacion)</option>
                                  <option value="La Esperanza (Manangkas)">La Esperanza (Manangkas)</option>
                                  <option value="Peñafrancia (Uson)">Peñafrancia (Uson)</option>
                                  <option value="Salvacion (Taverna)">Salvacion (Taverna)</option>
                                  <option value="San Antonio (Kaburihan)">San Antonio (Kaburihan)</option>
                                  <option value="San Bartolome (Talaongan)">San Bartolome (Talaongan)</option>
                                  <option value="San Eugenio (Alig-igan)">San Eugenio (Alig-igan)</option>
                                  <option value="San Isidro (Bilaoyon)">San Isidro (Bilaoyon)</option>
                                  <option value="San Rafael (Bil-og)">San Rafael (Bil-og)</option>
                                  <option value="San Roque (Alambre)">San Roque (Alambre)</option>
                                  <option value="San Sebastian (Bigo)">San Sebastian (Bigo)</option> --}}
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Age</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="age" value="{{ old('age' , $data->age)}}" @error('age') is-invalid @enderror/>
                                    @error('age')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Religion</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="religion"  value="{{ old('religion', $data->religion)}}" @error('religion') is-invalid @enderror/>
                                  @error('religion')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Occupation</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="occupation" value="{{ old('occupation', $data->occupation)}}" @error('occupation') is-invalid @enderror/>
                                  @error('occupation')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Educational Attainment:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="educational_attainment"value="{{ old('educational_attainment',$data->educational_attainment)}}" @error('educational_attainment') is-invalid @enderror/>
                                  @error('educational_attainment')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name of the nearest relative:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="name_of_nearest_relatives" value="{{ old('name_of_nearest_relatives', $data->name_of_nearest_relatives)}}" @error('name_of_nearest_relatives') is-invalid @enderror/>
                                  @error('name_of_nearest_relatives')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address of the Nearest Relative:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="address_of_nearest_relatives" value="{{ old('address_of_nearest_relatives', $data->address_of_nearest_relatives)}}" @error('address_of_nearest_relatives') is-invalid @enderror/>
                                  @error('address_of_nearest_relatives')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group row">
                                <label class="col-sm-5 col-form-label">If client is youth, indicate by checkmark whether</label>
                                <div class="col-sm-5">
                                  <select class="form-control" name="if_youth" value="{{ old('if_youth' , $data->if_youth)}}"  @error('if_youth') is-invalid @enderror>
                                @error('if_youth')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                                  @if ($data->if_youth == 'ISY')
                                    <option>Select Here</option>
                                    <option selected value="ISY">ISY</option>
                                    <option value="OSY">OSY</option>
                                  @else
                                  <option>Select Here</option>
                                  <option value="ISY">ISY</option>
                                    <option selected value="OSY">OSY</option>
                                  @endif
                              
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Housing: Indicate by checkmark whether he/she is a house owner</label>
                                  <div class="col-sm-5">
                                  <select class="form-control" name="housing" value="{{ old('housing', $data->housing)}}" @error('housing') is-invalid @enderror>
                                @error('housing')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @if ($data->housing == 'House Owner')
                                  <option selected value="House Owner">House Owner</option>
                                  <option value="House Sharer">House Sharer</option>
                                  <option value="House Renter">House Renter</option>
                                  <option value="Squater">Squater</option>

                                 @elseif ($data->housing == 'House Sharer')
                                  <option  value="House Owner">House Owner</option>
                                  <option selected value="House Sharer">House Sharer</option>
                                  <option value="House Renter">House Renter</option>
                                  <option value="Squater">Squater</option>
                                 @elseif ($data->housing == 'House Renter')
                                  <option  value="House Owner">House Owner</option>
                                  <option  value="House Sharer">House Sharer</option>
                                  <option selected value="House Renter">House Renter</option>
                                  <option value="Squater">Squater</option>
                                @else
                                  <option  value="House Owner">House Owner</option>
                                  <option  value="House Sharer">House Sharer</option>
                                  <option  value="House Renter">House Renter</option>
                                  <option selected value="Squater">Squater</option>
                                @endif
                                  
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Estimated loss or damage to property for victims disaster</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="estimated_loss_or_damage" value="{{ old('estimated_loss_or_damage' , $data->estimated_loss_or_damage)}}" @error('estimated_loss_or_damage') is-invalid @enderror/>
                                  @error('estimated_loss_or_damage')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">If client is disabled, indicate nature of disability</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="if_client_is_disabled" value="{{ old('if_client_is_disabled', $data->if_client_is_disabled)}}" @error('if_client_is_disabled') is-invalid @enderror />
                                  @error('if_client_is_disabled')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Has client sought outside assistance?</label>
                                <div class="col-sm-5">
                                <select class="form-control" id="if_yes" name="client_sought_outside_assistance" value="{{ old('client_sought_outside_assistance', $data->client_sought_outside_assistance)}}"  @error('client_sought_outside_assistance') is-invalid @enderror>
                              @error('client_sought_outside_assistance')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                                @if ($data->client_sought_outside_assistance == 'Yes')
                                <option selected value="Yes">Yes</option>
                                <option value="No">No</option>
                                @else
                                  <option  value="Yes">Yes</option>
                                <option selected value="No">No</option>
                                @endif
                               
                              </select>
                              </div>
                                <div class="row" id="if_yes_show" style="display: {{$data->client_sought_outside_assistance == 'Yes' ? 'block' : 'none'}}">
                                    <div class="col-md-12">
                                    <div class="form-group row">
                                      <div class="col-md-12">
                                        <div class="form-group row">
                                          <label class="col-sm-3 offset-1 col-form-label">If yes, indicate type of assistance received</label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="client_sought_outside_assistance_if_yes_type_of_assistance" value="{{ old('client_sought_outside_assistance_if_yes_type_of_assistance' , $data->client_sought_outside_assistance_if_yes_type_of_assistance)}}" @error('client_sought_outside_assistance_if_yes_type_of_assistance') is-invalid @enderror/>
                                            @error('client_sought_outside_assistance_if_yes_type_of_assistance')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                        </div>
                                      </div>
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label class="col-sm-3 offset-2 col-form-label">Source:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="client_sought_outside_assistance_source" value="{{ old('client_sought_outside_assistance_source' ,$data->client_sought_outside_assistance_source)}}" @error('client_sought_outside_assistance_source') is-invalid @enderror/>
                                          @error('client_sought_outside_assistance_source')
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Date:</label>
                                        <div class="col-sm-6">
                                          <input class="form-control" placeholder="dd/mm/yyyy" name="client_sought_outside_assistance_date" value="{{ old('client_sought_outside_assistance_date' , $data->client_sought_outside_assistance_date)}}" @error('client_sought_outside_assistance_date') is-invalid @enderror/>
                                          @error('client_sought_outside_assistance_date')
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">Source of referral:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="client_sought_outside_assistance_source_of_referral" value="{{ old('client_sought_outside_assistance_source_of_referral', $data->client_sought_outside_assistance_source_of_referral)}}" @error('client_sought_outside_assistance_source_of_referral') is-invalid @enderror/>
                                          @error('client_sought_outside_assistance_source_of_referral')
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-5 mb-3 mr-3 d-flex justify-content-end"> 
                          <button type="submit" class="btn btn-info mr-3"> Update </button>
                          <a href="{{route('show-family-planning' , $data->id)}}">         
                            <button type="button" class="btn btn-success "> Next </button>
                          </a> 
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection()
@section('scripts')
<script>
$(document).ready(function(){
    $('#if_yes').on('change', function() {
      var x = document.getElementById("if_yes_show");
       if (this.value === 'Yes'){
         x.style.display = "block";
    } else {
         x.style.display = "none";
    }
    });
});     
</script>
@endsection()