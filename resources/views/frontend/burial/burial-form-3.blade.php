@extends('layout.main')
@section('content')
  <div class="main-panel">
    <div class="content-wrapper">       
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <form class="form-sample" action="{{route('burial-form-2')}}">
                <p class="card-description mt-2 mb-5">V - PROBLEM PRESENTED</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleTextarea1">1. Problem presented by client <br><br></label>
                      <textarea type="text" rows="5" class="form-control" name="practicing_family_planning_if_yes" @error('practicing_family_planning_if_yes') is-invalid @enderror></textarea>
                        @error('problem')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleTextarea1">2. Initial assesment of the problem (initial information of worker about the problem and the cause(s)</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="5" name="assesment" @error('assesment') is-invalid @enderror></textarea>
                        @error('assesment')
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
                        <input type="checkbox" class="form-check-input" checked name="imp_iconomic" /> 1. To improve economic condition/functioning </label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked name="imp_social" /> 2. To improve social functioning </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked name="ovr_crisis" /> 3. To overcome presented crisis </label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked name="crr_social"/> 4. To correct manifested social deviance </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked name="dev_attitudes"/> 5. To develop desired attitudes and capabilities </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked name="imp_handicap"/> 6. To improve handicapping condition </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked name="other_goals"/> 7. Other rehabilitation goals (specify) </label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                          name="specify"
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
                          name="recommendation" @error('recommendation') is-invalid @enderror></textarea>
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
                          name="plan_action" @error('plan_action') is-invalid @enderror></textarea>
                          @error('plan_action')
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
                    <input type="file" class="custom-file form-control" id="inputGroupFile03">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">CERTIFICATE OF INDIGENCY</button>
                  </div>
                  <div class="custom-file input-group">
                      <input type="file" class="form-control" id="inputGroupFile03">
                    </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">DEATH CERTIFICATE (with registry no.)</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">FUNERAL CONTRACT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">SIGNATURE OF CLIENT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03">
                  </div>
                </div>
                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button">SIGNATURE OF WORKER</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03">
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