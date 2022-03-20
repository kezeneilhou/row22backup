@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>REJECTED APPLICATIONS</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="alert alert-danger">
                Applications rejected by the respective Deputy Commissioner. <br>
                Please note the reason for rejection and resubmit your application.
              </div>
            </div>
          </div>

          <table class="table mt-4 table-striped table-sm" id="rejectedApplicationTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Application ID</th>
                <th>Licensee Name</th>
                <th>Tower Type</th>
                <th>Location</th>
                <th>District</th>
                <th>Reason for Rejection</th>
                <th>Application date</th>
                <th>Rejection date</th>
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
                <td>{{ $item->rejection_reason }}</td>
                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                <td>{{ Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}</td>
                <td>
                  <a href="{{route('rowTower.show', $item->txn_id )}}" class="btn btn-dark btn-sm"> View</a>
                  @if($item->app_status == 'APPROVED' && $item->pay_status =="PENDING")
                  <a href="{{route('payForm', $item->txn_id )}}" class="btn btn-danger btn-sm"> Make Payment</a>
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
