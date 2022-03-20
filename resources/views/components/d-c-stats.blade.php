<div class="col-md-3">
  <section class="card card-featured-left card-featured-primary mb-3">
    <div class="card-body">
      <div class="widget-summary">
        <div class="widget-summary-col widget-summary-col-icon">
          <div class="summary-icon bg-primary">
            <i class="fas fa-file-invoice"></i>
          </div>
        </div>
        <div class="widget-summary-col">
          <div class="summary">
            <h4 class="title">Total Applications</h4>
            <div class="info">
              <strong class="amount">@if(isset($totalCount)) {{$totalCount}} @endif</strong>
            </div>
          </div>
          <div class="summary-footer">
            <a class="text-muted text-uppercase" href="{{route('dcGetAppData','ALL')}}">(view all)</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="col-md-3">
  <section class="card card-featured-left card-featured-warning  mb-3">
    <div class="card-body">
      <div class="widget-summary">
        <div class="widget-summary-col widget-summary-col-icon">
          <div class="summary-icon bg-warning">
            <i class="fas fa-clock"></i>
          </div>
        </div>
        <div class="widget-summary-col">
          <div class="summary">
            <h4 class="title">Pending Applications</h4>
            <div class="info">
              <strong class="amount">{{$pendingCount}}</strong>
            </div>
          </div>
          <div class="summary-footer">
            <a class="text-muted text-uppercase" href="{{route('dcGetAppData','PENDING')}}">(view all)</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="col-md-3">
  <section class="card card-featured-left card-featured-secondary mb-3">
    <div class="card-body">
      <div class="widget-summary">
        <div class="widget-summary-col widget-summary-col-icon">
          <div class="summary-icon bg-secondary">
            <i class="fas fa-times-circle"></i>
          </div>
        </div>
        <div class="widget-summary-col">
          <div class="summary">
            <h4 class="title">Rejected Applications</h4>
            <div class="info">
              <strong class="amount">{{$rejectedCount}}</strong>
            </div>
          </div>
          <div class="summary-footer">
            <a class="text-muted text-uppercase" href="{{route('dcGetAppData','REJECTED')}}">(view all)</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="col-md-3">
  <section class="card card-featured-left card-featured-tertiary mb-3">
    <div class="card-body">
      <div class="widget-summary">
        <div class="widget-summary-col widget-summary-col-icon">
          <div class="summary-icon bg-tertiary">
            <i class="fas fa-check-circle"></i>
          </div>
        </div>
        <div class="widget-summary-col">
          <div class="summary">
            <h4 class="title">Approved Applications</h4>
            <div class="info">
              <strong class="amount">{{$approvedCount}}</strong>
            </div>
          </div>
          <div class="summary-footer">
            <a class="text-muted text-uppercase" href="{{route('dcGetAppData','APPROVED')}}">(view all)</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
