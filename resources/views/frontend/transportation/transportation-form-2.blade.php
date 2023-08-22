@extends('layout.main')
@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
            
              <form method="post" action="{{route('burial-form-2')}}">
              <p class="card-description">IV - FAMILY INFORMATION</p>
                      
              <div class="form-group fieldGroup">
                  <div class="input-group">
                      <div class="input-group-addon"> 
                          <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                      </div>
                      <div class="row">
                  <div class="col-md-6">
                 
                      
                 

                    <div class="form-group row">
                      <label class="col-6 col-form-label">Name by Birth Order (include client) WITH MIDDLE NAME</label>
                      <div class="col-6">
                        <input type="text" class="form-control" name="name_birthorder" @error('name_birthorder') is-invalid @enderror/>
                        @error('name_birthorder')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6 col-form-label">Age</label>
                      <div class="col-6 ">
                        <input type="text" class="form-control" name="age_relative" @error('age_relative') is-invalid @enderror/>
                        @error('age_relative')
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
                        <select class="form-control"name="sex" @error('sex') is-invalid @enderror/>
                        @error('sex')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                        <input class="form-control" placeholder="dd/mm/yyyy" name="dob" @error('dob') is-invalid @enderror/>
                        @error('dob')
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
                          <select class="form-control" name="civil_status" @error('civil_status') is-invalid @enderror/>
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
                          <input type="text" class="form-control" name="client_relation" @error('client_relation') is-invalid @enderror/>
                        @error('client_relation')
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
                          <input type="text" class="form-control" name="highesteduc_attainment" @error('highesteduc_attainment') is-invalid @enderror/>
                        @error('highest_educ_attainment')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Skills</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="skills" @error('skills') is-invalid @enderror/>
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
                          <input type="text" class="form-control" name="relative_occupation" @error('relative_occupation') is-invalid @enderror/>
                        @error('relative_occupation')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Est. Monthly Income</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="income" @error('income') is-invalid @enderror/>
                        @error('income')
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
                          <input type="text" class="form-control" name="source_income" @error('source_income') is-invalid @enderror/>
                        @error('source_income')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Total Income</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="total_income" @error('total_income') is-invalid @enderror/>
                          @error('total_income')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Health Status</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="health_status" @error('health_status') is-invalid @enderror/>
                        @error('health_status')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Remarks</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="remarks" @error('remarks') is-invalid @enderror/>
                        @error('remarks')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
              
              <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
              
              </form>

                <!-- copy of input fields group -->



                <div class="form-group fieldGroupCopy" style="display: none;">
                <hr class="mt-5 mb-5 text-danger">
                    <div class="input-group">
                    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6 col-form-label">Name by Birth Order (include client) WITH MIDDLE NAME</label>
                      <div class="col-6">
                        <input type="text" class="form-control" name="name_birthorder" @error('name_birthorder') is-invalid @enderror/>
                        @error('name_birthorder')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-6 col-form-label">Age</label>
                      <div class="col-6 ">
                        <input type="text" class="form-control" name="age_relative" @error('age_relative') is-invalid @enderror/>
                        @error('age_relative')
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
                        <select class="form-control"name="sex" @error('sex') is-invalid @enderror/>
                        @error('sex')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                        <input class="form-control" placeholder="dd/mm/yyyy" name="dob" @error('dob') is-invalid @enderror/>
                        @error('dob')
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
                          <select class="form-control" name="civil_status" @error('civil_status') is-invalid @enderror/>
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
                          <input type="text" class="form-control" name="client_relation" @error('client_relation') is-invalid @enderror/>
                        @error('client_relation')
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
                          <input type="text" class="form-control" name="highesteduc_attainment" @error('highesteduc_attainment') is-invalid @enderror/>
                        @error('highest_educ_attainment')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Skills</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="skills" @error('skills') is-invalid @enderror/>
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
                          <input type="text" class="form-control" name="relative_occupation" @error('relative_occupation') is-invalid @enderror/>
                        @error('relative_occupation')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Est. Monthly Income</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="income" @error('income') is-invalid @enderror/>
                        @error('income')
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
                          <input type="text" class="form-control" name="source_income" @error('source_income') is-invalid @enderror/>
                        @error('source_income')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Total Income</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="total_income" @error('total_income') is-invalid @enderror/>
                          @error('total_income')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Health Status</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="health_status" @error('health_status') is-invalid @enderror/>
                        @error('health_status')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-6 col-form-label">Remarks</label>
                        <div class="col-6">
                          <input type="text" class="form-control" name="remarks" @error('remarks') is-invalid @enderror/>
                        @error('remarks')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                        <div class="input-group-addon"> 
                            <a href="javascript:void(0)" class="btn btn-danger remove"> Remove</a>
                        
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