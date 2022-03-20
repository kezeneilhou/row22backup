<x-card-with-header cardTitle="Generate Report">
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
                <strong class="amount">{{$totalCount}}</strong>
              </div>
            </div>
            <div class="summary-footer">
              <a class="text-muted text-uppercase" href="{{route('generateReport','ALL')}}">(Generate Report)</a>
            </div>
          </div>
        </div>
      </div>
    </section>
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
              <a class="text-muted text-uppercase" href="{{route('generateReport','PENDING')}}">(Generate Report)</a>
            </div>
          </div>
        </div>
      </div>
    </section>
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
              <a class="text-muted text-uppercase" href="{{route('generateReport','REJECTED')}}">(Generate Report)</a>
            </div>
          </div>
        </div>
      </div>
    </section>
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
              <a class="text-muted text-uppercase" href="{{route('generateReport','APPROVED')}}">(Generate Report)</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style media="screen">
      .widget-summary .summary-icon{
        width:46px;
        height:46px;
      }
      .widget-summary .summary-icon{
        font-size: 1.5rem;
        line-height: 48px;
      }
    </style>
</x-card-with-header>
