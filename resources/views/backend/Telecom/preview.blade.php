@extends('layouts.dashboard')
@section('content')
<div class="row">

  <div class="col-md-8 mb-8 mb-xl-0">
    <div class="card shadow">
      <header class="card-header">
        <!-- <div class="card-actions">
          <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
          <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
        </div> -->
        <h2 class="card-title">VIEW - Application for Right of Way (RoW) for Mobile Towers in Nagaland</h2>
        <p class="card-subtitle">Application submitted to District Nodal Officer, {{ $data->district }}, on {{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</p>
      </header>
      <div class="card-body">
        @if($data->app_status == "REJECTED")
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger">
              <h5>Application Rejected on {{ Carbon\Carbon::parse($data->rejection_date)->format('d-m-Y') }}, with the reason being <b>"{{ $data->rejection_reason }}"</b></h5>
            </div>
          </div>
        </div>
        @elseif($data->app_status == "APPROVED")
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success">
              <h5>Application Approved on {{ Carbon\Carbon::parse($data->approved_date)->format('d-m-Y') }}.</h5>
            </div>
          </div>
        </div>
        @endif
        <table class="table table-striped table-sm">
          <tr>
            <td colspan="4" class="text-danger"><b>Basic Details</b></td>
          </tr>
          <tr>
            <td><b>Application Type :</b> {{$data->application_type}}</td>
            <td><b>License No.:</b> {{ $data->rowProfile->dot_reg_no }}</td>
            <td><b>License Expiry Date : </b>{{ Carbon\Carbon::parse($data->rowProfile->dot_reg_expiry)->format('d-m-Y') }}</td>
            <td><b>Licensee Name:</b> {{ $data->rowProfile->licensee_name}}</td>
          </tr>
          <tr>
            <td><b>Authorised Person's Name:</b> {{ $data->rowUser->name}}</td>
            <td><b>Authorised Person's Desigation:</b> {{ $data->rowUser->designation}}</td>
            <td><b>Authorised Person's Email:</b> {{ $data->rowUser->email}}</td>
            <td><b>Authorised Person's Mobile:</b> {{ $data->rowUser->mobile}}</td>
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
            <td>Tower Funding Source:</b> {{ $data->funding_source }}</td>
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
              @if($data->tower_env == "OP")
              OPEN PLOT
              @else
              BUILDING
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
        </table>

        @if($data->app_status == null)
          <div class="form">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Accepted" id="declaration" name="declaration_status">
              <label class="form-check-label" for="flexCheckDefualt">
                <b>Declarations:</b>
                <ol>
                  <li>I hereby declare that I have carefully read the policy. I fully comply with term and conditions therein.</li>
                  <li>I understand this application, if found incomplete in any respect and/or if found with conditional compliance or not accompanied with the processing fee, shall be summarily rejected.</li>
                  <li>I understand that processing fee is non-refundable irrespective of whether or not the permission is granted to me.</li>
                  <li>I declare that if at any time any averments made or information furnished by me is found incorrect or false, my application shall be liable to be rejected and any permission granted on the basis of such information/documents shall be liable to be cancelled / rejected.</li>
                </ol>
              </label>
            </div>
            <div class="row">
              <div class="col-md-12 text-right">
                <span>
                  <a href="{{ route('login') }}" class="btn btn-dark btn-sm">Cancel</a>
                  <a href="{{route('rowTower.edit', $data->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form class="d-inline" action="{{route('rowTower.update',$data->id)}}" method="POST" id="submitForm">
                    @csrf
                    <input type="hidden" name="final_submit" value="YES">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="app_id" value="{{$data->app_id}}">
                    <button type="submit" class="btn btn-success btn-sm" id="submitBtn" disabled>Submit</button>
                  </form>
                </span>
              </div>
            </div>
          </div>
          @endif
          </div>
      </div>
    </div>

		<div class="col-md-3">
			<div class="card shadow">
        <header class="card-header">
          <!-- <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
          </div> -->
          <h2 class="card-title">Documents Uploaded</h2>
        </header>
				<div class="card-body">
          <div class="alert alert-success">
            <p><b>License Copy</b> : <a href="{{Storage::url($data->rowProfile->dot_license)}}" target="_blank">View File</a></p>
            @if($data->upload_location_plan)
            <p><b>Location Plan</b> : <a href="{{Storage::url($data->upload_location_plan)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_technical_design)
            <p><b>Technical Design</b> : <a href="{{Storage::url($data->upload_technical_design)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_ss_certificate)
            <p><b>Structural Stability</b> : <a href="{{Storage::url($data->upload_ss_certificate)}}" target="_blank">View File</a></p>
            @endif
            @if($data->upload_soil_certificate)
            <p><b>Soil Test Certificate</b> : <a href="{{Storage::url($data->upload_soil_certificate)}}" target="_blank">View File</a></p>
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
				</div>
			</div>
		</div>
  </div>
<script type="text/javascript">
$('#submitBtn').click(function(e){
  e.preventDefault();
    Swal.fire({
    title: 'Submit Application?',
    text: 'You will not be allowed to make any further changes.',
    showCancelButton: true,
    confirmButtonText: 'Proceed',
  }).then((result) => {
    if (result.isConfirmed) {
      $('#submitForm').submit();
    }
  });
});
</script>

<script>
  $('#declaration').click(function(){
    if ($('#declaration').is(':checked'))
    {
      $('#submitBtn').prop("disabled", false);
    } else {
      $('#submitBtn').prop("disabled", true);
    }
  });
</script>
@endsection
