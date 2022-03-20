@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-3">
    <x-generate-report-sidebar/>
  </div>
  <div class="col-md-9">
    <x-card-with-header :cardTitle=$currentStatus>
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered dataTable">
          <thead>
            <tr>
              <th>Sl.No</th>
              <th>Name of the Applicant + Address</th>
              <th>Number and date of License issued by DoT and period of validity</th>
              <th>Date of receipt of application</th>
              <th>Particulars of the land/ building of which permission is sought</th>
              <th>Particulars of documents received with applicant</th>
              <th>Details of fee and charges deposited with No. and date of challan</th>
              <th>Number and date of permission granted and validity period</th>
              <th>Application / Payment Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($datas as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->rowUser->name}}</td>
              <td>
                {{$item->rowUser->dot_reg_no}} <br>
                <b>Reg Date:</b> {{Carbon\Carbon::parse($item->rowUser->dot_reg_date)->format('d-m-Y')}} <br>
                <b>Expiry Date:</b>{{Carbon\Carbon::parse($item->rowUser->dot_reg_expiry)->format('d-m-Y')}} <br>
              </td>
              <td>{{Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</td>
              <td>{{$item->rowTower->nature_tower}}</td>
              <td>{{$item->rowTower->nature_tower}}</td>
              <td>{{$item->rowTower->nature_tower}}</td>
              <td>{{$item->tower_id}} / {{Carbon\Carbon::parse($item->validity)->format('d-m-Y')}}</td>
              <td>{{$item->app_status}} / {{$item->pay_status}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </x-card-with-header>
  </div>
</div>


@if(Session::has('applicationApproved'))
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire(
	  'Success',
	  'Application has been approved.',
	  'success'
		);
	})
</script>
@endif
@if(Session::has('applicationRejected'))
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire(
	  'Rejected',
	  'Application has been rejected.',
	  'error'
		);
	})
</script>
@endif
@endsection
