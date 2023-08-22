@extends('layout.main')
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div style="text-align: right;"> 
        </div>
        <h4 class="card-title mt-2 mb-4">Archived Account List</h4>
        <form>
             <div class=" col-12 mb-5 input-group rounded">
              <input type="search" name="search" id="search" value="{{ request('search')}}" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <span class="border-0 mx-2 d-flex align-items-center" id="search-addon">
                <button class="btn btn-primary btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="View"><i class="mdi mdi-magnify"></i>Search</button>
              </span>
            </div>
          </form>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name of Client</th>
                <th>Date of Registration</th>
                <th>Listed On</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($archives as $archive)
                <tr class="table-info">
                <input type="hidden" class="this_id" value="{{$archive->id}}">
                <td>{{$archive->name_of_client}}</td>
                <td>{{$archive->created_at->toDateString()}}</td>
                <td class="font-weight-bold">
                @if($archive->burial_status == 1)
                    * Burial
                @endif

                @if($archive->medical_status == 1)
                    * Medical
                @endif

                @if($archive->student_assistance_status == 1)
                    * Student
                @endif

                @if($archive->transportation_status == 1)
                    * Transportation
                @endif
                    </td>
                <td>
                  <ul class="list-inline m-0">
                    <li class="list-inline-item">
                      <button class="btn btn-success btn-sm rounded-0 serviceRestore" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-backup-restore"></i> Restore</button>
                    </li>
                    <li class="list-inline-item">
                      <button class="btn btn-danger btn-sm rounded-0 serviceDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i> Delete</button>
                    </li>
                  </ul>
                </td>
              </tr>
              @empty
                <tr class="table-info">
                <td colspan="4" class="text-center bg-warning">No Data Available</td>
              </tr>
           
              @endforelse
              
            </tbody>

          </table>
          <div class="mt-3 d-flex justify-content-center">
          {{$archives->links()}}
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

    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('.serviceDelete').click(function (e){
      e.preventDefault();

      var delete_this = $(this).closest("tr").find('.this_id').val();
      Swal.fire({
              title: 'Are you sure?',
              text: 'You cannot restore this once deleted!',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                var data ={
                  "_token": $('input[name=_token]').val(),
                  "id": delete_this,
                };
                $.ajax({
                  type: "DELETE",
                  url: '/delete-user/'+delete_this,
                  data: data,
                  success: function(response){
                     Swal.fire(
                      'Removed!',
                      'Account has been deleted.',
                      'success',
                      response.status,
                    ).then((result) => {
                      location.reload();
                    });
                    }
                });
              }
            })
          })
        });
</script>

<script>
  $(document).ready(function(){

    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('.serviceRestore').click(function (e){
      e.preventDefault();

      var restore_this = $(this).closest("tr").find('.this_id').val();
      Swal.fire({
              title: 'Are you sure you want to restore this?',
              icon: 'question',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, restore it!'
            }).then((result) => {
              if (result.isConfirmed) {
                var data ={
                  "_token": $('input[name=_token]').val(),
                  "id": restore_this,
                };
                $.ajax({
                  type: "DELETE",
                  url: '/restore-user/'+restore_this,
                  data: data,
                  success: function(response){
                     Swal.fire(
                      'Restored!',
                      'Account has been restored!.',
                      'success',
                      response.status,
                    ).then((result) => {
                      location.reload();
                    });
                    }
                });
              }
            })
          })
        });
</script>
@endsection()
