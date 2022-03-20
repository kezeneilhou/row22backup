<div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Service ID</th>
        <th>Service Name</th>
        <th>Department</th>
        <th>Link</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Action</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->service_name}}</td>
        <td>{{$item->department}}</td>
        <td>{{$item->link}}</td>
        <td>{{$item->start_date}}</td>
        <td>{{$item->end_date}}</td>
        <td>
          <!-- <a href="{{route('serviceDelete',$item->id)}}" class="btn btn-sm btn-danger disabled">Delete</a> -->
          <a href="{{route('serviceEdit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
        </td>
        <td>
          <button class="btn btn-sm @if($item->status == 'Active') btn-primary @else btn-default @endif" wire:click="changeStatus({{$item->id}})">
            @if($item->status == "Active") Active @else Inactive @endif
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
