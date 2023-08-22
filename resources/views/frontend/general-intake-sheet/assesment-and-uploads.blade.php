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
              <form class="form-sample" method="POST" action="{{route('general-intake-sheet-assesment-and-uploads-store')}}" enctype="multipart/form-data">
                @csrf
                <p class="card-description mt-2 mb-5">V - PROBLEM PRESENTED</p>
                <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" name="identifying_information_id" value="{{$getThisId->id}}">
                    <div class="form-group">
                      <label for="exampleTextarea1">1. Problem presented by client <br><br></label>
                      <textarea type="text" rows="5" class="form-control" name="problem_presented_by_client" value="{{ old('problem_presented_by_client')}}" @error('problem_presented_by_client') is-invalid @enderror></textarea>
                        @error('problem_presented_by_client')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleTextarea1">2. Initial assesment of the problem (initial information of worker about the problem and the cause(s)</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="5" name="initial_assesment_of_the_problem"  value="{{ old('initial_assesment_of_the_problem')}}" @error('initial_assesment_of_the_problem') is-invalid @enderror></textarea>
                        @error('initial_assesment_of_the_problem')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-sample">
                  <p class="card-description">VI - REHABILITATION GOAL (as treatment objectives)</p>
                  <div class="col-md-6 offset-1">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="to_improve_economic_condition_functioning" value="1"/> 1. To improve economic condition/functioning </label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="to_improve_social_functioning"  value="1" /> 2. To improve social functioning </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="to_overcome_presented_crisis"  value="1"/> 3. To overcome presented crisis </label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="to_correct_manifested_social_deviance" value="1"/> 4. To correct manifested social deviance </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="to_develop_desired_attitudes_and_capabilities" value="1"/> 5. To develop desired attitudes and capabilities </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="to_improve_handicapping_condition" value="1"/> 6. To improve handicapping condition </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="other_rehabilitation_goals" value="1"/> 7. Other rehabilitation goals (specify) </label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                          name="other_rehabilitation_goals_specify"
                          value="{{ old('other_rehabilitation_goals_specify')}}"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-sample">
                  <div class="row">
                    <div class="col-md-6">
                      <p class="card-description">VII - RECOMMENDATION</p>
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                          name="recommendation"
                          value="{{ old('recommendation')}}"
                           @error('recommendation') is-invalid @enderror></textarea>
                          @error('recommendation')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <p class="card-description">VIII - PLAN OF ACTION</p>
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                          name="plan_of_action" 
                          value="{{ old('plan_of_action')}}"
                          @error('plan_of_action') is-invalid @enderror></textarea>
                          @error('plan_of_action')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">VALID ID</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="custom-file form-control" id="inputGroupFile03" name="valid_id" value="{{ old('valid_id')}}">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">CERTIFICATE OF INDIGENCY</button>
                  </div>
                  <div class="custom-file input-group">
                      <input type="file" class="form-control" id="inputGroupFile03" name="certificate_of_indigency" value="{{ old('certificate_of_indigency')}}">
                    </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">DEATH CERTIFICATE (with registry no.)</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="death_certificate" value="{{ old('death_certificate')}}">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">FUNERAL CONTRACT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="funeral_contract" value="{{ old('funeral_contract')}}">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">SIGNATURE OF CLIENT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="signature_of_client" value="{{ old('signature_of_client')}}">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">SIGNATURE OF WORKER</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="signature_of_worker" value="{{ old('signature_of_worker')}}">
                  </div>
                </div>
                <div class="mt-5 mb-3 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
@endsection()