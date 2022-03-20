<div class="col-md-12 d-none" id="applicant_list" wire:ignore.self>
  <hr class="dotted">
  <h4><b>NCS 2021 APPLICANTS</b></h4>
  <hr class="dotted">
  <div class="row mb-3">
    <div class="col-md-4">
      <div class="form-group-inline">
        <label for="">Search</label>
        <input type="text" wire:model="search" class="form-control">
      </div>
    </div>
  </div>
  <div class="table-responsive">
    {{$datas->links()}}

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Txn ID</th>
          <th>Name</th>
          <th>Gender</th>
          <th>DOB</th>
          <th>Mobile</th>
          <th>Category</th>
          <th>Tribe</th>
          <th>PWD</th>
          <th>PWD Category</th>
          <th>Graduation Status</th>
          <th>Is govt. Emp</th>
          <th>Payment Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($datas as $data)
        <tr>
          <td>{{$data->txnid}}</td>
          <td>{{$data->full_name}}</td>
          <td>{{$data->gender}}</td>
          <td>{{\Carbon\Carbon::parse($data->dob)->format('d-M-Y')}}</td>
          <td>{{$data->mobile}}</td>
          <td>{{$data->category}}</td>
          <td>{{$data->st_tribe}}</td>
          <td>{{$data->pwd_status}}</td>
          <td>{{$data->pwd_category}}</td>
          <td>{{$data->graduation_status}}</td>
          <td>{{$data->is_govt_employee}}</td>
          <td>{{$data->payment_status}}</td>
          @if(Auth::user()->role == "NPSCAdmin")
          <td><a href="{{route('ncs2021UserData',$data->user_id)}}" class="btn btn-sm btn-danger">View</a></td>
          @elseif(Auth::user()->role == "Helpdesk")
          <td><a href="{{route('ncs2021UserDataEdit',$data->user_id)}}" class="btn btn-sm btn-danger">View</a></td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$datas->links()}}
  </div>
</div>
