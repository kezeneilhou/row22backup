@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>PERMISSION ISSUED</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="alert alert-primary">
                Active Applications. Please check the dashboard regularly for updates on renewal or expiry warnings.
              </div>
            </div>
          </div>

          <table class="table mt-4 table-striped table-responsive table-sm" id="activeApplicationTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Application ID</th>
                <th>Licensee Name</th>
                <th>Tower Type</th>
                <th>Location</th>
                <th>District</th>
                <th>Application date</th>
                <th>Payment Date</th>
                <th>NOC Validity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if($datas->count())
              @foreach($datas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td><a href="{{route('rowTower.show', $item->txn_id )}}">{{ $item->txn_id }}</a></td>
                <td>{{ $item->rowUser->name }}</td>
                <td>{{ $item->tower_type }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->district }}</td>
                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                <td>{{ Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}</td>
                <td>{{ Carbon\Carbon::parse($item->validity)->format('d-m-Y') }}</td>
                <td>
                  <a href="{{Storage::url($item->verification_file)}}" class="btn btn-success btn-sm" title="Download Permit" target="_blank"> <i class="fa fa-download" aria-hidden="true"></i></a>
                  <span><a href="{{route('rowTower.show', $item->txn_id )}}" class="btn btn-dark btn-sm" title="View Application"> <i class="fa fa-eye" aria-hidden="true"></i></a></span>
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
