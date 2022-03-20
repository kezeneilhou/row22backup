<?php

namespace App\Http\Livewire;
use App\Models\RowStatus;
use App\Models\RowTower;
use App\Models\Invoice;
use PDF;
use Livewire\Component;
use Auth;
use Carbon\Carbon;
use Session;
use Livewire\WithPagination;

class InvoiceTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $selectedID = [];
    public $selectAll = false;
    public $disabled = true;
    public $currentPage;

    public function updatedSelectedID()
    {
        if(empty($this->selectedID))
        {
          $this->disabled = true;
        }else{
          $this->disabled = false;
        }
    }

    public function updatedSelectAll($value)
    {
        $this->currentPage = RowStatus::where('app_status','APPROVED')->where('pay_status','PENDING')->where('invoice_status',null)->where('userid',Auth::user()->id)->paginate(3)->currentPage();

        if($value)
        {
          $this->selectedID = RowStatus::where('app_status','APPROVED')->where('pay_status','PENDING')->where('invoice_status',null)->where('userid',Auth::user()->id)->paginate(3,['*'],'page',$this->currentPage)->pluck('id');
        }else{
          $this->selectedID = [];
        }
        if(empty($this->selectedID))
        {
          $this->disabled = true;
        }else{
          $this->disabled = false;
        }
    }

    public function generateInvoice()
    {
      $txnIds = [];
      $annualCharge = 0;
      $challan = 'CH'.Auth::User()->id.Carbon::now()->timestamp;
      $data  = RowStatus::query()
      ->whereIn('id',$this->selectedID)
      ->get();

      foreach($data as $item)
      {
        $item->update([
          'invoice_status' => 'ACTIVE',
        ]);
      }


      // Storing data to Invoice Table
        $i = 0;
        foreach($data as $item)
        {
          $area = RowTower::where('txn_id', $item->txn_id)->first();
          if($area->tower_location == "MC")
          {
            $annualCharge += 10000;
          } else {
            $annualCharge += 5000;
          }

          $txnIds[$i] = $item->txn_id;
          $i++;
        }

        $txnIds = json_encode($txnIds);

        $invoice = Invoice::create([
          'user_id' => Auth::user()->id,
          'challan_no' => $challan,
          'challan_type' => 'NEW',
          'txn_ids' => $txnIds,
          'total_annual_charge' => $annualCharge,
          'total_ot_charge' => count($data)*10000,
          'total_payable' => $annualCharge + count($data)*10000,
          'challan_date' => Carbon::now()->format('Y-m-d'),
          'challan_expiry_date' => Carbon::now()->addDays(14)->format('Y-m-d'),
          'status' => 'ACTIVE',
        ]);
        $this->resetPage();
        Session::flash('done',1);
    }

    public function render()
    {

        $data= RowStatus::where('app_status','APPROVED')->where('pay_status','PENDING')->where('invoice_status',null)->where('userid',Auth::user()->id)->paginate(3);
        return view('livewire.invoice-table',[
          'datas' => $data
        ]);
    }
}
