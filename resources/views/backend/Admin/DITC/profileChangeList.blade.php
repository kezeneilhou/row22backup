@extends('layouts.dashboard')
@section('content')
<div class="row">
  <x-user-sidebar/>

  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>Users Registered</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="alert alert-primary">
                Users profile change request. <br>
              </div>
            </div>
          </div>

          <table class="table mt-4 table-striped" id="userList">
            <thead>
              <tr>
                <th>#</th>
                <th>User ID</th>
                <th>Message</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user_id }}</td>
                <td>{{ $item->message }}</td>
                <td>{{ $item->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
