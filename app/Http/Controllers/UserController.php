<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Carbon\Carbon;

class UserController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'licensee_type' => 'required',
            'licensee_gst' => 'required',
            'licensee_pan' => 'required',
            'licensee_tan' => 'required',
            'dot_reg_no' => 'required',
            'dot_reg_date' => 'required',
            'dot_reg_expiry' => 'required',
            'auth_person' => 'required',
            'auth_designation' => 'required',
            'auth_id_proof_type' => 'required',
            'auth_id_proof_no' => 'required',
            'ho_address' => 'required',
            'ho_pin' => 'required',
            'ho_state' => 'required',
            'ho_district' => 'required',
            'ho_mobile' => 'required',
            'ho_email' => 'required',
            'so_address' => 'required',
            'so_pin' => 'required',
            'so_state' => 'required',
            'so_district' => 'required',
            'so_mobile' => 'required',
            'so_email' => 'required',
            'dot_license' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
            'id_proof' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
            'auth_letter' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
        ],[
            'dot_license.mimes' => 'DoT License only PDF, JPG, JPEG allowed',
            'dot_license.max' => 'DoT License Filesize max 2MB allowed',
            'id_proof.mimes' => 'ID Proof only PDF, JPG, JPEG allowed',
            'id_proof.max' => 'ID Proof Filesize max 2MB allowed',
            'auth_letter.mimes' => 'Authorization Letter only PDF, JPG, JPEG allowed',
            'auth_letter.max' => 'Authorization Letter Filesize max 2MB allowed',
        ]);
        $user = User::where('id',Auth::user()->id)->first();
        $user->update([
            'licensee_type' => $request->licensee_type,
            'licensee_gst' => $request->licensee_gst,
            'licensee_pan' => $request->licensee_pan,
            'licensee_tan' => $request->licensee_tan,
            'dot_reg_no' => $request->dot_reg_no,
            'dot_reg_date' => Carbon::parse($request->dot_reg_date)->format('Y-m-d'),
            'dot_reg_expiry' => Carbon::parse($request->dot_reg_expiry)->format('Y-m-d'),
            'auth_person' => $request->auth_person,
            'auth_designation' => $request->auth_designation,
            'auth_id_proof_type' => $request->auth_id_proof_type,
            'auth_id_proof_no' => $request->auth_id_proof_no,
            'ho_address' =>$request->ho_address,
            'ho_pin' =>$request->ho_pin,
            'ho_state' =>$request->ho_state,
            'ho_district' =>$request->ho_district,
            'ho_mobile' =>$request->ho_mobile,
            'ho_email' =>$request->ho_email,
            'so_address' =>$request->so_address,
            'so_pin' =>$request->so_pin,
            'so_state' =>$request->so_state,
            'so_district' =>$request->so_district,
            'so_mobile' =>$request->so_mobile,
            'so_email' =>$request->so_email,
            'status' => 'PENDING',
            'profile_complete' => 'COMPLETE',
        ]);
        $file1ext = $request->file('dot_license')->getClientOriginalExtension();
        $user->update([
          'dot_license' => $request->file('dot_license')->storeAs('public/'.'USER/'.$user->id,'dot_license_'.$user->id.".".$file1ext),
        ]);
        $file1ext = $request->file('id_proof')->getClientOriginalExtension();
        $user->update([
          'id_proof' => $request->file('id_proof')->storeAs('public/'.'USER/'.$user->id,'id_proof_'.$user->id.".".$file1ext),
        ]);
        $file1ext = $request->file('auth_letter')->getClientOriginalExtension();
        $user->update([
          'auth_letter' => $request->file('auth_letter')->storeAs('public/'.'USER/'.$user->id,'auth_letter_'.$user->id.".".$file1ext),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
