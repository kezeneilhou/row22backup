@extends('layouts.dashboard')
@section('content')
<div class="row">
    <x-user-sidebar/>

  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>Administrative Users</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="alert alert-primary">
                Administrative Users Registered in the RoW Portal. <br>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12  justify-content-right">
              <a href="{{ route('addUser') }}" class="btn btn-sm btn-dark"> <i class="fas fa-user"></i> Add New User </a>
            </div>
          </div> <br>

          <table class="table mt-4 table-striped" id="adminUserTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Licensee Name</th>
                <th>Authorized Person</th>
                <th>Regd. Email</th>
                <th>Contact No.</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if($adminUsers->count())
              @foreach($adminUsers as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->auth_person }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->auth_mobile }}</td>
                @if($item->status == "Submitted" || $item->status == "Rejected")
                <td style="color:red;">{{ $item->status }}</td>
                @else
                <td style="color:green;">{{ $item->status }}</td>
                @endif
                <td>
                  <a href="{{route('ditDash.show', $item->id )}}" class="btn btn-dark btn-sm"> View</a>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="6">No Data available</td>
              </tr>
              @endif
            </tbody>
          </table>

          </div>
        </div>
      </div>
    </div>
</div>

  @endsection
