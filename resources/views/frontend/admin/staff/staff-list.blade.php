@extends('layout.main')
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div style="text-align: right;"> 
          <a href="{{route('add-staff')}}">
            <button type="button" class="btn btn-success btn-icon-text">
            <i class="mdi mdi-account-plus"></i> Add New Staff
            </button>
          </a>
        </div>
        <h4 class="card-title">Staff List</h4>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name of Staff</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($staffs as $staff)
                <tr class="table-info">
                <input type="hidden" class="delete_id" value="{{$staff->id}}">
                <td>{{$staff->first_name. ' ' . $staff->middle_name. ' ' . $staff->last_name}}</td>
                <td>{{$staff->phone_number}}</td>
                <td>{{$staff->email}}</td>
                <td>
                  <ul class="list-inline m-0">
                    <li class="list-inline-item">
                      <a href="{{route('staff-edit', $staff->id)}}">
                      <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="View"><i class="mdi mdi-eye"></i>View</button>
                      </a>
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

      var delete_this = $(this).closest("tr").find('.delete_id').val();
      Swal.fire({
              title: 'Are you sure?',
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
                  url: '/staff-delete/'+delete_this,
                  data: data,
                  success: function(response){
                     Swal.fire(
                      'Deleted!',
                      'Staff has been deleted.',
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
