<?php

namespace App\Traits;
use Illuminate\Support\Facades\Auth;
use App\Models\RowTower;
// use Auth;

class DataProvider
{
    public function returnData($role)
    {
        $data = [];
        if($role == 'Telecom')
        {
          $data['pending'] = RowTower::where('user_id', Auth::User()->id)->where('app_status', 'PENDING')->orWhere('app_status', 'PERMIT UPLOAD')->get();
          $data['approved'] = RowTower::where('app_status', 'APPROVED')->where('user_id', Auth::User()->id)->where('pay_status','!=','PAID')->get();
          $data['rejected'] = RowTower::where('app_status', 'REJECTED')->where('user_id', Auth::User()->id)->get();
          $data['active'] = RowTower::where('app_status', 'APPROVED')->where('pay_status', 'PAID')->where('user_id', Auth::User()->id)->get();
          $data['reverted'] = RowTower::where('app_status', 'REVERTED')->where('user_id', Auth::User()->id)->get();
          $data['total'] = RowTower::where('app_status','!=',null)->where('user_id', Auth::User()->id)->get();
          return $data;
        }elseif($role == 'DC')
        {
          $data['pending'] = RowTower::where('district', Auth::User()->district)->where('app_status', 'PENDING')->orWhere('app_status', 'PERMIT UPLOAD')->get();
          $data['approved'] = RowTower::where('app_status', 'APPROVED')->where('district', Auth::User()->district)->where('pay_status','!=','PAID')->get();
          $data['rejected'] = RowTower::where('app_status', 'REJECTED')->where('district', Auth::User()->district)->get();
          $data['active'] = RowTower::where('app_status', 'APPROVED')->where('pay_status', 'PAID')->where('district', Auth::User()->district)->get();
          $data['reverted'] = RowTower::where('app_status', 'REVERTED')->where('district', Auth::User()->district)->get();
          $data['total'] = RowTower::where('app_status','!=',null)->where('district', Auth::User()->district)->get();
          return $data;
        }elseif($role == 'DITC')
        {
          $data['pending'] = RowTower::where('app_status', 'PENDING')->orWhere('app_status', 'PERMIT UPLOAD')->get();
          $data['approved'] = RowTower::where('app_status', 'APPROVED')->where('pay_status','!=','PAID')->get();
          $data['rejected'] = RowTower::where('app_status', 'REJECTED')->get();
          $data['active'] = RowTower::where('app_status', 'APPROVED')->where('pay_status', 'PAID')->get();
          $data['reverted'] = RowTower::where('app_status', 'REVERTED')->get();
          $data['total'] = RowTower::where('app_status','!=',null)->get();

          return $data;
        }else{
          abort(405);
        }
    }

    public function returnCount($role)
    {
      $counts = [];
      $data = $this->returnData($role);
      $counts['pending'] = count($data['pending']);
      $counts['approved'] = count($data['approved']);
      $counts['rejected'] = count($data['rejected']);
      $counts['active'] = count($data['active']);
      $counts['reverted'] = count($data['reverted']);
      $counts['total'] = count($data['total']);
      return $counts;
    }
}
