<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RowStatus;
use App\Models\RowTower;
use Auth;
use App\Models\User;

class DcDashboard extends Component
{
    public $currentStatus = "";
    public $approved;
    public $rejected;
    public $search="";

    public function updatingSearch()
    {
      $this->reset();
    }

    public function changeStatus($status)
    {
        $this->currentStatus= $status;
    }

    public function render()
    {
        $datas = RowStatus::where('app_status','LIKE','%'. $this->currentStatus.'%')->where('district', Auth::User()->licensee_type)->where('txn_id','LIKE','%'.$this->search.'%')->paginate(10);
        //sending counts
        $totalCount = count(RowStatus::where('district', Auth::User()->licensee_type)->get());
        $pendingCount = count(RowStatus::where('app_status', 'PENDING')->where('district', Auth::User()->licensee_type)->get());
        $approvedCount = count(RowStatus::where('app_status', 'APPROVED')->where('district', Auth::User()->licensee_type)->where('pay_status','!=','PAID')->get());
        $rejectedCount = count(RowStatus::where('app_status', 'REJECTED')->where('district', Auth::User()->licensee_type)->get());
        //checking for DITC Login
        return view('livewire.dc-dashboard', [
          'datas' => $datas,
          'totalCount' => $totalCount,
          'pendingCount' => $pendingCount,
          'approvedCount' => $approvedCount,
          'rejectedCount' => $rejectedCount,
        ]);
    }
}
