<div class="col-md-2">
  <div class="row">

    <div class="col-md-12">
      <section class="card card-featured-left card-featured-primary mb-3">
        <div class="card-body">
          <div class="widget-summary">
            <div class="widget-summary-col">
              <div class="summary">
                <h4 class="title">Pending Application</h4>
                <p class="mb-0">Under process</p>
                <div class="info">
                  <strong class="amount">{{$pendingCount}}</strong>
                </div>
              </div>
              <div class="summary-footer">
                <a class="text-muted text-uppercase" href="{{route('pendingApplications')}}">(view all)</a>
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
                <h4 class="title">Rejected Application</h4>
                <p class="mb-0">Submit again</p>
                <div class="info">
                  <strong class="amount">{{$rejectedCount}}</strong>
                </div>
              </div>
              <div class="summary-footer">
                <a class="text-muted text-uppercase" href="{{route('rejectedApplications')}}">(view all)</a>
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
                <h4 class="title">Application approved</h4>
                <p class="mb-0">Awaiting payment</p>
                <div class="info">
                  <strong class="amount">{{$approvedCount}}</strong>
                </div>
              </div>
              <div class="summary-footer">
                <a class="text-muted text-uppercase" href="{{route('approvedApplications')}}">(view all)</a>
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
                <h4 class="title">Permission Issued</h4>
                <p class="mb-0">Payment complete</p>
                <div class="info">
                  <strong class="amount">{{$activeCount}}</strong>
                </div>
              </div>
              <div class="summary-footer">
                <a class="text-muted text-uppercase" href="{{route('activeApplications')}}">(view all)</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

  </div>
</div>
