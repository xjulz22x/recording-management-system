@extends('layout.main')
@section('content')
<div class="main-panel">
          <div class="content-wrapper pb-0">
            <form>
             <div class=" col-12 mb-5 input-group rounded">
              <input type="search" name="search" id="search" value="{{ request('search')}}" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <span class="border-0 mx-2 d-flex align-items-center" id="search-addon">
                <button class="btn btn-primary btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="View"><i class="mdi mdi-magnify"></i>Search</button>
              </span>
            </div>
            </form>
            <div class="page-header">
              <h2 class="text-align-center">
                AICS Recording Management System of St. Magdalena Sorsogon
              </h2>
            </div>
            <div class="mb-5">
              <h6> Hello , {{Auth::user()->first_name. ' '.Auth::user()->last_name}}
              </h6>
            </div>
          <div class="table-responsive mt-3" >
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name of Client</th>
                <th>Date of Registration</th>
                <th>Status</th>
                <th>Listed On</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($results as $result)
                <tr class="table-info">
                <td>{{$result->name_of_client}}</td>
                <td>{{$result->created_at->toDateString()}}</td>
                
                @if ($result->archive_status == 1)
                  <td class="text-danger font-weight-bold">Removed</td>
                @else
                  <td class="text-success font-weight-bold">Active</td>
                @endif
                <td class="font-weight-bold">
                @if($result->burial_status == 1)
                    * Burial
                @endif

                @if($result->medical_status == 1)
                    * Medical
                @endif

                @if($result->student_assistance_status == 1)
                    * Student
                @endif

                @if($result->transportation_status == 1)
                    * Transportation
                @endif
                    </td>
                <td>
                  <a href="{{route('show-identifying-information' ,$result->id )}}">
                    <button class="btn btn-primary btn-sm rounded-0" type="button" title="View"><i class="mdi mdi-eye"></i> View</button>
                  </a>
                </td>
              </tr>
              @empty
              
                <tr class="table-info">
                <td colspan="5" class="text-center bg-warning">No Data Available</td>
              </tr>
            
              @endforelse
            </tbody>
          </table>
          <div class="mt-3 d-flex justify-content-center">
          {{$results->links()}}
          </div>
        </div>
            <div class="row mt-5">
              <div class="col-xl-12 col-lg-12 ">
                <div class="row">
                  <div class="col-xl-3 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Burial</p>
                            <h2 class="text-white">{{$countBurial}}
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-grave-stone bg-inverse-icon-warning"></i>
                        </div>
                        <h6 class="text-white">{{$countBurial}} Total Registered</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Medical</p>
                            <h2 class="text-white">{{$countMedical}}
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi  mdi-medical-bag bg-inverse-icon-danger"></i>
                        </div>
                        <h6 class="text-white">{{$countMedical}} Total Registered</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Student Assitance</p>
                            <h2 class="text-white"> {{$countStudentAssistance}}
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-hand-heart bg-inverse-icon-primary"></i>
                        </div>
                        <h6 class="text-white">{{$countStudentAssistance}} Total Registered</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-success">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Transportation</p>
                            <h2 class="text-white"> {{$countTransportation}}
                          </div>
                          <i class="card-icon-indicator mdi mdi-bus bg-inverse-icon-success"></i>
                        </div>
                        <h6 class="text-white">{{$countTransportation}} Total Registered</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
         
      
      
            <div class="row">
              <div class="col-xl-12 dashboard d-flex justify-content-space-between flex-wrap">
                <div class="col-xl-6 col-md-6 col-sm-12 content-card">
                  <div class="sample">
                      <div class="container">
                        <div class="card">
                          <div class="slide slide1">
                              <div class="content">
                                  <div class="content-title">
                                      <h3>
                                        VISION
                                      </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="slide slide2">
                              <div class="content">
                                  <h3>
                                      MSWDO VISION
                                  </h3>
                                  <p>A quiet and prosperous community, with sufficient skills and knowledge to
                                     respond to the needs of each citizen, recognizing and respecting the rights of 
                                     each and safe from any type of violence.</p>
                              </div>
                          </div>
                        </div>
                      </div>     
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12 content-card">
                  <div class="sample">
                      <div class="container">
                        <div class="card">
                          <div class="slide slide1">
                              <div class="content">
                                  <div class="content-title">
                                      <h3>
                                        MISSION
                                      </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="slide slide2">
                              <div class="content">
                                  <h3>
                                      MSWDO MISSION
                                  </h3>
                                  <p class="description">Be able to provide competence social services to every citizen of Sta. Magdalena so that
                                     they can be helped to meet any problem and need through service or program:
                                <ol>
                                  <li>AICS</li>
                                  <li>Program for youth</li>
                                  <li>Program for women</li>
                                  <li>Program for the disabled</li>
                                  <li>Program for the elderly</li>
                                  <li>Programs for family and community</li>
                                  <li>Program for disaster victims</li>
                                </ol>
                              </p>
                              </div>
                          </div>
                        </div>
                      </div>     
                  </div>
                </div>
              </div>
            </div>
       

          </div>
          <footer class="footer">
            <!-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
            </div> -->
          </footer>
        </div>
@endsection()
@section('scripts')
<script>
$(document).ready(function(){
    $('#search').on('change', function() {
      var x = document.getElementById("dash-table");
       if (this.value === ''){
         x.style.display = "none";
    } else {
         x.style.display = "block";
    }
    });
});     
</script>
@endsection()