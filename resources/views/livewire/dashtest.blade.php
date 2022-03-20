<div class="">
  <div class="row mb-4">
    <div class="col-md-4">
      <div class="form-group">
      <label for="">Search email</label>
      <input type="text" name="" wire:model="name" class="form-control">
      </div>
    </div>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Payment Status</th>
        <th>Payment ID</th>
        <th>Action</th>
      @foreach($data as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->ncs2021->payment_status}}</td>
        <td>{{$item->paymentInfo->payment_id}}</td>
        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" wire:click="selectID({{$item->id}})">
        Update
      </button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $data->links() }}

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Payment ID</label>
          <input type="text" wire:model="pay_id" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Payment Status</label>
          <select wire:model="pay_status" class="form-control">
            <option value="">Select</option>
            <option value="PAID">PAID</option>
            <option value="FAILED">FAILED</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click="save()">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
