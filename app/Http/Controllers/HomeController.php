<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RowTower;
use App\Models\Alert;
use App\Models\RowVillage;
use App\Models\LicenseeProfile;
use App\Traits\DataProvider;

use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function encryptPass(Request $request)
    {
      /* we are sending base64 encoded hash in ajax request to avaoid plain text
      so first we need to unhash the encoded password
    */

    $hashedPass = $request->pwd;
    $password = base64_decode($hashedPass);


    /* now decoded password is then added to a random salt and encrypted using Crypt
      The random salt is stored against the email in users table which will be used later
      to ensure old password hash
      Then the encrypted password is sent back as ajax response.
    */

    $target = User::where('email', $request->email)->first();
    if($target)
      {
        $salt= Str::random(8);
        $target->salt = $salt;
        $target->save();
        $pass = $password.$salt;
        $encrypted = Crypt::encryptString($pass);
        return response()->json(['encrypted'=> $encrypted]);
      } else {
        throw ValidationException::withMessages([
            'email' => __('Email Not Found'),
        ]);
        return redirect()->back();
      }

    }

    public function verifyPermit($id)
    {
      $data = RowStatus::where('tower_id', $id)->first();
      return view('verifyPermit', [
        'data' => $data,
      ]);
    }

    public function homeRedirector()
    {
      if(Auth::user()->role == "DITC")
      {
        return $this->ditDashboard();
      }elseif(Auth::user()->role == "DC"){
        return $this->dcDashboard();
      }
      else{
        return $this->applicantDash();
      }
    }

    public function applicantDash()
    {
      $user = User::where('id',Auth::user()->id)->first();
      $user->system_ip = \Request::ip();
      $user->user_agent = \Request::server('HTTP_USER_AGENT');
      $user->save();

      $profile = LicenseeProfile::where('user_id',Auth::user()->id)->first();

      $alerts = Alert::where('user_id', Auth::user()->id)->latest('created_at')->take(2)->get();
      $data = new DataProvider;
      $counts = $data->returnCount(Auth::user()->role);
      return view('backend.Telecom.index',[
        'service_name' => 'Telecom RoW',
        'alerts' => $alerts,
        'counts' => $counts,
      ]);
    }

    public function HelpdeskDashboard()
    {
      $datas = Ncs2021::all();
      $applicationCount = count(Ncs2021::all());
      return view('backend.helpdesk.dashboard',[
        'datas' => $datas,
        'applicationCount' => $applicationCount
      ]);
    }

    public function ditDashboard()
    {
      $user = User::where('id',Auth::user()->id)->first();
      $user->system_ip = \Request::ip();
      $user->user_agent = \Request::server('HTTP_USER_AGENT');
      $user->save();

      $totalCount = count(RowStatus::all());
      $pendingCount = count(RowStatus::where('app_status', 'PENDING')->orWhere('app_status', 'PERMIT UPLOAD')->get());
      $approvedCount = count(RowStatus::where('app_status', 'APPROVED')->where('pay_status','!=','PAID')->get());
      $rejectedCount = count(RowStatus::where('app_status', 'REJECTED')->get());
      $activeCount = count(RowStatus::where('app_status', 'APPROVED')->where('pay_status', 'PAID')->get());
      $alerts = Alert::where('user_id', Auth::user()->id)->get();
      $alerts = Alert::where('user_id', Auth::user()->id)->get();

      return view('backend.Admin.DITC.index',[
        'service_name' => 'Telecom RoW',
        'totalCount' => $totalCount,
        'pendingCount' => $pendingCount,
        'approvedCount' => $approvedCount,
        'rejectedCount' => $rejectedCount,
        'activeCount' => $activeCount,
        'alerts' => $alerts,
      ]);
    }

    public function dcDashboard()
    {

      $user = User::where('id',Auth::user()->id)->first();
      $user->system_ip = \Request::ip();
      $user->user_agent = \Request::server('HTTP_USER_AGENT');
      $user->save();

      $data = new DataProvider;
      $counts = $data->returnCount(Auth::user()->role);

      return view('backend.Admin.DC.index',[
        'counts' => $counts
      ]);
    }

    public function changePass(Request $request)
    {
      $request->validate([
        'password' => 'confirmed|required'
      ]);

      User::find(Auth::user()->id)->update([
        'password' => Hash::make($request->password),
      ]);
      Session::flash('passwordChanged',1);
      return redirect()->back();
    }

}
