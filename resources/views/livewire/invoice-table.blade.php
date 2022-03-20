<span>
  <table class="table mt-4 table-striped table-sm">
    <thead>
      <tr>
        <th><input type="checkbox" wire:model="selectAll"></th>
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
        <td> <input type="checkbox" wire:model="selectedID" value="{{$item->id}}"> </td>
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
  {{$datas->links()}}

  <a href="#" class="btn btn-danger @if($disabled == true) disabled @endif btn-sm invoice-btn" wire:click="generateInvoice()"  @if($disabled == true) disabled @endif> Generate Challan</a>
@if(Session::has('done'))
<script type="text/javascript">
  $(function(){
     location.reload();
  });
</script>
@endif

</span>
