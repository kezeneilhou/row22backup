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

    <div class="col-md-12">
      <section class="card card-featured-left card-featured-primary mb-3">
        <div class="card-body">
          <div class="widget-summary">
            <div class="widget-summary-col">
              <div class="summary">
                <h4 class="title">User Profile</h4>
                <p class="mb-0">Change request</p>
                <div class="info">
                  <strong class="amount">{{$adminUserCount}}</strong>
                </div>
              </div>
              <div class="summary-footer">
                <a class="text-muted text-uppercase" href="{{route('profileChange.index')}}">(view all)</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</div>
</div>
