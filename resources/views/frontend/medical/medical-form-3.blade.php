@extends('layout.main')
@section('content')
  <div class="main-panel">
    <div class="content-wrapper">       
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <form class="form-sample action="{{route('burial-form-2')}}"">
                <p class="card-description">V - PROBLEM PRESENTED</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleTextarea1">1. Problem presented by client <br><br></label>
                      <textarea
                        class="form-control"
                        id="exampleTextarea1"
                        rows="4"
                        name="plan_action" @error('plan_action') is-invalid @enderror/>
                          @error('plan_action')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleTextarea1">2. Initial assesment of the problem (initial information  of worker about the problem and the cause(s)</label>
                      <textarea
                        class="form-control"
                        id="exampleTextarea1"
                        rows="4"
                        name="plan_action" @error('plan_action') is-invalid @enderror/>
                          @error('plan_action')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </textarea>
                    </div>
                  </div>
                </div>
                <div class="form-sample">
                  <p class="card-description">VI - REHABILITATION GOAL (as treatment objectives)</p>
                  <div class="col-md-6 offset-1">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> 1. To improve economic condition/functioning </label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> 2. To improve social functioning </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> 3. To overcome presented crisis </label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> 4. To correct manifested social deviance </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> 5. To develop desired attitudes and capabilities </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> 6. To improve handicapping condition </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> 7. Other rehabilitation goals (specify) </label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
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
                          name="plan_action" @error('plan_action') is-invalid @enderror/>
                          @error('plan_action')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <p class="card-description">VIII - PLAN OF ACTION</p>
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                          name="plan_action" @error('plan_action') is-invalid @enderror/>
                          @error('plan_action')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>VALID ID</label>
                  <input type="file" name="img[]" class="file-upload-default" />
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="medical_validID" @error('medical_validID') is-invalid @enderror/>
                    @error('medical_validID')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>CERTIFICATE OF INDIGENCY</label>
                  <input type="file" name="img[]" class="file-upload-default" />
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="medical_indigency" @error('medical_indigency') is-invalid @enderror/>
                    @error('medical_indigency')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>MEDICAL CERTIFICATE/MEDICAL ABSTRACT</label>
                  <input type="file" name="img[]" class="file-upload-default" />
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="medical_certificate" @error('medical_certificate') is-invalid @enderror/>
                    @error('medical_certificate')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>RESETA/LABORATORY REQUEST</label>
                  <input type="file" name="img[]" class="file-upload-default" />
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="medical_reseta" @error('medical_reseta') is-invalid @enderror/>
                    @error('medical_reseta')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>SIGNATURE OF CLIENT</label>
                  <input type="file" name="img[]" class="file-upload-default" />
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="medical_clientsig" @error('medical_clientsig') is-invalid @enderror/>
                    @error('medical_clientsig')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>SIGNATURE OF WORKER</label>
                  <input type="file" name="img[]" class="file-upload-default" />
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="medical_workersig" @error('medical_workersig') is-invalid @enderror/>
                    @error('medical_workersig')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                    </span>
                  </div>
                </div>
                <a href="{{route('burial-form-2')}}">
                  <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
@endsection()