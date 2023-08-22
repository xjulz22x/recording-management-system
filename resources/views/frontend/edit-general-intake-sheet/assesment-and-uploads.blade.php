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
              <form class="form-sample" method="POST" action="{{route('update-assesment' , $data->identifying_information_id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="identifying_information_id" value="{{$data->identifying_information_id}}">
                <p class="card-description mt-2 mb-5">V - PROBLEM PRESENTED</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleTextarea1">1. Problem presented by client <br><br></label>
                      <textarea type="text" rows="5" class="form-control" name="problem_presented_by_client" value="{{ old('problem_presented_by_client' , $data->problem_presented_by_client)}}" @error('problem_presented_by_client') is-invalid @enderror>{{$data->problem_presented_by_client}}</textarea>
                        @error('problem_presented_by_client')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleTextarea1">2. Initial assesment of the problem (initial information of worker about the problem and the cause(s)</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="5" name="initial_assesment_of_the_problem"  value="{{ old('initial_assesment_of_the_problem' , $data->initial_assesment_of_the_problem)}}" @error('initial_assesment_of_the_problem') is-invalid @enderror>{{$data->initial_assesment_of_the_problem}}</textarea>
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
                        @if ($data->to_improve_economic_condition_functioning == '1')
                             <input type="checkbox" class="form-check-input" name="to_improve_economic_condition_functioning" value="1" checked/> 1. To improve economic condition/functioning </label>
                        @else
                             <input type="checkbox" class="form-check-input" name="to_improve_economic_condition_functioning" value="1"/> 1. To improve economic condition/functioning </label>
                        @endif
                       
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                            @if ($data->to_improve_social_functioning == '1')
                                 <input type="checkbox" class="form-check-input" name="to_improve_social_functioning"  value="1" checked/> 2. To improve social functioning </label>
                            @else
                                 <input type="checkbox" class="form-check-input" name="to_improve_social_functioning"  value="1" /> 2. To improve social functioning </label>
                            @endif
                       
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                            @if ($data->to_overcome_presented_crisis == '1')
                                <input type="checkbox" class="form-check-input" name="to_overcome_presented_crisis"  value="1" checked/> 3. To overcome presented crisis </label>
                            @else
                                <input type="checkbox" class="form-check-input" name="to_overcome_presented_crisis"  value="1"/> 3. To overcome presented crisis </label>
                            @endif
                        
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                            @if ($data->to_correct_manifested_social_deviance == '1')
                                 <input type="checkbox" class="form-check-input" name="to_correct_manifested_social_deviance" value="1" checked/> 4. To correct manifested social deviance </label>
                            @else
                                 <input type="checkbox" class="form-check-input" name="to_correct_manifested_social_deviance" value="1"/> 4. To correct manifested social deviance </label>
                            @endif
                       
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                            @if ($data->to_develop_desired_attitudes_and_capabilities == '1')
                               <input type="checkbox" class="form-check-input" name="to_develop_desired_attitudes_and_capabilities" value="1" checked/> 5. To develop desired attitudes and capabilities </label> 
                            @else
                                <input type="checkbox" class="form-check-input" name="to_develop_desired_attitudes_and_capabilities" value="1"/> 5. To develop desired attitudes and capabilities </label>
                            @endif
                        
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                            @if ($data->to_improve_handicapping_condition == '1')
                                 <input type="checkbox" class="form-check-input" name="to_improve_handicapping_condition" value="1" checked/> 6. To improve handicapping condition </label>
                            @else
                                 <input type="checkbox" class="form-check-input" name="to_improve_handicapping_condition" value="1"/> 6. To improve handicapping condition </label>
                            @endif
                       
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                            @if ($data->other_rehabilitation_goals == '1')
                                <input type="checkbox" class="form-check-input" name="other_rehabilitation_goals" value="1" checked/> 7. Other rehabilitation goals (specify) </label>
                            @else
                                <input type="checkbox" class="form-check-input" name="other_rehabilitation_goals" value="1"/> 7. Other rehabilitation goals (specify) </label>
                            @endif
                        
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                          name="other_rehabilitation_goals_specify"
                          value="{{ old('other_rehabilitation_goals_specify' , $data->other_rehabilitation_goals_specify)}}"
                        >{{$data->other_rehabilitation_goals_specify}}</textarea>
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
                          value="{{ old('recommendation' , $data->recommendation)}}"
                           @error('recommendation') is-invalid @enderror>{{$data->recommendation}}</textarea>
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
                          value="{{ old('plan_of_action' , $data->plan_of_action)}}"
                          @error('plan_of_action') is-invalid @enderror>{{$data->plan_of_action}}</textarea>
                          @error('plan_of_action')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-5">
                  @if ($data->valid_id == null)
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary clickMe1" disabled type="button">VALID ID</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="custom-file form-control" id="inputGroupFile03" name="valid_id" value="{{ old('valid_id')}}">
                  </div>
                    @else
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forValidId" type="button">VALID ID</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="custom-file form-control" id="inputGroupFile03" disabled name="valid_id" value="{{ old('valid_id')}}">
                  </div>
                    @endif
                 
                </div>
                <div class="input-group mb-5">
                  @if ($data->certificate_of_indigency == null)
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button" disabled>CERTIFICATE OF INDIGENCY</button>
                  </div>
                  <div class="custom-file input-group">
                      <input type="file" class="form-control" id="inputGroupFile03" name="certificate_of_indigency" value="{{ old('certificate_of_indigency')}}">
                  </div>
                  @else
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forIndigency" type="button">CERTIFICATE OF INDIGENCY</button>
                  </div>
                  <div class="custom-file input-group">
                      <input type="file" class="form-control" id="inputGroupFile03" disabled name="certificate_of_indigency" value="{{ old('certificate_of_indigency')}}">
                  </div>
                  @endif
                  
                </div>

                <div class="input-group mb-5">
                  @if ($data->death_certificate == null)
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button" disabled>DEATH CERTIFICATE (with registry no.)</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="death_certificate" value="{{ old('death_certificate')}}">
                  </div>
                  @else
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forDCert" type="button">DEATH CERTIFICATE (with registry no.)</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" disabled name="death_certificate" value="{{ old('death_certificate')}}">
                  </div>
                  @endif
                  
                </div>
                
                <div class="input-group mb-5">
                  @if ($data->funeral_contract == null)
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary" type="button" disabled>FUNERAL CONTRACT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="funeral_contract" value="{{ old('funeral_contract')}}">
                  </div>
                  @else
                   <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forFuneral" type="button">FUNERAL CONTRACT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" disabled name="funeral_contract" value="{{ old('funeral_contract')}}">
                  </div> 
                  @endif
                  
                </div>

                <div class="input-group mb-5">
                  @if ($data->signature_of_client == null)
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forSignature" type="button" disabled>SIGNATURE OF CLIENT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="signature_of_client" value="{{ old('signature_of_client')}}">
                  </div>
                  @else
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forSignature" type="button">SIGNATURE OF CLIENT</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" disabled name="signature_of_client" value="{{ old('signature_of_client')}}">
                  </div>
                  @endif
                </div>

                <div class="input-group mb-5">
                  @if ($data->signature_of_worker == null)
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forSignatureWorker" type="button" disabled>SIGNATURE OF WORKER</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="signature_of_worker" value="{{ old('signature_of_worker')}}">
                  </div>
                  @else
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary forSignatureWorker" type="button">SIGNATURE OF WORKER</button>
                  </div>
                  <div class="custom-file input-group">
                    <input type="file" class="form-control" id="inputGroupFile03" name="signature_of_worker" disabled value="{{ old('signature_of_worker')}}">
                  </div>
                  @endif
                </div>

                <div class="row mt-5 mb-3 mr-3 d-flex justify-content-end"> 
                    <button type="submit" class="btn btn-info mr-3"> Update </button>
                  <a href="{{route('index')}}">         
                    <button type="button" class="btn btn-success "> Done </button>
                  </a> 
                </div>
              </form>
            </div>
            <div style="display: none">
            <img id="valid_id" src="{{asset('uploads/'.$data->valid_id)}}">
             <img id="signature_of_client" src="{{asset('uploads/'.$data->signature_of_client)}}">
             <img id="signature_of_worker" src="{{asset('uploads/'.$data->signature_of_worker)}}">
             <img id="certificate_of_indigency" src="{{asset('uploads/'.$data->certificate_of_indigency)}}">
             <img id="death_certificate" src="{{asset('uploads/'.$data->death_certificate)}}">
             <img id="funeral_contract" src="{{asset('uploads/'.$data->funeral_contract)}}">
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
    $('.forSignature').click(function (e){
      e.preventDefault();
      var url = document.getElementById('signature_of_client').getAttribute('src');
     Swal.fire({
      title: 'Signature Of Client!',
      imageUrl: url,
      imageWidth: '90%',
      imageHeight: '90%',
      imageAlt: 'Custom image',
      grow: 'fullscreen',
      })
      })
        });
</script>

<script>
  $(document).ready(function(){
    $('.forSignatureWorker').click(function (e){
      e.preventDefault();
      var url = document.getElementById('signature_of_worker').getAttribute('src');
     Swal.fire({
      title: 'Signature Of Worker!',
      imageUrl: url,
      imageWidth: '90%',
      imageHeight: '90%',
      imageAlt: 'Custom image',
      grow: 'fullscreen',
      })
      })
        });
</script>

<script>
  $(document).ready(function(){
    $('.forIndigency').click(function (e){
      e.preventDefault();
      var url = document.getElementById('certificate_of_indigency').getAttribute('src');
     Swal.fire({
      title: 'Certificate Of Indigency!',
      imageUrl: url,
      imageWidth: '90%',
      imageHeight: '90%',
      imageAlt: 'Custom image',
      grow: 'fullscreen',
      })
      })
        });
</script>

<script>
  $(document).ready(function(){
    $('.forValidId').click(function (e){
      e.preventDefault();
      var url = document.getElementById('valid_id').getAttribute('src');
     Swal.fire({
      title: 'Valid ID!',
      imageUrl: url,
      imageWidth: '90%',
      imageHeight: '90%',
      imageAlt: 'Custom image',
      grow: 'fullscreen',
      })
      })
        });
</script>


<script>
  $(document).ready(function(){
    $('.forFuneral').click(function (e){
      e.preventDefault();
      var url = document.getElementById('funeral_contract').getAttribute('src');
     Swal.fire({
      title: 'Funeral Contract!',
      imageUrl: url,
      imageWidth: '90%',
      imageHeight: '90%',
      imageAlt: 'Custom image',
      grow: 'fullscreen',
      })
      })
        });
</script>


<script>
  $(document).ready(function(){
    $('.forDCert').click(function (e){
      e.preventDefault();
      var url = document.getElementById('death_certificate').getAttribute('src');
     Swal.fire({
      title: 'Death Certificate!',
      imageUrl: url,
      imageWidth: '90%',
      imageHeight: '90%',
      imageAlt: 'Custom image',
      grow: 'fullscreen',
      })
      })
        });
</script>
@endsection()