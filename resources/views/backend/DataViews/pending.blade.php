@extends('layouts.dashboard')
@section('content')
<div class="row">

  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>PENDING APPLICATIONS</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="alert alert-primary">
                Applications under review by the respective Deputy Commissioner Office. <br>
                You will be notified via your registered email when your applicaton has been either approved or rejected.
              </div>
            </div>
          </div>

          <table class="table mt-4 table-striped table-sm" id="pendingApplicationTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Application ID</th>
                <th>Licensee Name</th>
                <th>Tower Type</th>
                <th>Location</th>
                <th>District</th>
                <th>Application date</th>
                <th>No.of Days Pending</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if($datas->count())
              @foreach($datas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->txn_id }}</td>
                <td>{{ Auth::user()->name }}</td>
                <td>{{ $item->tower_type }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->district }}</td>
                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                <td>
                  <?php
                  $now = Carbon\Carbon::now();
                  $days = Carbon\Carbon::parse($item->created_at)->diffInDays($now);
                  echo $days;
                  ?>
                </td>
                <td>{{ $item->app_status }}</td>
                <td>
                  @if(Auth::user()->role == 'DC')
                  <a href="{{route('dcDash.show', $item->id )}}" class="btn btn-dark btn-sm"> View</a>
                  @else
                  <a href="{{route('rowTower.show', $item->app_id )}}" class="btn btn-dark btn-sm"> View</a>
                  @endif
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
