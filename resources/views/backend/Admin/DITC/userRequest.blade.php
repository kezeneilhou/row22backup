@extends('layouts.dashboard')
@section('content')
<div class="row">
  <x-user-sidebar/>


  <div class="col-md-10">
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>Account Activation Request</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-8">
              <table class="table mt-4 table-sm table-striped table-responsive">
                <tr>
                  <td><b>Licensee Name:</b></td>
                  <td colspan="3">{{ $data->name }}</td>
                </tr>
                <tr>
                  <td><b>Authorized Persons Name:</b></td>
                  <td>{{ $data->auth_person }}</td>
                  <td><b>Authorized Persons Designation:</b></td>
                  <td>{{ $data->auth_designation }}</td>
                </tr>
                <tr>
                  <td><b>Authorized Persons Email:</b></td>
                  <td>{{ $data->email }}</td>
                  <td><b>Authorized Persons Mobile:</b></td>
                  <td>{{ $data->auth_mobile }}</td>
                </tr>
                <tr>
                  <td><b>Authorized Persons ID Proof:</b></td>
                  <td>{{ $data->auth_id_proof_type }}</td>
                  <td><b>Authorized ID No:</b></td>
                  <td>{{ $data->auth_id_proof_no }}</td>
                </tr>
                <tr>
                  <td><b>Licensee Type:</b></td>
                  @if($data->licensee_type == "TSP")
                  <td>Telecom Service Provider</td>
                  @else
                  <td><b>Infrastructure Provider</td>
                  @endif
                  <td><b>DoT Reg.No.:</b></td>
                  <td>{{ $data->dot_reg_no }}</td>
                </tr>
                <tr>
                  <td><b>DoT Reg. Date:</b></td>
                  <td>{{ Carbon\Carbon::parse($data->dot_reg_date)->format('d-m-Y') }}</td>
                  <td><b>DoT Reg. Expiry Date:</b></td>
                  <td>{{ Carbon\Carbon::parse($data->dot_reg_expiry)->format('d-m-Y') }}</td>
                </tr>
                <tr>
                  <td><b>GST No.:</b></td>
                  <td>{{ $data->licensee_gst }}</td>
                  <td><b>PAN No.:</b></td>
                  <td>{{ $data->licensee_pan }}</td>
                </tr>
                <tr>
                  <td><b>TAN No.:</b></td>
                  <td colspan="3">{{ $data->licensee_gst }}</td>
                </tr>
                <tr>
                  <td><b>Head Office Address:</b></td>
                  <td colspan="3">{{ $data->ho_address }}, {{ $data->ho_district }}, {{ $data->ho_state }} - {{ $data->ho_pin }}</td>
                </tr>
                <tr>
                  <td><b>Head Office Email:</b></td>
                  <td>{{ $data->ho_email }}</td>
                  <td><b>Head Office Contact:</b></td>
                  <td>{{ $data->ho_mobile }}</td>
                </tr>
                <tr>
                  <td><b>State Office Address:</b></td>
                  <td colspan="3">{{ $data->so_address }}, {{ $data->so_district }}, {{ $data->so_state }} - {{ $data->so_pin }}</td>
                </tr>
                <tr>
                  <td><b>State Office Email:</b></td>
                  <td>{{ $data->so_email }}</td>
                  <td><b>State Office Contact:</b></td>
                  <td>{{ $data->so_mobile }}</td>
                </tr>
              </table>
            </div>

            <div class="col-md-4">
              <div class="card shadow">
                <div class="card-header bg-primary">
                  <b>Documents Uploaded</b>
                </div>
                <div class="card-body">
                  <p>1. &nbsp;DoT Registration Certificate - &nbsp; <a href="{{Storage::url($data->dot_license)}}" target="_blank"> View </a></p>
                  <p>2. &nbsp;Authorized Person ID - &nbsp;<a href="{{ Storage::url($data->id_proof) }}" target="_blank"> View </a> </p>
                  <p>3. &nbsp;Authorization Letter - &nbsp;<a href="{{ Storage::url($data->auth_letter) }}" target="_blank"> View </a> </p>
                </div>
              </div>
              @if($data->status != "Approved")
              <div class="card mt-2">
                <div class="card-body bg-dark text-white">
                  <h5><b>Please Authorize/Reject User Activation</b> </h5>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <form class="" action="{{ route('ditDash.store') }}" method="post">
                        @csrf
                        <div class="col-md-12 form-group">
                          <label for="status">Select Status</label>
                          <select class="form-control" name="status">
                            <option selected disabled>-- Select -- </option>
                            <option value="APPROVED">Approved</option>
                            <option value="REJECTED">Rejected</option>
                          </select>
                          <div class="col-md-12 pt-2">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <button type="submit" class="btn btn-primary btn-block form-control" id="submitBtn">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            </div>
          </div>


          </div>
        </div>
      </div>
    </div>
</div>

<div class="container pt-5">
      <div class="row">

        <div class="col-md-4">
           <!--Card Ending -->

        </div><!--Col Ending -->
      </div><!-- Row Ending -->
@endsection
