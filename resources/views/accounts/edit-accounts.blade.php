@extends('layout.master')
@section('title')
  Edit List of Student Accounts
@endsection

@section('content')
<br />
<div class="card-body">
  <div style="padding: 0px 25px 0px 25px;" class="table-responsive">
    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="15%">Name</th>
          <th width="10%">UC ID</th>
          <th width="10%">Role</th>
          <th width="15%">Email</th>
          <th width="10%">Verification Status</th>
          <th width="10%">Additional Information</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->uc_id }}</td>
          <td>{{ $user->role }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->verification }}</td>
          <td>
            <a href="{{ url('/edit-account/'.$user->id) }}">&nbsp;<button>Edit</button></a>
            <a onclick="return confirm('Are you sure you want to verify this user?')" href="{{ url('/verify-account/'.$user->id) }}">&nbsp;<button>Verify</button></a>
            <a onclick="return confirm('Are you sure you want to delete this user?')" href="{{ url('/delete-account/'.$user->id) }}">&nbsp;<button>Delete</button></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
