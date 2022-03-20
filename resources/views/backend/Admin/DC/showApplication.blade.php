@extends('layouts.dashboard')
@section('content')
<div class="row">

  <div class="col-md-8 mb-8 mb-xl-0" id="print-content">
    <div class="card shadow">
      <header class="card-header">
        <h2 class="card-title">Permission for Installation of Mobile Towers in {{ $data->district }}, Nagaland</h2>
          <p class="card-subtitle">Application submitted to District Nodal Officer, {{ $data->district }}, on {{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</p><br>
          <p>
          <a href="{{route('appFormPdf',$data->id)}}" class="btn btn-sm btn-dark"> Download Application</a>
          <span><a href="{{ route('downloadAppZip', $data->id) }}" name="button" class="btn btn-sm btn-dark"> <i class="fa fa-download" aria-hidden="true"></i>  Download Supporting Documents</a> </span>
          <span><a href="{{ route('downloadUserZip', $data->id) }}" name="button" class="btn btn-sm btn-dark"> <i class="fa fa-download" aria-hidden="true"></i>  Download Licensee Document</a> </span>
          </p>
      </header>
      <div class="card-body">
        @if($data->app_status == "Rejected")
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger">
              <h5>Application Rejected on {{ Carbon\Carbon::parse($data->rejection_date)->format('d-m-Y') }}, with the reason being <b>"{{ $data->rejection_reason }}"</b></h5>
            </div>
          </div>
        </div>
        @elseif($data->app_status == "Approved")
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success">
              <h5>Application Approved on {{ Carbon\Carbon::parse($data->approval_date)->format('d-m-Y') }}.</h5>
            </div>
          </div>
        </div>
        @endif
          <table class="table table-striped table-sm table-responsive">
            <thead>
            </thead>
            <tbody>
              <tr>
                <td colspan="4" class="text-danger"><b>Application Details</b></td>
              </tr>
              <tr>
                <td><b>Application Type :</b> {{$data->application_type}}</td>
                <td><b>License No.:</b> {{$data->rowUser->dot_reg_no}}</td>
                <td><b>License Expiry Date : </b>{{ Carbon\Carbon::parse($data->license_expiry)->format('d-m-Y') }}</td>
                <td><b>Licensee Name:</b> {{ $data->rowUser->name}}</td>
              </tr>
              <tr>
                <td><b>Authorised Person's Name:</b> {{ $data->rowUser->auth_person}}</td>
                <td><b>Authorised Person's Desigation:</b> {{ $data->rowUser->auth_designation}}</td>
                <td><b>Authorised Person's Email:</b> {{ $data->rowUser->email }}</td>
                <td><b>Authorised Person's Mobile:</b> {{ $data->rowUser->auth_mobile}}</td>
              </tr>
              <tr>
                <td><b>Nature of Tower:</b> {{ $data->nature_tower}}</td>
                <td><b>Tower Address:</b> {{ $data->city_town_village}}, {{ $data->block}}, {{ $data->district}}</td>
                <td><b>Tower Latitude:</b> {{ $data->tower_lat}}</td>
                <td><b>Tower Longitude:</b> {{ $data->tower_long}}</td>
              </tr>
              <tr>
                <td><b>Tower Area jurisdiction:</b> {{ $data->tower_location }}</td>
                <td><b>Tower Land/Structure belongs to:</b> {{ $data->land_owner }}</td>
                <td><b>Tower Land/Structure belongs to:</b> {{ $data->land_owner }}</td>
                <td><b>Tower Funding Source:</b> {{ $data->funding_source }}</td>
              </tr>
              <tr>
                <td colspan="4" class="text-danger"><b>Tower Details</b></td>
              </tr>
              @if($data->nature_tower == 'GBT')
              <tr>
                <td><b>Is Forest land?:</b> {{ $data->is_forest_land }}</td>
                <td><b>Land Size:</b> {{ $data->land_size }}</td>
                <td><b>Land Area (in sqft): </b>{{ $data->land_area }}</td>
                <td><b>Tower Address:</b> {{ $data->plot_no }}, {{ $data->road_street }}, {{ $data->ward_colony}}</td>
              </tr>
              @else
              <tr>
                <td><b>Name of Building/Structure:</b> {{ $data->structure_name }}</td>
                <td><b>No. of Stories or Height:</b> {{ $data->structure_height }}</td>
                <td><b>Area of Building / Structure:</b> {{ $data->structure_area }}</td>
                <td><b>Building / Structure Address:</b> {{ $data->structure_address }}</td>
              </tr>
              <tr>
                <td colspan="2"><b>Owner's Name:</b> {{ $data->structure_owner_name}}</td>
                <td colspan="2"><b>Owner's Address:</b> {{ $data->structure_owner_address}}</td>
              </tr>
              @endif

              <tr>
                <td colspan="4" class="text-danger"><b>General Details</b></td>
              </tr>
              <tr>
                <td><b>Tower Height (in ft):</b> {{ $data->tower_height }}</td>
                <td><b>Tower Weight (in kgs):</b> {{ $data->tower_weight }}</td>
                <td><b>Tower Mounting Type:</b> {{ $data->tower_mounting }}</td>
                <td><b>No. of Antennae:</b> {{ $data->tower_antennae }}</td>
              </tr>
              <tr>
                <td colspan="2"><b>Whether on an open plot/building? :</b>
                  @if($data->tower_env == 'OP')
                    Open Plot
                  @else
                    Building
                  @endif
                </td>
                <td colspan="2"><b>Area Required :</b> {{ $data->tower_area }}</td>
              </tr>
              @if($data->work_mode != null)
              <tr>
                <td><b>Mode of and time duration for execution of work:</b> {{ $data->work_mode}}</td>
                <td><b>Inconvenience likely to be caused to the public:</b> {{ $data->work_inconvenience}}</td>
                <td><b>Measures proposed to be taken to ensure public safety:</b> {{ $data->work_public_safety}}</td>
                <td><b>Any other matter specified by DoT or State Govt.: </b>{{ $data->other_matter_dot}}</td>
              </tr>
              @endif
            </tbody>
          </table>

        <!-- checking if application form is already processed -->
        @if($data->app_status == "PENDING")
          <div class="form bg-primary text-white approve-block">
            <div class="row">
              <div class="col-md-12 ml-3 mr-3">
                <p><h5>Kindly Scrutinize the application Form in detail and Approve/Reject the application.</h5></p>
                <p><h5> For all Rejections - the "Reason for Rejection" must be specified.</h5></p>
                <span>
                  <form class="d-inline" action="{{route('dcDash.store')}}" method="POST" id="approvalForm">
                    @csrf
                    <div class="row">
                      <div class="col-md-4 form-group">
                        <label for="app_status">Application Status</label>
                        <select class="form-control" id="app_status" name="app_status">
                          <option selected disabled>-- Select --</option>
                          <option value="APPROVED">Approved</option>
                          <option value="REJECTED">Rejected</option>
                        </select>
                      </div>

                      <div class="col-md-4 form-group d-none" id="reasonReject" style="border-top:none; padding-top:0;">
                        <label for="app_status">Reason for Rejection</label>
                        <input type="text" class="form-control" name="rejection_reason" id="rejection_reason"/>
                      </div>

                      <div class="col-md-4 pt-4">
                        <input type="hidden" name="txnid" value="{{$data->txn_id}}">
                        <button type="submit" class="btn btn-dark" id="submitBtn1">Submit</button>
                      </div>
                    </div>
                  </form>
                </span>
              </div>
            </div>
          </div>
          <div class="form bg-primary text-white d-none upload-block">
            <div class="row">
              <div class="col-md-12 ml-3 mr-3">
                <p><h5>Please upload scanned copy of the signed and sealed Permit.</h5></p>
                <span>
                  <form class="d-inline" action="{{route('dcDash.update',$data->id)}}" method="POST" id="approvalForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                      <div class="form-group">
                        <label for="">Upload file (only pdf, jpg, jpeg accepted)</label>
                        <input type="file" name="verification_file" class="form-control" required>
                      </div>

                      <div class="col-md-4 pt-4">
                        <input type="hidden" name="txnid" value="{{$data->txn_id}}">
                        <button type="submit" class="btn btn-dark" id="submitBtn2">Submit</button>
                      </div>
                    </div>
                  </form>
                </span>
              </div>
            </div>
          </div>
          @elseif($data->app_status == "PERMIT UPLOAD")
          <div class="form bg-primary text-white">
            <div class="row">
              <div class="col-md-12 ml-3 mr-3">
                <p><h5>Please upload scanned copy of the signed and sealed Permit.</h5></p>
                <span>
                  <form class="d-inline" action="{{route('dcDash.update',$data->id)}}" method="POST" id="approvalForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                      <div class="form-group">
                        <label for="">Upload file (only pdf, jpg, jpeg accepted)</label>
                        <input type="file" name="verification_file" class="form-control" required>
                      </div>

                      <div class="col-md-4 pt-4">
                        <input type="hidden" name="txnid" value="{{$data->txn_id}}">
                        <button type="submit" class="btn btn-dark" id="submitBtn">Submit</button>
                      </div>
                    </div>
                  </form>
                </span>
              </div>
            </div>
          </div>
          @endif
          </div>
        </form>
      </div>
    </div>

		<div class="col-md-3">
			<div class="card shadow">
        <header class="card-header">

          <h2 class="card-title">Uploaded Documents</h2>
          <p class="card-subtitle">Click to view</p>


        </header>
				<div class="card-body">
          <div class="alert alert-success">
            <p><b>License Copy</b> : <a href="{{Storage::url($data->rowUser->dot_license)}}" target="_blank">View File</a></p>
            @if($data->upload_location_plan)
            <p><b>Location Plan</b> : <a href="{{Storage::url($data->upload_location_plan)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_technical_design)
            <p><b>Technical Design</b> : <a href="{{Storage::url($data->upload_technical_design)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_ss_certificate)
            <p><b>Structural Stability</b> : <a href="{{Storage::url($data->upload_ss_certificate)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_fire_certificate)
            <p><b>NOC from Fire Dept</b> : <a href="{{Storage::url($data->upload_fire_certificate)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_sacfa_clearance)
            <p><b>SACFA Clearance</b> : <a href="{{Storage::url($data->upload_sacfa_clearance)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_envionment_clearance)
            <p><b>Copy of clearance from State Environment & Forest Department</b> : <a href="{{Storage::url($data->upload_envionment_clearance)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_arai_certificate)
            <p><b>Copy of ARAI Certificate for DG Sets</b> : <a href="{{Storage::url($data->upload_arai_certificate)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_ownership_doc)
            <p><b>Ownership document of Building / Site</b> : <a href="{{Storage::url($data->upload_ownership_doc)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_lease_doc)
            <p><b>Lease Document</b> : <a href="{{Storage::url($data->upload_lease_doc)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_ipreg_cert)
            <p><b>Copy of relevant License/Infrastructure Provider Registration Certificate issued by DoT</b> : <a href="{{Storage::url($data->upload_ipreg_cert)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_building_noc)
            <p><b>Copy of NOC from Building Owner</b> : <a href="{{Storage::url($data->upload_building_noc)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_govt_consent)
            <p><b>Consent of authority of land belonging to Central Govt./State Govt./ PSU</b> : <a href="{{Storage::url($data->upload_govt_consent)}}" target="_blank">View File</a></p>
            @endif
          </div>
					<hr>
				</div>
			</div>
		</div>
  </div>

<!-- custom scripts scripts   -->
<script type="text/javascript">
  $('#submitBtn1').click(function(){
    $('.approve-block').addClass('d-none');
    $('.upload-block').removeClass('d-none');
  });
</script>
<script>
$('#app_status').change(function(){
  var status = $('#app_status').val();
  if(status == 'REJECTED')
  {
    $('#reasonReject').removeClass('d-none');
    $("#rejection_reason").prop('required',true);
  } else {
    $('#reasonReject').addClass('d-none');
    $("#rejection_reason").prop('required',false);
  }
});
$('#submitBtn').click(function(e){
  e.preventDefault();
    Swal.fire({
    title: 'Please confirm',
    text: 'Are you sure you want to mark the application as '+$('#app_status').val()+'?',
    showCancelButton: true,
    confirmButtonText: 'Proceed',
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      $('#approvalForm').submit();
    }
  });
});
</script>

<script type="text/javascript">
  function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      w=window.open();
      w.document.write(printContents);
      w.print();
      w.close();
  }
</script>

@if(Session::has('permitUploaded'))
<script type="text/javascript">
 $(document).ready(function(){
   Swal.fire(
   'Success',
   'Permit Uploaded succesfully.',
   'success'
   );
 })
</script>
@endif
@if(Session::has('applicationApproved'))
<script type="text/javascript">
 $(document).ready(function(){
   Swal.fire(
   'Success',
   'Application approved. Please sign and seal the downloaded permit with the Nodal Authorities signature and seal and upload the file.',
   'success'
   );
 })
</script>
@endif
@if(Session::has('applicationRejected'))
<script type="text/javascript">
 $(document).ready(function(){
   Swal.fire(
   'Success',
   'Application has been rejected.',
   'success'
   );
 })
</script>
@endif


@endsection
