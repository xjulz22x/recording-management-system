@extends('layout.main')
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div style="text-align: right;"> 
        </div>
        <h4 class="card-title mt-2 mb-4">Transportation Assistance List</h4>
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
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($transportations as $transportation)
                <tr class="table-info">
                <input type="hidden" class="delete_id" value="{{$transportation->id}}">
                <td>{{$transportation->name_of_client}}</td>
                <td>{{$transportation->created_at->toDateString()}}</td>
                @if ($transportation->transportation_status == 1)
                <td class="text-success font-weight-bold">Active</td>
                @else
                  <td class="text-danger font-weight-bold">Pending</td>
                @endif
                <td>
                  <ul class="list-inline m-0">
                    <li class="list-inline-item">
                      <a href="{{route('show-identifying-information' ,$transportation->id )}}">
                      <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="View"><i class="mdi mdi-eye"></i> View</button>
                      </a>
                    </li>
                    
                    <li class="list-inline-item">
                      <button class="btn btn-danger btn-sm rounded-0 serviceDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-account-remove"></i> Remove</button>
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
          {{$transportations->links()}}
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

      var delete_this = $(this).closest("tr").find('.delete_id').val();
      Swal.fire({
              title: 'Are you sure you want to remove this?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, remove it!'
            }).then((result) => {
              if (result.isConfirmed) {
                var data ={
                  "_token": $('input[name=_token]').val(),
                  "id": delete_this,
                };
                $.ajax({
                  type: "DELETE",
                  url: '/burial-archive/'+delete_this,
                  data: data,
                  success: function(response){
                     Swal.fire(
                      'Removed!',
                      'Account has been archived.',
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
