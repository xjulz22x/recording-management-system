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
                            <form class="form-sample" method="POST" action="{{route('general-intake-sheet-family-planning-store')}}">
                                @csrf    
                                <p class="card-description">II - FAMILY PLANNING</p>
                                <div class="row">
                                <div class="col-md-12">
                                     <div class="col-md-12">
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                             <input type="hidden" class="form-check-input" name="identifying_information_id" value="{{$getThisId->id}}" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Are you practicing Family Planning?</label>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                        <div class="col-sm-9">
                                            <select class="form-control" name="practicing_family_planning" id="yes_no" value="{{ old('practicing_family_planning')}}" @error('practicing_family_planning') is-invalid @enderror>
                                            @error('practicing_family_planning')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <option>Select Here</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="if_yes_show" style="display: none">
                                        <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">If yes, what method/s</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" rows="5" class="form-control" name="practicing_family_planning_if_yes" value="{{ old('practicing_family_planning_if_yes')}}" @error('practicing_family_planning_if_yes') is-invalid @enderror></textarea>
                                            @error('mepracticing_family_planning_if_yestpracticing_family_planning_if_yeshod')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="if_no_show" style="display: none">
                                        <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">If no, why?</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" rows="5" class="form-control" name="practicing_family_planning_if_no" value="{{ old('practicing_family_planning_if_no')}}" @error('practicing_family_planning_if_no') is-invalid @enderror></textarea>
                                            @error('practicing_family_planning_if_no')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="from-group-row">
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nature of Employment:</label>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                        <div class="col-sm-9">
                                            <select class="form-control" name="nature_of_employment" value="{{ old('nature_of_employment')}}" @error('nature_of_employment') is-invalid @enderror>
                                            @error('nature_of_employment')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <option>Select Here</option>
                                            <option value="Casual">Casual</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Temporary">Temporary</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-12 col-form-label">Social Security System/GSIS/Private Insurance</label>
                                      <div class="col-sm-12 offset-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name="sss"  class="form-check-input" value="1"/> SSS </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name="gsis" class="form-check-input"  value="1"/> GSIS  </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name="others" class="form-check-input"  value="1"/> Others </label>
                                        </div>
                                    
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                    <label class="col-12 col-form-label">Describe housing and other living condition</label>
                                    <label class="col-3 offset-1 col-form-label">a. Housing</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="housing" value="{{ old('housing')}}" @error('housing') is-invalid @enderror/>
                                        @error('housing')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">b. Use and source of potable water</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="use_and_source_of_portable_water" value="{{ old('use_and_source_of_portable_water')}}" @error('use_and_source_of_portable_water') is-invalid @enderror/>
                                        @error('use_and_source_of_portable_water')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">c. Light</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="light" value="{{ old('light')}}"  @error('light') is-invalid @enderror/>
                                        @error('light')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">d. Toilet</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="toilet" value="{{ old('toilet')}}" @error('toilet') is-invalid @enderror/>
                                        @error('toilet')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">e. Kitchen</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="kitchen" value="{{ old('kitchen')}}" @error('kitchen') is-invalid @enderror/>
                                        @error('kitchen')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                    <label class="col-12 col-form-label">Describe the social/culture activity of the client</label>
                                    <label class="col-3 offset-1 col-form-label">a. Recreational activity</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="recreactional_activity" value="{{ old('recreactional_activity')}}" @error('recreactional_activity') is-invalid @enderror/>
                                        @error('recreactional_activity')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">b. Religious/spiritual activity</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="religious_spiritual_activity"value="{{ old('religious_spiritual_activity')}}"  @error('religious_spiritual_activity') is-invalid @enderror/>
                                        @error('religious_spiritual_activity')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                    <label class="col-12 col-form-label">Describe the self functioning of client</label>
                                    <label class="col-3 offset-1 col-form-label">a. Physical needs</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="physical_needs" value="{{ old('physical_needs')}}" @error('physical_needs') is-invalid @enderror/>
                                        @error('physical_needs')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">b. Grooming nad personal hygiene</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="groom_and_personal_hygiene" value="{{ old('groom_and_personal_hygiene')}}"@error('groom_and_personal_hygiene') is-invalid @enderror/>
                                        @error('groom_and_personal_hygiene')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">c. Problem solving</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="problem_solving" value="{{ old('problem_solving')}}"@error('problem_solving') is-invalid @enderror/>
                                        @error('problem_solving')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">d. Decision making</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="decision_making" value="{{ old('decision_making')}}" @error('decision_making') is-invalid @enderror/>
                                        @error('decision_making')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                    <label class="col-12 col-form-label">Describe the roles platform by the client in relation to the following</label>
                                    <label class="col-3 offset-1 col-form-label">a. His family</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="his_family" value="{{ old('his_family')}}" @error('his_family') is-invalid @enderror/>
                                        @error('his_family')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-3 offset-1 col-form-label">b. Community</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="community" value="{{ old('community')}}" @error('community') is-invalid @enderror/>
                                        @error('community')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row mt-5 mb-3 mr-3 d-flex justify-content-end">           
                                    <button type="submit" class="btn btn-success "> Next </button>
                                </div>
                            </form>
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
    $('#yes_no').on('change', function() {
      var x = document.getElementById("if_yes_show");
      var y = document.getElementById("if_no_show");
    if (this.value === 'Yes'){
        x.style.display = "block";
        y.style.display = "none";
    } else if(this.value === 'No') {
        y.style.display = "block";
        x.style.display = "none";
    } else{
        y.style.display = "none";
        x.style.display = "none";
    }
    });
});     
</script>
@endsection()