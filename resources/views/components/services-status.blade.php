<section class="card">
  <header class="card-header">
    <div class="card-actions">
      <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
      <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
    </div>
    <h2 class="card-title">Service Status</h2>
    <p class="card-subtitle">Status of the various services on EDistrict</p>
  </header>
  <div class="card-body">
    <ul class="simple-card-list mb-3">
      <li class="primary">
        <h3>{{$activeServices}}</h3>
        <p class="text-light">Active Service.</p>
      </li>
      <li class="primary">
        <h3>{{$inactiveServices}}</h3>
        <p class="text-light">Inactive Service.</p>
      </li>
      <!-- <li class="primary">
        <h3>16</h3>
        <p class="text-light">Nullam quris ris.</p>
      </li> -->
    </ul>
  </div>
</section>
