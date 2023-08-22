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
              <form method="post" action="{{route('general-intake-sheet-family-information-store')}}">
                @csrf
              <p class="card-description">IV - FAMILY INFORMATION</p>
              <div class="form-group fieldGroup">
                  <div class="input-group">
                      <div class="input-group-addon mb-5"> 
                          <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                      </div>
                     
                    <input type="hidden" class="form-control mb-5" name="identifying_information_id[]" value="{{$getThisId->id}}">
                  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6 col-form-label">Name by Birth Order (include client) WITH MIDDLE NAME</label>
                      <div class="col-6">
                        <input type="text" class="form-control" name="name[]" value="{{ old('name[]')}}" @error('name') is-invalid @enderror/>
                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6 col-form-label">Age</label>
                      <div class="col-6 ">
                        <input type="text" class="form-control" name="age[]" value="{{ old('age[]')}}" @error('age') is-invalid @enderror/>
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
                      <label class="col-6 col-form-label">Sex</label>
                      <div class="col-6">
                        <select class="form-control"name="sex[]" value="{{ old('sex[]')}}" @error('sex') is-invalid @enderror>
                        @error('sex')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                            <option>Select Here</option>
                          <option value="Female">Female</option>
                          <option value="Male">Male</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6  col-form-label">Date of Birth</label>
                      <div class="col-6 ">
                        <input class="form-control" placeholder="dd/mm/yyyy" name="date_of_birth[]" value="{{ old('date_of_birth[]')}}" @error('date_of_birth') is-invalid @enderror/>
                        @error('date_of_birth')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6  col-form-label">Civil Status</label>
                        <div class="col-6 ">
                          <select class="form-control" name="civil_status[]" value="{{ old('civil_status[]')}}" @error('civil_status') is-invalid @enderror/>
                          @error('civil_status')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6  col-form-label">Relation to Client</label>
                        <div class="col-6 ">
                          <input type="text" class="form-control" name="relattion_of_client[]" value="{{ old('relattion_of_client[]')}}" @error('relattion_of_client') is-invalid @enderror/>
                        @error('relattion_of_client')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Highest Educ. Attainment</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="highest_educational_attainment[]" value="{{ old('highest_educational_attainment[]')}}" @error('highest_educational_attainment') is-invalid @enderror/>
                        @error('highest_educational_attainment')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Skills</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="skills[]" value="{{ old('skills[]')}}" @error('skills') is-invalid @enderror/>
                          @error('skills')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Occupation</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="occupation[]" value="{{ old('occupation[]')}}" @error('occupation') is-invalid @enderror/>
                        @error('occupation')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Est. Monthly Income</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="estimated_monthly_income[]" value="{{ old('estimated_monthly_income[]')}}" @error('estimated_monthly_income') is-invalid @enderror/>
                        @error('estimated_monthly_income')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Source</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="source[]" value="{{ old('source[]')}}" @error('source') is-invalid @enderror/>
                        @error('source')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Health Status</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="health_status[]" value="{{ old('health_status[]')}}" @error('health_status') is-invalid @enderror/>
                        @error('health_status')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-3 col-form-label">Remarks</label>
                        <div class="col-9">
                          <textarea type="text" rows="6" class="form-control" name="remarks[]" value="{{ old('remarks[]')}}" @error('remarks') is-invalid @enderror></textarea>
                        @error('remarks')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
              
               <div class="row mt-5 mb-3 mr-3 d-flex justify-content-end">           
                  <button type="submit" class="btn btn-success "> Next </button>
                </div>
              
              </form>

                <!-- copy of input fields group -->
                <div class="form-group fieldGroupCopy" style="display: none;">
                  <hr class="mt-5 mb-5 text-danger">
                   <div class="input-group-addon mb-5"> 
                          <a href="javascript:void(0)" class="btn btn-danger remove"> Remove</a>
                  </div>
                     <input type="hidden" class="form-control mb-5" name="identifying_information_id[]" value="{{$getThisId->id}}"/>
                    <div class="input-group">
                      <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6 col-form-label">Name by Birth Order (include client) WITH MIDDLE NAME</label>
                      <div class="col-6">
                        <input type="text" class="form-control" name="name[]" value="{{ old('name[]')}}" @error('name') is-invalid @enderror/>
                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6 col-form-label">Age</label>
                      <div class="col-6 ">
                        <input type="text" class="form-control" name="age[]" value="{{ old('age[]')}}" @error('age') is-invalid @enderror/>
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
                      <label class="col-6 col-form-label">Sex</label>
                      <div class="col-6">
                        <select class="form-control"name="sex[]" value="{{ old('sex[]')}}" @error('sex') is-invalid @enderror>
                        @error('sex')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                            <option>Select Here</option>
                          <option value="Female">Female</option>
                          <option value="Male">Male</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6  col-form-label">Date of Birth</label>
                      <div class="col-6 ">
                        <input class="form-control" placeholder="dd/mm/yyyy" name="date_of_birth[]" value="{{ old('date_of_birth[]')}}" @error('date_of_birth') is-invalid @enderror/>
                        @error('date_of_birth')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6  col-form-label">Civil Status</label>
                        <div class="col-6 ">
                          <select class="form-control" name="civil_status[]" value="{{ old('civil_status[]')}}" @error('civil_status') is-invalid @enderror>
                          @error('civil_status')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6  col-form-label">Relation to Client</label>
                        <div class="col-6 ">
                          <input type="text" class="form-control" name="relattion_of_client[]" value="{{ old('relattion_of_client[]')}}" @error('relattion_of_client') is-invalid @enderror/>
                        @error('relattion_of_client')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Highest Educ. Attainment</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="highest_educational_attainment[]" value="{{ old('highest_educational_attainment[]')}}" @error('highest_educational_attainment') is-invalid @enderror/>
                        @error('highest_educational_attainment')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Skills</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="skills[]"value="{{ old('skills[]')}}" @error('skills') is-invalid @enderror/>
                          @error('skills')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Occupation</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="occupation[]" value="{{ old('occupation[]')}}" @error('occupation') is-invalid @enderror/>
                        @error('occupation')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Est. Monthly Income</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="estimated_monthly_income[]" value="{{ old('estimated_monthly_income[]')}}" @error('estimated_monthly_income') is-invalid @enderror/>
                        @error('estimated_monthly_income')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Source</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="source[]"  value="{{ old('source[]')}}" @error('source') is-invalid @enderror/>
                        @error('source')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Health Status</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="health_status[]"  value="{{ old('health_status[]')}}" @error('health_status') is-invalid @enderror/>
                        @error('health_status')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-3 col-form-label">Remarks</label>
                        <div class="col-9">
                          <textarea type="text" rows="6" class="form-control" name="remarks[]" value="{{ old('remarks[]')}}" @error('remarks') is-invalid @enderror></textarea>
                        @error('remarks')
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
        </div>
    </div>
  </div>
@endsection()
@section('scripts')
<script>
  $(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>
@endsection()