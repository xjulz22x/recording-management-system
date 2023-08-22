@extends('layout.main')
@section('content')
  <div class="main-panel">
    <div class="content-wrapper">       
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">MEDICAL FORM</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Case No.</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="case_no" @error('case_no') is-invalid @enderror/>
                        @error('case_no')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <label class="col-sm-3 col-form-label">New/Old:</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="new_old" @error('new_old') is-invalid @enderror/>
                      @error('new_old')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date</label>
                    <div class="col-sm-4">
                      <input class="form-control" placeholder="dd/mm/yyyy" name="date" @error('date') is-invalid @enderror/>
                        @error('date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                </div>
              </div>
              <form class="form-sample action="{{route('burial-form-2')}}"">
                <p class="card-description">I - IDENTIFYING INFORMATION</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name of Client</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="client_name" @error('client_name') is-invalid @enderror/>
                        @error('client_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Contact</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="contact" @error('contact') is-invalid @enderror/>
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
                        <input type="text" class="form-control" name="birthplace" @error('birthplace') is-invalid @enderror/>
                        @error('birthplace')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Date of Birth</label>
                      <div class="col-sm-9">
                        <input class="form-control" placeholder="dd/mm/yyyy" name="birthdate" @error('birthdate') is-invalid @enderror/>
                        @error('birthdate')
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
                        <select class="form-control" name="address"  @error('address') is-invalid @enderror/>
                        @error('address')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                          <option value="San Francisco (Barangay I Poblacion)">San Francisco (Barangay I Poblacion)</option>
                          <option value="Mother of Perpetual (Barangay II Poblacion)">Mother of Perpetual (Barangay II Poblacion)</option>
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
                          <option value="San Sebastian (Bigo)">San Sebastian (Bigo)</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Age</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="age" @error('age') is-invalid @enderror/>
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
                            <input type="text" class="form-control" name="religion" @error('religion') is-invalid @enderror/>
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
                            <input type="text" class="form-control" name="occupation" @error('occupation') is-invalid @enderror/>
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
                            <input type="text" class="form-control" name="educ_attainment" @error('educ_attainment') is-invalid @enderror/>
                            @error('educ_attainment')
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
                            <input type="text" class="form-control" name="relative_name" @error('relative_name') is-invalid @enderror/>
                            @error('relative_name')
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
                            <input type="text" class="form-control" name="relative_address" @error('relative_address') is-invalid @enderror/>
                            @error('relative_address')
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
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ISY" id="clientRadios1" value="" checked /> ISY </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="OSY" id="clientRadios2" value="option2" /> OSY </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Housing: Indicate by checkmark whether he/she is a house owner</label>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="housingRadios" id="housingRadios1" value="" checked /> HOUSE OWNER </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="housingRadios" id="housingRadios2" value="option2" /> HOUSE SHARER </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="housingRadios" id="housingRadios3" value="option3" /> HOUSE RENTER </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="housingRadios" id="housingRadios4" value="option4" /> SQUATER </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Estimated loss or damage to property for victims disaster</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="est_loss" @error('est_loss') is-invalid @enderror/>
                            @error('est_loss')
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
                            <input type="text" class="form-control" name="disability" @error('disability') is-invalid @enderror />
                            @error('disability')
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
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="assistanceRadios" id="assistanceRadios1" value="" checked /> YES </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="assistanceRadios" id="assistanceRadios2" value="option2" /> NO </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 offset-1 col-form-label">If yes, indicate type of assistance received</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="asst_received" @error('asst_received') is-invalid @enderror/>
                                @error('asst_received')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 offset-2 col-form-label">Source:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="source" @error('source') is-invalid @enderror/>
                                @error('source')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Date:</label>
                              <div class="col-sm-6">
                                <input class="form-control" placeholder="dd/mm/yyyy" name="asst_received_date" @error('asst_received_date') is-invalid @enderror/>
                                @error('asst_received_date')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 offset-1 col-form-label">Source of referral:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="referral_source" @error('referral_source') is-invalid @enderror/>
                                @error('referral_source')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <form class="form-sample">
                    <p class="card-description">II - FAMILY PLANNING</p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Are you practicing Family Planning?</label>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="famplanningRadios" id="famplanningRadios1" value="" checked /> YES </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="famplanningRadios" id="famplanningRadios2" value="option2" /> NO </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 offset-1 col-form-label">If yes, what method/s</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="method" @error('method') is-invalid @enderror/>
                                @error('method')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 offset-1 col-form-label">If no, why?</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="no_why" @error('no_why') is-invalid @enderror/>
                                @error('no_why')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-12 col-form-label">Nature of Employment:</label>
                          <div class="col-12 offset-1">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="employmentRadios" id="employmentRadios1" value="" checked /> Casual </label>
                            </div>
                          </div>
                          <div class="col-12 offset-1">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="employmentRadios" id="employmentRadios2" value="option2" /> Permanent </label>
                            </div>
                          </div>
                          <div class="col-12 offset-1">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="employmentRadios" id="employmentRadios3" value="option3" /> Temporary </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-12 col-form-label">Social Security System/GSIS/Private Insurance</label>
                          <div class="col-12 offset-1">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="insuranceRadios" id="insuranceRadios1" value="" checked /> SSS </label>
                            </div>
                          </div>
                          <div class="col-12 offset-1">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="insuranceRadios" id="insuranceRadios2" value="option2" /> GSIS </label>
                            </div>
                          </div>
                          <div class="col-12 offset-1">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="insuranceRadios" id="insuranceRadios3" value="option3" /> Others </label>
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
                            <input type="text" class="form-control" name="housing" @error('housing') is-invalid @enderror/>
                            @error('housing')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">b. Use and source of potable water</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="potable_water" @error('potable_water') is-invalid @enderror/>
                            @error('potable_water')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">c. Light</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="light" @error('light') is-invalid @enderror/>
                            @error('light')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">d. Toilet</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="toilet" @error('toilet') is-invalid @enderror/>
                            @error('toilet')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">e. Kitchen</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="kitchen" @error('kitchen') is-invalid @enderror/>
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
                            <input type="text" class="form-control" name="recreational_act" @error('recreational_act') is-invalid @enderror/>
                            @error('recreational_act')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">b. Religious/spiritual activity</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="religious_act" @error('religious_act') is-invalid @enderror/>
                            @error('religious_act')
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
                            <input type="text" class="form-control" name="physical_needs" @error('physical_needs') is-invalid @enderror/>
                            @error('physical_needs')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">b. Grooming nad personal hygiene</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="grooming" @error('grooming') is-invalid @enderror/>
                            @error('grooming')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">c. Problem solving</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="problem_solving" @error('problem_solving') is-invalid @enderror/>
                            @error('problem_solving')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">d. Decision making</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="decision_making" @error('decision_making') is-invalid @enderror/>
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
                            <input type="text" class="form-control" name="his_family" @error('his_family') is-invalid @enderror/>
                            @error('his_family')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <label class="col-3 offset-1 col-form-label">b. Community</label>
                          <div class="col-6">
                            <input type="text" class="form-control" name="community" @error('community') is-invalid @enderror/>
                            @error('community')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
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
  </div>
@endsection()