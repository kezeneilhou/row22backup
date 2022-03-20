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
                  <h4 class="title">Total Users</h4>
                  <p class="mb-0">Submitted</p>
                  <div class="info">
                    <strong class="amount">{{$userCount}}</strong>
                  </div>
                </div>
                <div class="summary-footer">
                  <a class="text-muted text-uppercase" href="{{route('ditDash.index')}}">(view all)</a>
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
                  <h4 class="title">Pending Users</h4>
                  <p class="mb-0">Awaiting Approval</p>
                  <div class="info">
                    <strong class="amount">{{$pendingCount}}</strong>
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
                  <h4 class="title">Admin Users</h4>
                  <p class="mb-0">Details</p>
                  <div class="info">
                    <strong class="amount">{{$adminUserCount}}</strong>
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
  <div class="card shadow">
    <div class="card-body">
      <h5><b>Create New District User</b></h5>
      @if(Session::has('success'))
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success">
            New User Created
          </div>
        </div>
      </div>
      @endif
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-primary">
              The default Password for every new User is "Password123#".
            </div>
        </div>
      </div>
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
      </div>

      <div class="row">
        <div class="col-md-12">
          <form class="" action="{{ route('createUser' )}}" method="post">
            @csrf
            <div class="col-md-12 form-group">
              <label for="name">District Nodal Officer Name (Eg: DC Kohima)</label>
              <input class="form-control" type="text" name="name" id="name" />
            </div>
            <div class="col-md-12 form-group">
              <label for="email">User Email (This will be used for Login & Password Resets)</label>
              <input class="form-control" type="text" name="email" id="email" />
            </div>
            <div class="col-md-12 form-group">
              <label for="district">District</label>
              <select class="form-control" name="district" id="district">
                <option selected disabled> -- Choose District -- </option>
                <option value="DIMAPUR">DIMAPUR</option>
                <option value="KIPHIRE">KIPHIRE</option>
                <option value="KOHIMA">KOHIMA</option>
                <option value="LONGLENG">LONGLENG</option>
                <option value="MOKOKCHUNG">MOKOKCHUNG</option>
                <option value="MON">MON</option>
                <option value="PEREN">PEREN</option>
                <option value="PHEK">PHEK</option>
                <option value="TUENSANG">TUENSANG</option>
                <option value="WOKHA">WOKHA</option>
                <option value="ZUNHEBOTO">ZUNHEBOTO</option>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-dark btn-block" name="submit">Create User</button>
            </div>
          </form>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>


@endsection
