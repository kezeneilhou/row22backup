@extends('layouts.userForm')
@section('form')
<style media="screen">
	.divider{
		background: #0088cc;
		padding-top:14px;
		padding-bottom:14px;
		color:#fff;
		margin-bottom:20px;
	}
</style>
<form class="" action="{{route('rowTower.store')}}" method="post" enctype="multipart/form-data" id="applicationForm">
	@csrf
  <div class="row">
		<div class="col-md-12">
			@if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
		</div>
    <div class="col-md-12 divider">
      <b>Basic Details:</b>
    </div>

			<x-form-input-blank label="License Number" type="text" name="license_no" col="3" value="{{ $profile->dot_reg_no }}" readonly required/>
			<x-form-input-blank label="License Expiry" type="text" name="license_expiry" col="3" value="{{ Carbon\Carbon::parse($profile->dot_reg_expiry)->format('d-m-Y') }}" readonly required/>
			<x-form-input-blank label="Licensee Name" type="text" name="licensee_name" col="6" value="{{ $profile->licensee_name }}" readonly required/>
			<x-form-input-blank label="Authorized Person Name" type="text" name="auth_person_name" col="3" value="{{Auth::User()->name }}" readonly required />
			<x-form-input-blank label="Authorized Person Designation" type="text" name="auth_person_designation" col="3" value="{{ Auth::User()->designation }}" readonly required/>
			<x-form-mobile label="Authorized Person Mobile" type="text" name="auth_person_mobile" col="3" value="{{ Auth::User()->mobile }}" readonly required/>
			<x-form-input-blank label="Authorized Person Email" type="email" name="auth_person_email" col="3" value="{{ Auth::User()->email }}" readonly required/>
			@if(Auth::User()->licensee_type == "TSP")
			<x-form-input-blank type="text" label="Organization Type" name="organization_type" col="3" value="Telecom Service Provider" required readonly />
			@else
				<x-form-input-blank type="text" label="Organization Type" name="organization_type" col="3" value="Infrastructure Provider" required readonly />
			@endif
			<x-form-select label="Tower Location falls under?" name="tower_location" col="3" required>
				<option value="" selected>Select</option>
				<option value="MC">Municipal Council</option>
				<option value="TC">Town Committee</option>
				<option value="VC">Village Council</option>
			</x-form-select>
			<x-form-select label="Nature of Tower" name="nature_tower" col="3" required>
				<option value="" selected>Select</option>
				<option value="RTT">Roof Top Tower</option>
				<option value="GBT">Ground Based Tower</option>
			</x-form-select>
			<div class="col-md-12 divider mt-4">
				<b>Tower Details:</b>
			</div>
			@livewire('row-district')

			<!-- GBT Fields -->
			<x-form-select label="Is Forest Land?" name="is_forest_land" col="3 d-none GBT">
				<option value="" selected>Select</option>
				<option value="YES">Yes</option>
				<option value="NO">No</option>
			</x-form-select>
			<x-form-input label="Land Size (LxB in ft)" type="text" name="land_size" col="3 d-none GBT" maxlength="20" oninput="validate(this);"/>
			<x-form-input label="Land Area (in sq ft)" type="text" name="land_area" col="3 d-none GBT" maxlength="10" oninput="validate(this);"/>
			<x-form-input label="Plot Number" type="text" name="plot_no" col="3 d-none GBT"/>
			<x-form-input label="Road/Street Name" type="text" name="road_street" col="3 d-none GBT"/>
			<x-form-input label="Ward/Colony Name" type="text" name="ward_colony" col="3 d-none GBT"/>



			<!-- RTT Fields -->
			<x-form-input label="Name of Building/Structure" type="text" name="structure_name" col="3 d-none RTT" />
			<x-form-input label="Height of Building/Structure (in ft)" type="text" name="structure_height" col="3 d-none RTT" maxlength="10"  oninput="validate(this);"/>
			<x-form-input label="Area of Building/Structure (in sq ft)" type="text" name="structure_area" col="3 d-none RTT" maxlength="10"  oninput="validate(this);"/>
			<x-form-input label="Address of Building/Structure" type="text" name="structure_address" col="3 d-none RTT" />
			<x-form-input label="Building/Structure Owner Name" type="text" name="structure_owner_name" col="3 d-none RTT" />
			<x-form-input label="Building/Structure Owner Address" type="text" name="structure_owner_address" col="3 d-none RTT" />

			<div class="col-md-12 divider mt-4">
				<b>General Info:</b>
			</div>
			<x-form-select label="Land / Structure belongs to" name="land_owner" col="3" required>
				<option value="" selected>Select</option>
				<option value="GOVT">Government</option>
				<option value="PVT">Private</option>
			</x-form-select>
			<x-form-select label="Source of funding" name="funding_source" col="3" required>
				<option value="" selected>Select</option>
				<option value="GOVT">Government Aided</option>
				<option value="USOF">USOF</option>
				<option value="OTHER">Others</option>
			</x-form-select>
			<x-form-input label="Tower Height (in ft)" type="text" name="tower_height" col="3" maxlength="10" oninput="validate(this);" required/>
			<x-form-input label="Tower Weight (in KG)" type="text" name="tower_weight" col="3" maxlength="10" oninput="validate(this);" required/>
			<x-form-select label="Pole/Wall Mounted" name="tower_mounting" col="3" required>
				<option value="" selected>Select</option>
				<option value="Pole">Pole</option>
				<option value="Wall">Wall Mounted</option>
			</x-form-select>
			<x-form-input label="No. of Antennae" type="text" name="tower_antennae" col="3" maxlength="4" oninput="validate(this);" required/>
			<x-form-select label="Whether on open plot/building" name="tower_env" col="3" required>
				<option value="" selected>Select</option>
				<option value="OP">Open Plot</option>
				<option value="BU">Building</option>
			</x-form-select>
			<x-form-input label="Area Required" type="text" name="tower_area" col="3" maxlength="10" oninput="validate(this);" required/>
			<x-form-input label="Mode of and time duration for execution of work" type="text" name="work_mode" col="4" required/>
			<x-form-input label="Inconvenience likely to be caused to the public" type="text" name="work_inconvenience" col="4" required/>
			<x-form-input label="Measures proposed to be taken to ensure public safety" type="text" name="work_public_safety" col="4" required/>
			<x-form-input label="Any other matter specified by DoT or State Govt." type="text" name="other_matter_dot" col="4" required/>


    <div class="col-md-12 mt-4 divider mt-4">
      <b>Uploads Section</b>
    </div>
    <div class="col-md-12 mt-3">
      <span style="color:red"><b>Info : </b> Accepted file formats - PDF, JPEG, JPG <br> Maximum file size: 2MB</span>
      <hr class="dotted">
    </div>
			<x-form-upload name="upload_location_plan" label="Location Plan (Scale 1:1000)" col="12" required/>
			<x-form-upload name="upload_technical_design" label="Detailed Technical Design and drawing of Tower/Post including specification of foundation" col="12" required/>
			<x-form-upload name="upload_ss_certificate" label="Copy of Structural Stability Certificate" col="12 RTT d-none"/>
			<x-form-upload name="upload_soil_certificate" label="Copy of Soil Test Certificate" col="12 GBT d-none"/>
			<x-form-upload name="upload_fire_certificate" label="Copy of NOC issued by Fire Safety Department " col="12 d-none RTT"/>
			<x-form-upload name="upload_sacfa_clearance" label="Copy of SACFA Clearance / SACFA Application with WPC acknowledgement" col="12" required/>
			<x-form-upload name="upload_envionment_clearance" label="Copy of clearance from State Environment & Forest Department" col="12 d-none forest_upload"/>
			<x-form-upload name="upload_arai_certificate" label="Copy of ARAI Certificate for DG Sets" col="12" required/>
			<x-form-upload name="upload_ownership_doc" label="Ownership document of Building / Site" col="12" required/>
			<x-form-upload name="upload_lease_doc" label="Attested copy of Lease Agreement Deed / Consent Agreement Deed" col="12" required/>
			<x-form-upload name="upload_ipreg_cert" label="Copy of relevant License/Infrastructure Provider Registration Certificate issued by DoT" col="12" required/>
			<x-form-upload name="upload_building_noc" label="Copy of NOC from Building Owner" col="12 d-none RTT"/>
			<x-form-upload name="upload_govt_consent" label="Consent of authority of land belonging to Central Govt./State Govt./ PSU" col="12 d-none govt_consent"/>

		<div class="col-md-12 text-right">
			<hr class="dotted">
			<button type="submit" name="button" class="btn btn-primary">Preview Application</button>
		</div>

  </div>

</form>
<!-- Validator Scripts -->
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/additional-methods.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#applicationForm").validate();
});

$('#nature_tower').change(function(){
	if($(this).val() == 'GBT')
	{
		$('.GBT').removeClass('d-none');
		$('.RTT').addClass('d-none');
		// GBT fields required true
		$('#is_forest_land').prop('required',true);
		$('#land_size').prop('required',true);
		$('#land_area').prop('required',true);
		$('#plot_no').prop('required',true);
		$('#road_street').prop('required',true);
		$('#ward_colony').prop('required',true);
		$('#upload_soil_certificate').prop('required',true);
		// RTT fields required false
		$('#structure_name').prop('required',false);
		$('#structure_height').prop('required',false);
		$('#structure_area').prop('required',false);
		$('#structure_name').prop('required',false);
		$('#structure_owner_name').prop('required',false);
		$('#structure_address').prop('required',false);
		$('#upload_building_noc').prop('required',false);
		$('#upload_fire_certificate').prop('required',false);
		$('#upload_ss_certificate').prop('required',false);
	}else if($(this).val() == 'RTT')
	{
		$('.RTT').removeClass('d-none');
		$('.GBT').addClass('d-none');
		// GBT fields required false
		$('#is_forest_land').prop('required',false);
		$('#land_size').prop('required',false);
		$('#land_area').prop('required',false);
		$('#plot_no').prop('required',false);
		$('#road_street').prop('required',false);
		$('#ward_colony').prop('required',false);
		$('#upload_soil_certificate').prop('required',false);
		// RTT fields required true
		$('#structure_name').prop('required',true);
		$('#structure_height').prop('required',true);
		$('#structure_area').prop('required',true);
		$('#structure_name').prop('required',true);
		$('#structure_owner_name').prop('required',true);
		$('#structure_address').prop('required',true);
		$('#upload_building_noc').prop('required',true);
		$('#upload_fire_certificate').prop('required',true);
		$('#upload_ss_certificate').prop('required',true);
	}else{
		$('.RTT').addClass('d-none');
		$('.GBT').addClass('d-none');
		// All fields required false
		$('#is_forest_land').prop('required',false);
		$('#land_size').prop('required',false);
		$('#land_area').prop('required',false);
		$('#plot_no').prop('required',false);
		$('#road_street').prop('required',false);
		$('#ward_colony').prop('required',false);
		$('#structure_name').prop('required',false);
		$('#structure_height').prop('required',false);
		$('#structure_area').prop('required',false);
		$('#structure_name').prop('required',false);
		$('#structure_owner_name').prop('required',false);
		$('#structure_address').prop('required',false);
		$('#upload_building_noc').prop('required',false);
		$('#upload_fire_certificate').prop('required',false);
		$('#upload_soil_certificate').prop('required',false);
		$('#upload_ss_certificate').prop('required',false);
	}
});
$('#is_forest_land').change(function(){
	if($(this).val() == 'YES')
	{
		$('.forest_upload').removeClass('d-none');
		$('.forest_upload').prop('required', true);
	}else{
		$('.forest_upload').addClass('d-none');
		$('.forest_upload').prop('required', false);
	}
});
$('#land_owner').change(function(){
	if($(this).val() == 'GOVT')
	{
		$('.govt_consent').removeClass('d-none');
		$('.govt_consent').prop('required', true);

	}else{
		$('.govt_consent').addClass('d-none');
		$('.govt_consent').prop('required', false);
	}
});
</script>

<!-- Number validation -->
<script type="text/javascript">
	var validNumber = new RegExp(/^\d*\.?\d*$/);
	var lastValid = document.getElementById("tower_height",'land_area','tower_weight','tower_antennae','tower_area','tower_lat','tower_long','land_size','structure_height','structure_area').value;
	function validate(elem) {
	  if (validNumber.test(elem.value)) {
	    lastValid = elem.value;
	  } else {
	    elem.value = lastValid;
	  }
	}
</script>

<!-- old return value script -->
@if(old('tower_location') !== null)
<script type="text/javascript">
$(document).ready(function(){
	$('#tower_location').val('{{old('tower_location')}}');
	$('#nature_tower').val('{{old('nature_tower')}}');
	$('#nature_tower').trigger('change');
	$('#land_owner').val('{{old('land_owner')}}');
	$('#land_owner').trigger('change');
	$('#funding_source').val('{{old('funding_source')}}');
	$('#tower_mounting').val('{{old('tower_mounting')}}');
	$('#tower_env').val('{{old('tower_env')}}');
});
</script>
@endif
@endsection
