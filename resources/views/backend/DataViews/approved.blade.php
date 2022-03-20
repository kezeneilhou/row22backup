@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>APPROVED/AWAITING PAYMENT APPLICATIONS</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="alert alert-primary">
                Applications approved by the respective Deputy Commissioner. <br>
                Please make payments below to finalize the application and download your certificate.
              </div>
            </div>
          </div>
          <table class="table mt-4 table-striped table-sm table-responsive" id="approvedApplicationTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Application ID</th>
                <th>Licensee Name</th>
                <th>Tower Type</th>
                <th>Location</th>
                <th>District</th>
                <th>Application date</th>
                <th>NOC Approval date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @if($datas->count())
              @foreach($datas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->txn_id }}</td>
                <td>{{ $item->rowUser->name }}</td>
                <td>{{ $item->tower_type }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->district }}</td>
                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                <td>{{ Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}</td>
                <td>
                  @if($item->pay_status == "SUBMITTED")
                  <button type="button" name="button" class="btn btn-dark btn-sm">Awaiting payment confirmation</button>
                  @elseif($item->pay_status == "PAID")
                  <button type="button" name="button">PAID</button>
                  @else
                  <button type="button" name="button" class="btn btn-dark btn-sm">Payment not made</button>
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
          <div class="text-right">
            @if(Auth::user()->role == null)
            <a href="{{route('paymentPage')}}" class="btn btn-danger">Go to Payment Page</a>
            @endif
          </div>
          </div>
        </div>
      </div>
    </div>
</div>

  @endsection
