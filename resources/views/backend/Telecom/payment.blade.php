@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-4">
    <x-card-with-header cardTitle="Approved Applications">
      <div class="alert alert-primary">
        Applications approved by the respective Deputy Commissioner. <br>
        Select the applications for which you want to generate invoice by clicking on the checkbox and click on generate invoice.
      </div>
      @livewire('invoice-table')
    </x-card-with-header>
  </div>

  <div class="col-md-8">
    <x-card-with-header cardTitle="Generated Challans" style="height:100% !important">
        <div class="alert alert-primary">
          <b>Information:</b> Please generate invoice from the Approved application table. <br>
          Generated invoice will appear in the table below, please make payment using NEFT/RTGS modes only. <br>
           After payment completion upload your payment details by clicking on the update payment button.
        </div>
        <table class="table mt-4 table-striped table-sm table-responsive" id="generatedInvoiceTable">
          <thead>
            <tr>
              <th>Challan No.</th>
              <th>Total payable</th>
              <th>Challan Date</th>
              <th>Challan Expiry Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if($invoices->count())
            @foreach($invoices as $item)
            <tr>
              <td>{{ $item->challan_no }}</td>
              <td>{{ $item->total_payable }}</td>
              <td>{{ Carbon\Carbon::parse($item->challan_date)->format('d-m-Y') }}</td>
              <td>{{ Carbon\Carbon::parse($item->challan_expiry_date)->format('d-m-Y') }}</td>
              <td>
                @if($item->status == "ACTIVE")
                Payment awaited
                @elseif($item->status == "PENDING")
                Confirmation Pending
                @endif
              </td>
              <td>
                @if($item->status == "ACTIVE")
                <form action="{{route('generateInvoice')}}" method="post" class="d-inline">
                  @csrf
                  <input type="hidden" name="ids" value="{{ $item->txn_ids }}">
                  <input type="hidden" name="invoiceId" value="{{ $item->id }}">
                  <button type="submit" name="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Download Challan">
                    <i class="fa fa-download" aria-hidden="true"></i>
                  </button>
                </form>
                <button type="button" name="button" class="btn btn-primary btn-sm updatepay-btn" data-challan="{{ $item->challan_no }}" data-ids = "{{$item->txn_ids }}" data-amount="{{ $item->total_payable }}" data-toggle="modal" data-target="#updatePayment">Update Payment</button>
                <a href="{{route('deleteInvoice',$item->challan_no)}}" class="btn btn-danger btn-sm updatepay-btn" data-toggle="tooltip" data-placement="top" title="Cancel Challan"><i class="fas fa-times"></i></a>
                @elseif($item->status == "PENDING")
                <span class="btn btn-sm btn-primary" data-toggle="modal" data-target="#viewInvoice{{$loop->index}}"><i class="fas fa-eye"></i></span>

                <!-- modal for view invoice -->
                <div class="modal fade" id="viewInvoice{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice{{$loop->index}}" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="viewInvoiceLabel{{$loop->index}}"><b>Payment Details</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>Please check the details provided against this Challan. If any error/correction required please click on the <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button> to cancel. You can regenerate Challan and submit again.</h5>
                        <hr>
                        <b>Challan No. :</b> {{ $item->challan_no }} <br>
                        <b>Amount. :</b> {{ $item->total_payable }} <br>
                        <b>UTR No. :</b> {{ $item->payment_id}} <br>
                        <b>Payment Date. :</b> {{ Carbon\Carbon::parse($item->payment_date)->format('d-m-Y') }} <br>
                        <b>Payment Proof. :</b> <a href="{{Storage::url($item->payment_proof)}}" target="_blank">View proof of payment</a> <br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <form class="d-inline cancelForm" action="{{route('cancelInvoice',$item->challan_no)}}" method="get">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger cancelBtn" data-toggle="tooltip" data-placement="top" title="Cancel Challan"><i class="fas fa-times"></i></button>
                </form>
                @endif
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="7">No Data available</td>
            </tr>
            @endif
          </tbody>
        </table>
      </x-card-with-header>
    </div>
</div>

<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="updatePayment" tabindex="-1" role="dialog" aria-labelledby="updatePayment" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updatePaymentLabel"><b>Update Payment Details</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="row" action="{{route('updatePayment')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="ids" id="ids">
          <div class="form-group col-md-6">
            <label for=""> Challan No.</label>
            <input type="text" name="challan_no" id="challan_no" class="form-control" readonly>
          </div>
          <div class="form-group col-md-6" style="border-top:none;padding-top:0">
            <label for=""> Amount.</label>
            <input type="text" name="amount" id="amount" class="form-control" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="">Payment Receipt</label>
            <input type="file" name="payment_proof" class="form-control" required>
          </div>
          <div class="form-group col-md-6">
            <label for="">Payment Date</label>
            <input type="text" name="payment_date" class="form-control datepicker" readonly required>
          </div>
          <div class="form-group col-md-6 ">
            <label for="">Payment Receipt No.</label>
            <input type="text" name="payment_id" class="form-control" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

@error('payment_proof')
<script type="text/javascript">
  $(document).ready(function(){
    Swal.fire(
    'Error',
    'Only jpeg, jpg, pdf accepted. Please try again.',
    'error'
    );
  })
</script>
@enderror

<script type="text/javascript">
  $('.updatepay-btn').click(function(){
    console.log($(this).attr('data-challan'));
    $('#challan_no').val($(this).attr('data-challan'));
    $('#amount').val($(this).attr('data-amount'));
    $('#ids').val($(this).attr('data-ids'));
  });
</script>
<script type="text/javascript">
$('.cancelBtn').click(function(e){
  e.preventDefault();
    Swal.fire({
    title: 'Please confirm',
    text: 'Are you sure you want to cancel your invoice?',
    showCancelButton: true,
    confirmButtonText: 'Proceed',
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      $('.cancelForm').submit();
    }
  });
});
</script>
@if(Session::has('invoiceCancelled'))
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire(
	  'Success',
	  'Your Invoice has been cancelled.',
	  'success'
		);
	})
</script>
@endif
<script type="text/javascript">
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
  $( function() {
    $( ".datepicker" ).datepicker({
      dateFormat: 'dd-mm-yy',
      yearRange: '1940:2030',
      changeYear: true,
      changeMonth: true,
    });
  } );
 </script>
@endsection
