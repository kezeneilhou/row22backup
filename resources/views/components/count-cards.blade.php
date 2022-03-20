<div class="col-md-8">
  <div class="row">
    <div class="col-md-6">
      <a href="{{route('pending')}}">
        <section class="card card-featured-left card-featured-primary mb-3 shadow">
          <div class="card-body">
            <div class="widget-summary widget-summary-md">
              <div class="widget-summary-col widget-summary-col-icon">
                <div class="summary-icon bg-primary">
                  <i class="fas fa-clock"></i>
                </div>
              </div>
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Pending Application</h4>
                  <p class="mb-0">Under process</p>
                  <div class="info">
                    <strong class="amount">{{$count['pending']}}</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </a>
    </div>


    <div class="col-md-6">
      <a href="{{route('rejected')}}">
        <section class="card card-featured-left card-featured-secondary mb-3 shadow" >
          <div class="card-body">
            <div class="widget-summary widget-summary-md">
              <div class="widget-summary-col widget-summary-col-icon">
                <div class="summary-icon bg-secondary">
                  <i class="fas fa-times-circle"></i>
                </div>
              </div>
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Rejected Application</h4>
                  <p class="mb-0">Submit again</p>
                  <div class="info">
                    <strong class="amount">{{$count['rejected']}}</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </a>
    </div>

    <div class="col-md-6">
      <a href="{{route('approved')}}">
        <section class="card card-featured-left card-featured-warning mb-3 shadow">
          <div class="card-body">
            <div class="widget-summary widget-summary-md">
              <div class="widget-summary-col widget-summary-col-icon">
                <div class="summary-icon bg-warning">
                  <i class="fas fa-cart-plus"></i>
                </div>
              </div>
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Application approved</h4>
                  <p class="mb-0">Awaiting payment</p>
                  <div class="info">
                    <strong class="amount">{{$count['approved']}}</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </a>
    </div>

    <div class="col-md-6">
      <a href="{{route('active')}}">
        <section class="card card-featured-left card-featured-success mb-3 shadow">
          <div class="card-body">
            <div class="widget-summary widget-summary-md">
              <div class="widget-summary-col widget-summary-col-icon">
                <div class="summary-icon bg-success">
                  <i class="fas fa-check-circle"></i>
                </div>
              </div>
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Permission Issued</h4>
                  <p class="mb-0">Payment complete</p>
                  <div class="info">
                    <strong class="amount">{{$count['active']}}</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </a>
    </div>

    <div class="col-md-6">
      <a href="#">
        <section class="card card-featured-left card-featured-info mb-3 shadow">
          <div class="card-body">
            <div class="widget-summary widget-summary-md">
              <div class="widget-summary-col widget-summary-col-icon">
                <div class="summary-icon bg-info">
                  <i class="fas fa-fast-backward"></i>
                </div>
              </div>
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Reverted Application</h4>
                  <p class="mb-0">Respond within 14 days to avoid cancellation.</p>
                  <div class="info">
                    <strong class="amount">{{$count['reverted']}}</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </a>
    </div>

    <div class="col-md-6">
      <a href="#">
        <section class="card card-featured-left card-featured-danger mb-3 shadow">
          <div class="card-body">
            <div class="widget-summary widget-summary-md">
              <div class="widget-summary-col widget-summary-col-icon">
                <div class="summary-icon bg-danger">
                  <i class="fas fa-exclamation-circle"></i>
                </div>
              </div>
              <div class="widget-summary-col">
                <div class="summary">
                  <h4 class="title">Permit Expiring</h4>
                  <p class="mb-0">In next 60 days.</p>
                  <div class="info">
                    <strong class="amount">#</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </a>
    </div>
  </div>
</div>
