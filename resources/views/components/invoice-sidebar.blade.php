<div class="col-md-2">
  <div class="row">
    <div class="col-md-12">
      <section class="card card-featured-left card-featured-primary mb-3">
        <div class="card-body">
          <div class="widget-summary">
            <div class="widget-summary-col">
              <div class="summary">
                <h4 class="title">Total Invoices</h4>
                <p class="mb-0">Generated</p>
                <div class="info">
                  <strong class="amount">{{$invoiceCount}}</strong>
                </div>
              </div>
              <div class="summary-footer">
                <a class="text-muted text-uppercase" href="{{route('showPaymentDIT')}}">(view all)</a>
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
                <h4 class="title">Payment Verifications</h4>
                <p class="mb-0">Awaiting Approval</p>
                <div class="info">
                  <strong class="amount">{{$pendingPaymentCount}}</strong>
                </div>
              </div>
              <div class="summary-footer">
                <a class="text-muted text-uppercase" href="{{route('pendingPaymentDIT')}}">(view all)</a>
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
                <h4 class="title">Payment Complete</h4>
                <p class="mb-0">Details</p>
                <div class="info">
                  <strong class="amount">{{$paymentCompleteCount}}</strong>
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
