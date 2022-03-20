@extends('layouts.dashboard')
@section('content')
<div class="row">
    <x-user-sidebar/>

  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>Pending Account Activation</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="alert alert-primary">
                Accounts Awaiting Activation in the RoW Portal. <br>
                Status Submitted are Pending User Registration Requests
              </div>
            </div>
          </div>

          <table class="table mt-4 table-striped" id="pendingUserTable">
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
              @if($data->count())
              @foreach($data as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->auth_person }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->auth_mobile }}</td>
                @if($item->status == "PENDING" || $item->status == "REJECTED")
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
