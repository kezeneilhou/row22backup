<div class="row">
	<style media="screen">
		.row-tiles a:hover{text-decoration: none !important}
		.row-tiles li:hover{background: #0374ad}
	</style>
	<div wire:loading class="loader-ico">
        <img src="{{asset('backendAssets/img/loading2.gif')}}" alt="" height="120">
  </div>
	<div class="col-md-2">
    <section class="card">
      <header class="card-header">
        <div class="card-actions">
          <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
          <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
        </div>
        <h2 class="card-title">Your Applications</h2>
        <p class="card-subtitle">Right of Way for Mobile Towers</p>
      </header>
      <div class="card-body row-tiles">
        <ul class="simple-card-list mb-3">
          <li class="primary">
						<a href=# wire:click="changeStatus('PENDING')" style="color:#fff" class="getData">
            <h3>{{ $pendingCount }}</h3>
            <p class="text-light">Pending Application</p>
					</a>
          </li>
          <li class="primary">
						<a href=# wire:click="changeStatus('REJECTED')" style="color:#fff" class="getData">
            <h3>{{ $rejectedCount }}</h3>
            <p class="text-light">Rejected Application</p>
					</a>
          </li>
          <li class="primary">
						<a href=# wire:click="changeStatus('APPROVED')" style="color:#fff" class="getData">
            <h3>{{ $approvedCount }}</h3>
            <p class="text-light">Approved Application</p>
					</a>
          </li>
					<li class="primary">
						<a href=# wire:click="getPendingUser()" style="color:#fff" id="getUser">
            <h3>{{ $pendingUsers }}</h3>
            <p class="text-light">User Management</p>
					</a>
          </li>
        </ul>
      </div>
    </section>
	</div>
  @if(isset($datas))
  <div class="col-md-10 dataBlock" wire:ignore.self>
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
                <label for="">Search Transaction ID</label>
                <input type="text" wire:model="search" class="form-control">
              </div>
            </div>
          </div>

          <table class="table mt-4 table-striped">
						<thead>
              <tr>
                <th>#</th>
                <th>Application ID</th>
                <th>Tower Type</th>
                <th>Location</th>
                <th>District</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
							@if($datas->count())
              @foreach($datas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->txn_id }}</td>
                <td>{{ $item->tower_type }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->district }}</td>
                <td>
									<a href="{{route('rowTower.show', $item->txn_id )}}" class="btn btn-dark btn-sm"> View</a>
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
  @endif
 @if(isset($userDatas))
	<div class="col-md-10 d-none userBlock" wire:ignore.self>
    <div class="tabs">
      <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
          <a class="nav-link" href="#overview" data-toggle="tab"><b>USER APPLICATIONS</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="overview" class="tab-pane active">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Search User ID</label>
                <input type="text" wire:model="search" class="form-control">
              </div>
            </div>
            <div class="col-md-9 text-right">
              <a href="{{route('ditDash.create')}}" class="btn btn-primary btn-sm mt-3">Add New User</a>
            </div>
          </div>

          <table class="table mt-4 table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Licensee Type</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($userDatas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->licensee_type }}</td>
                <td>
									<a href="{{ route('ditDash.show', $item->id) }}" class="btn btn-dark btn-sm" name="button" > View</a>
									<a href="" class="btn btn-primary btn-sm"> Approve</a>
									<a href="" class="btn btn-danger btn-sm"> Reject</a>

								</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
		@endif
		<script type="text/javascript">
			$('#getUser').click(function(){
				$('.userBlock').removeClass('d-none');
				$('.dataBlock').addClass('d-none');
			});
			$('.getData').click(function(){
				$('.userBlock').addClass('d-none');
				$('.dataBlock').removeClass('d-none');
			});
		</script>
</div>
