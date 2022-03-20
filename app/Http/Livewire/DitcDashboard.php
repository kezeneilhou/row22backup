<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RowStatus;
use App\Models\RowTower;
use Auth;
use App\Models\User;

class DitcDashboard extends Component
{
    public $currentStatus = "PENDING";
    public $approved;
    public $rejected;
    public $search="";
    public $userDatas=[];

    public function updatingSearch()
    {
      $this->reset();
    }

    public function changeStatus($status)
    {
        $this->currentStatus= $status;
    }

    public function getPendingUser()
    {
      $this->userDatas = User::all();
    }

    public function render()
    {
        $datas = RowStatus::where('app_status', $this->currentStatus)->where('txn_id','LIKE','%'.$this->search.'%')->paginate(10);
        //sending counts
        $pendingUsers = User::where('status', 'Submitted')->count();
        $pendingCount = count(RowStatus::where('app_status', 'PENDING')->get());
        $approvedCount = count(RowStatus::where('app_status', 'APPROVED')->where('pay_status','!=','PAID')->get());
        $rejectedCount = count(RowStatus::where('app_status', 'REJECTED')->get());
        //checking for DITC Login
        return view('livewire.ditc-dashboard', [
          'datas' => $datas,
          'pendingCount' => $pendingCount,
          'approvedCount' => $approvedCount,
          'rejectedCount' => $rejectedCount,
          'pendingUsers' => $pendingUsers,
        ]);
    }
}
