<div class="row">
	<style media="screen">
		.row-tiles a:hover{text-decoration: none !important}
		.row-tiles li:hover{background: #0374ad}
	</style>
	<div class="col-md-2">
    <section class="card">
      <header class="card-header">

        <h2 class="card-title">Your Applications</h2>
        <p class="card-subtitle">Right of Way for Mobile Towers</p>
      </header>
      <div class="card-body row-tiles">
        <ul class="simple-card-list mb-3">
          <li class="primary">
						<a href=# wire:click="changeStatus('')" style="color:#fff">
            <h3>{{ $totalCount }}</h3>
            <p class="text-light">Total Application</p>
					</a>
          </li>
          <li class="primary">
						<a href=# wire:click="changeStatus('PENDING')" style="color:#fff">
            <h3>{{ $pendingCount }}</h3>
            <p class="text-light">Pending Application</p>
					</a>
          </li>
          <li class="primary">
						<a href=# wire:click="changeStatus('REJECTED')" style="color:#fff">
            <h3>{{ $rejectedCount }}</h3>
            <p class="text-light">Rejected Application</p>
					</a>
          </li>
          <li class="primary">
						<a href=# wire:click="changeStatus('APPROVED')" style="color:#fff">
            <h3>{{ $approvedCount }}</h3>
            <p class="text-light">Approved Application</p>
					</a>
          </li>
        </ul>
      </div>
    </section>
	</div>
	<div class="col-md-10">
		<div class="tabs">
			<ul class="nav nav-tabs tabs-primary">
				<li class="nav-item active">
					<a class="nav-link" href="#overview" data-toggle="tab"><b>{{$currentStatus}} APPLICATIONS</b></a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Search Application ID</label>
                <input type="text" wire:model="search" class="form-control">
              </div>
            </div>

          </div>

          <table class="table mt-4 table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Application ID</th>
                <th>Licensee Name</th>
                <th>Tower Type</th>
                <th>Location</th>
                <th>District</th>
                <th>Date of Application</th>
								@if($currentStatus == "APPROVED")
                <th>Date of Approval</th>
								@endif
								@if($currentStatus == "PENDING")
                <th>No. of Days Pending</th>
								@endif
								@if($currentStatus == "REJECTED")
								<th>Reason for Rejection</th>
								@endif
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
							@if($datas->count())
              @foreach($datas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->txn_id }}</td>
                <td>{{ $item->rowUser->name }}</td>
                <td>{{ $item->tower_type }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->district }}</td>
                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
								@if($currentStatus == "APPROVED")
                <td>{{ Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}</td>
								@endif
								@if($currentStatus == "PENDING")
                <td>
									<?php
                  $now = Carbon\Carbon::now();
                  $days = Carbon\Carbon::parse($item->created_at)->diffInDays($now);
                  echo $days;
                  ?>
								</td>
								@endif
								@if($currentStatus == "REJECTED")
								<th>{{ $item->rejection_reason }}</th>
								@endif
                <td>
									<a href="{{route('dcDash.show', $item->txn_id )}}" class="btn btn-dark btn-sm"> View</a>
								</td>
              </tr>
              @endforeach
							@else
							<tr>
								<td colspan="6">No Data available</td>
							</tr>
							@endif
            </tbody>
          </table>

					</div>
				</div>
			</div>
		</div>
</div>
