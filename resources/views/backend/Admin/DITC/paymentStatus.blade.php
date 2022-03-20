@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-2">
    <div class="row">

      <div class="col-md-12">
        <section class="card card-featured-left card-featured-primary mb-3">
          <div class="card-body">
            <div class="widget-summary">
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Total Invoices</h4>
                  <p class="mb-0">Generated</p>
                  <div class="info">
                    <strong class="amount">{{$invoiceCount}}</strong>
                  </div>
                </div>
                <div class="summary-footer">
                  <a class="text-muted text-uppercase" href="{{route('showInvoiceDIT')}}">(view all)</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>


      <div class="col-md-12">
        <section class="card card-featured-left card-featured-primary mb-3">
          <div class="card-body">
            <div class="widget-summary">
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Pending Payments</h4>
                  <p class="mb-0">Awaiting Approval</p>
                  <div class="info">
                    <strong class="amount">{{$pendingPaymentCount}}</strong>
                  </div>
                </div>
                <div class="summary-footer">
                  <a class="text-muted text-uppercase" href="{{route('pendingUser')}}">(view all)</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="col-md-12">
        <section class="card card-featured-left card-featured-primary mb-3">
          <div class="card-body">
            <div class="widget-summary">
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Payment Complete</h4>
                  <p class="mb-0">Details</p>
                  <div class="info">
                    <strong class="amount">{{$paymentCompleteCount}}</strong>
                  </div>
                </div>
                <div class="summary-footer">
                  <a class="text-muted text-uppercase" href="{{route('adminUser')}}">(view all)</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
</div>

  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>Payment Information</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">

          <table class="table mt-4 table-striped">
            <tbody>
              <tr>
                <td><b>Challan No.</b></td>
                <td>{{ $data->challan_no }}</td>
                <td><b>Licensee Name:</b></td>
                <td>{{ $data->rowUser->name}}</td>
              <tr>
                <td><b>Total Annual Charges.</b></td>
                <td>{{ $data->total_annual_charge }}</td>
                <td><b>Total One Time Charges.</b></td>
                <td>{{ $data->total_ot_charge }}</td>
              </tr>
              <tr>
                <td><b>Challan Date.</b></td>
                <td>{{ Carbon\Carbon::parse($data->challan_date)->format('d-m-Y') }}</td>
                <td><b>Challan Expiry Date.</b></td>
                <td>{{ Carbon\Carbon::parse($data->challan_expiry_date)->format('d-m-Y') }}</td>
              </tr>
              <tr>
                <td><b>Payment Date.</b></td>
                <td>{{ Carbon\Carbon::parse($data->payment_date)->format('d-m-Y') }}</td>
                <td><b>Payment UTR No.</b></td>
                <td>{{ $data->payment_id }}</td>
              </tr>
              <tr>
                <td colspan="4">Payment Proof <a href="{{Storage::url($data->payment_proof)}}" target="_blank"> View</a> </td>
              </tr>

              <tr>
                <td colspan="4"> <a href="{{ route('paymentUpdate', $data->challan_no )}}" class="btn btn-sm btn-primary">APPROVE</a> <a href="{{route('login')}}" class="btn btn-sm btn-dark">CANCEL</a> </td>
              </tr>
            </tbody>
          </table>

          </div>
        </div>
      </div>
    </div>
</div>

  @endsection
