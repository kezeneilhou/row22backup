<?php

namespace App\Http\Controllers;

use App\Models\LicenseeProfile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LicenseeProfileRequest;

use Auth;
use Session;

class LicenseeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LicenseeProfileRequest $request)
    {
      try {
        $data = LicenseeProfile::create([
          'user_id' => Auth::user()->id,
          'licensee_name' => $request->licensee_name,
          'licensee_type' => $request->licensee_type,
          'licensee_gst' => $request->licensee_gst,
          'licensee_pan' => $request->licensee_pan,
          'licensee_tan' => $request->licensee_tan,
          'dot_reg_no' => $request->dot_reg_no,
          'dot_reg_date' => $request->dot_reg_date,
          'dot_reg_expiry' => $request->dot_reg_expiry,
          'auth_id_proof_type' => $request->auth_id_proof_type,
          'auth_id_proof_no' => $request->auth_id_proof_no,
          'ho_address' => $request->ho_address,
          'ho_pin' => $request->ho_pin,
          'ho_state' => $request->ho_state,
          'ho_district' => $request->ho_district,
          'ho_mobile' => $request->ho_mobile,
          'ho_email' => $request->ho_email,
          'so_address' => $request->so_address,
          'so_pin' => $request->so_pin,
          'so_state' => $request->so_state,
          'so_district' => $request->so_district,
          'so_mobile' => $request->so_mobile,
          'so_email' => $request->so_email,
        ]);
        $ext1 = $request->file('dot_license')->extension();
        $ext2 = $request->file('id_proof')->extension();
        $ext3 = $request->file('auth_letter')->extension();
        $data->update([
          'dot_license' => $request->file('dot_license')->storeAs('public/'.'Profiles/'.$data->id,'dot_license_'.$data->id.".".$ext1),
          'id_proof' => $request->file('id_proof')->storeAs('public/'.'Profiles/'.$data->id,'id_proof_'.$data->id.".".$ext2),
          'auth_letter' => $request->file('auth_letter')->storeAs('public/'.'Profiles/'.$data->id,'auth_letter_'.$data->id.".".$ext3),
        ]);

        $user = User::find(Auth::user()->id);
        $user->update([
          'profile_complete' => 'COMPLETE'
        ]);
      } catch (\Exception $e) {
        Session::flash('error',1);
        return redirect()->back();
      }

        Session::flash('profileStored',1);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenseeProfile  $licenseeProfile
     * @return \Illuminate\Http\Response
     */
    public function show(LicenseeProfile $licenseeProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenseeProfile  $licenseeProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenseeProfile $licenseeProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LicenseeProfile  $licenseeProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LicenseeProfile $licenseeProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenseeProfile  $licenseeProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenseeProfile $licenseeProfile)
    {
        //
    }
}
