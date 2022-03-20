@extends('layouts.dashboard')
@section('content')
<div class="row">
	<style media="screen">
		.row-tiles a:hover{text-decoration: none !important}
		.row-tiles li:hover{background: #0374ad}
	</style>
  <div class="col-md-12">
    <div class="card shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <h4><b>{{Auth::user()->name}}</b></h4>
            <p>{{Auth::user()->auth_designation}}</p>
            <p> <h4><i class="fas fa-file"></i> Total Applications : {{$totalCount}}  </h4> </p>
        	</div>
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                  <div class="card-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-primary">
                          <i class="fas fa-life-ring"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title">Application Pending</h4>
                          <p class="mb-0">Under process</p>
                          <div class="info">
                            <strong class="amount">{{$pendingCount}}</strong>
                          </div>
                        </div>
                        <div class="summary-footer">
                          <a class="btn btn-sm btn-dark text-uppercase" href="{{ route('pendingApplications') }}">view all</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>


              <div class="col-md-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                  <div class="card-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-secondary">
                          <i class="fas fa-life-ring"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title">Application Rejected</h4>
                          <p class="mb-0">Submit again</p>
                          <div class="info">
                            <strong class="amount">{{$rejectedCount}}</strong>
                          </div>
                        </div>
                        <div class="summary-footer">
                          <a class="btn btn-sm btn-dark text-uppercase" href="{{ route('rejectedApplications') }}">view all</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

              <div class="col-md-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                  <div class="card-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-success">
                          <i class="fas fa-life-ring"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title">Application approved</h4>
                          <p class="mb-0">Awaiting payment</p>
                          <div class="info">
                            <strong class="amount">{{$approvedCount}}</strong>
                          </div>
                        </div>
                        <div class="summary-footer">
                          <a class="btn btn-sm btn-dark text-uppercase" href="{{ route('approvedApplications') }}">view all</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-md-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                  <div class="card-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-primary">
                          <i class="fas fa-life-ring"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title">Permission Issued</h4>
                          <p class="mb-0">Payment complete</p>
                          <div class="info">
                            <strong class="amount">{{ $activeCount }}</strong>
                          </div>
                        </div>
                        <div class="summary-footer">
                          <a class="btn btn-sm btn-dark text-uppercase" href="{{ route('activeApplications') }}">view all</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 pt-5">
    <div class="card shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <h4><b>Other Modules</b></h4>
            <p>RoW Portal Management</p>
            <p> <h4> <a href="#"><i class="fas fa-bars"></i> Settings </a> </h4> </p>
        	</div>
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                  <div class="card-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-primary">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title">User</h4>
                          <p class="mb-0">Management</p>
                        </div>
                        <div class="summary-footer">
                          <a class="btn btn-sm btn-dark text-uppercase" href="{{ route('ditDash.index') }}">view all</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>


              <div class="col-md-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                  <div class="card-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-secondary">
                          <i class="fas fa-file-excel"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title">Challan &amp; Payments</h4>
                          <p class="mb-0">Management</p>
                        </div>
                        <div class="summary-footer">
                          <a class="btn btn-sm btn-dark text-uppercase" href="{{ route('showInvoiceDIT') }}">view all</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

              <div class="col-md-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                  <div class="card-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-primary">
                          <i class="fas fa-flag"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title">Reports</h4>
                          <p class="mb-0">Download</p>
                        </div>
                        <div class="summary-footer">
                          <a class="btn btn-sm btn-dark text-uppercase" href="#">view all</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
