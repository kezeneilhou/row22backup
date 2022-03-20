<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>RoW Portal : Nagaland</title>
    <!-- <link rel="stylesheet" href="dashboardAssets/vendor/bootstrap/css/bootstrap.css" /> -->
    @include('pdf.partials.css')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4><b>Row PORTAL APPLICATION: NAGALAND</b></h4>

          <hr>
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($data->txn_id, 'C39')}}" alt="barcode" style="float:right;"/>
          <div>
            <p>Application for <b>Permission to set up overground Telecom/Telegraph Infrastructure</b> with Application ID <b>{{$data->txn_id}}</b>.</p>
            <table class="table table-striped table-sm table-responsive">
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
                  <td><b>Authorised Person's Email:</b> {{ $data->rowUser->email}}</td>
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
            <div class="alert alert-success">
              <b>Uploaded Documents</b>
              <br/>
              <table class="table table-striped table-sm">
                <thead class="text-left">
                  <tr>
                    <th>Document Name</th>
                    <th>Storage Path</th>
                  </tr>
                </thead>
                <tr>
                  <td><b>License Copy</b> : </td>
                  <td>{{Storage::url($data->rowUser->dot_license)}}</td>
                </tr>
                @if($data->upload_location_plan)
                <tr>
                  <td><b>Location Plan</b> : </td>
                  <td>{{Storage::url($data->upload_location_plan)}}</td>
                </tr>
                @endif
                @if($data->upload_technical_design)
                <tr>
                  <td><b>Technical Design</b> : </td>
                  <td>{{Storage::url($data->upload_technical_design)}}</td>
                </tr>
                @endif
                @if($data->upload_ss_certificate)
                <tr>
                  <td><b>Structural Stability :</b></td>
                  <td>{{Storage::url($data->upload_ss_certificate)}}</td>
                </tr>
                @endif
                @if($data->upload_fire_certificate)
                <tr>
                  <td><b>NOC from Fire Dept</b> :</td>
                  <td>{{Storage::url($data->upload_fire_certificate)}}</td>
                </tr>
                @endif
                @if($data->upload_sacfa_clearance)
                <tr>
                  <td><b>SACFA Clearance</b> :</td>
                  <td>{{Storage::url($data->upload_sacfa_clearance)}}</td>
                </tr>
                @endif
                @if($data->upload_envionment_clearance)
                <tr>
                  <td><b>Copy of clearance from State Environment & Forest Department</b> :</td>
                  <td>{{Storage::url($data->upload_envionment_clearance)}}</td>
                </tr>
                @endif
                @if($data->upload_arai_certificate)
                <tr>
                  <td><b>Copy of ARAI Certificate for DG Sets</b> :</td>
                  <td>{{Storage::url($data->upload_arai_certificate)}}</td>
                </tr>
                @endif
                @if($data->upload_ownership_doc)
                <tr>
                  <td><b>Ownership document of Building / Site</b> :</td>
                  <td>{{Storage::url($data->upload_ownership_doc)}}</td>
                </tr>
                @endif
                @if($data->upload_lease_doc)
                <tr>
                  <td><b>Lease Document</b> :</td>
                  <td>{{Storage::url($data->upload_lease_doc)}}</td>
                </tr>
                @endif
                @if($data->upload_ipreg_cert)
                <tr>
                  <td><b>Copy of relevant License/Infrastructure Provider Registration Certificate issued by DoT</b> :</td>
                  <td>{{Storage::url($data->upload_ipreg_cert)}}</td>
                </tr>
                @endif
                @if($data->upload_building_noc)
                <tr>
                  <td><b>Copy of NOC from Building Owner</b> :</td>
                  <td>{{Storage::url($data->upload_building_noc)}}</td>
                </tr>
                @endif
                @if($data->upload_govt_consent)
                <tr>
                  <td><b>Consent of authority of land belonging to Central Govt./State Govt./ PSU</b> :</td>
                  <td>{{Storage::url($data->upload_govt_consent)}}</td>
                </tr>
                @endif
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
