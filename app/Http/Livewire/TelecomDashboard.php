<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RowStatus;
use App\Models\RowTower;
use App\Models\Alert;
use Auth;
use App\Models\User;

class TelecomDashboard extends Component
{
    public $currentStatus = "PENDING";
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
        $datas = RowStatus::where('app_status', $this->currentStatus)->where('userid', Auth::User()->id)->where('txn_id','LIKE','%'.$this->search.'%')->paginate(10);
        //sending counts
        $pendingCount = count(RowStatus::where('userid', Auth::User()->id)->where('app_status', 'PENDING')->get());
        $approvedCount = count(RowStatus::where('userid', Auth::User()->id)->where('app_status', 'APPROVED')->get());
        $rejectedCount = count(RowStatus::where('userid', Auth::User()->id)->where('app_status', 'REJECTED')->get());
        $alerts = Alert::where('user_id', Auth::user()->id)->get();
        //checking for DITC Login
        return view('livewire.telecom-dashboard', [
          'datas' => $datas,
          'pendingCount' => $pendingCount,
          'approvedCount' => $approvedCount,
          'rejectedCount' => $rejectedCount,
          'alerts' => $alerts,
        ]);
    }
}
