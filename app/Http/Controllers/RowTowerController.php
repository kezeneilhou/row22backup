<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RowVillage;
use App\Models\RowTower;
use App\Models\LicenseeProfile;
use App\Traits\DataProvider;
use App\Mail\ApplicationSubmissionMail;

use Mail;
use Auth;
use Session;

class RowTowerController extends Controller
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
        $profile = LicenseeProfile::where('user_id',Auth::user()->id)->first();
        return view('backend.Telecom.create',[
          'status' => 'Create',
          'profile' => $profile,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          try {
          $data = RowTower::create($this->getFields($request));

          $village = RowVillage::where('district',$request->district)->first();
          $data->update([
            'app_id' => '10'.$data->id.Auth::user()->id,
            'district_code' => $village->district_code
          ]);

          // file uploads
          $this->storeFile('upload_location_plan',$data,$request);
          $this->storeFile('upload_technical_design',$data,$request);
          $this->storeFile('upload_ss_certificate',$data,$request);
          $this->storeFile('upload_soil_certificate',$data,$request);
          $this->storeFile('upload_fire_certificate',$data,$request);
          $this->storeFile('upload_sacfa_clearance',$data,$request);
          $this->storeFile('upload_envionment_clearance',$data,$request);
          $this->storeFile('upload_term_receipt',$data,$request);
          $this->storeFile('upload_arai_certificate',$data,$request);
          $this->storeFile('upload_ownership_doc',$data,$request);
          $this->storeFile('upload_ipreg_cert',$data,$request);
          $this->storeFile('upload_lease_doc',$data,$request);
          $this->storeFile('upload_building_noc',$data,$request);
          $this->storeFile('upload_govt_consent',$data,$request);
        } catch (\Exception $e) {
          dd($e);
        }

        return redirect()->route('rowTower.show', $data->app_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RowTower::where('app_id', $id)->first();
        $data2 = new DataProvider;
        $counts = $data2->returnCount(Auth::user()->role);
        return view('backend.Telecom.preview', [
          'data' => $data,
          'counts' => $counts,
          ]);
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
        if($request->final_submit == 'YES')
        {
          $data = RowTower::find($id);
          $data->update([
            'app_status' => 'PENDING',
            'pay_status' => 'PENDING'
          ]);
          // sent email to user
          $details = array(
            'name' => Auth::user()->name,
            'txnid' => $data->app_id,
            'email' => Auth::user()->email,
            );
          Mail::send(new ApplicationSubmissionMail($details));
        }else{
          $data = RowTower::find($id);
          $data->update($this->getFields($request));
          $this->storeFile('upload_location_plan',$data,$request);
          $this->storeFile('upload_technical_design',$data,$request);
          $this->storeFile('upload_ss_certificate',$data,$request);
          $this->storeFile('upload_soil_certificate',$data,$request);
          $this->storeFile('upload_fire_certificate',$data,$request);
          $this->storeFile('upload_sacfa_clearance',$data,$request);
          $this->storeFile('upload_envionment_clearance',$data,$request);
          $this->storeFile('upload_term_receipt',$data,$request);
          $this->storeFile('upload_arai_certificate',$data,$request);
          $this->storeFile('upload_ownership_doc',$data,$request);
          $this->storeFile('upload_ipreg_cert',$data,$request);
          $this->storeFile('upload_lease_doc',$data,$request);
          $this->storeFile('upload_building_noc',$data,$request);
          $this->storeFile('upload_govt_consent',$data,$request);
        }

        Session::flash('applicationSubmitted',1);

        return redirect()->route('login');

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

    public function getFields($request)
    {
      return [
        'user_id' => Auth::user()->id,
        'nature_tower' => $request->nature_tower,
        'district' => $request->district,
        'block' => $request->block,
        'city_town_village' => $request->city_town_village,
        'tower_lat' => $request->tower_lat,
        'tower_long' => $request->tower_long,
        'tower_location' => $request->tower_location,
        'land_owner' => $request->land_owner,
        'is_forest_land' => $request->is_forest_land,
        'land_size' => $request->land_size,
        'land_area' => $request->land_area,
        'plot_no' => $request->plot_no,
        'road_street' => $request->road_street,
        'ward_colony' => $request->ward_colony,
        'structure_name' => $request->structure_name,
        'structure_height' => $request->structure_height,
        'structure_area' => $request->structure_area,
        'structure_address' => $request->structure_address,
        'structure_owner_name' => $request->structure_owner_name,
        'structure_owner_address' => $request->structure_owner_address,
        'tower_height' => $request->tower_height,
        'tower_weight' => $request->tower_weight,
        'tower_mounting' => $request->tower_mounting,
        'tower_antennae' => $request->tower_antennae,
        'tower_env' => $request->tower_env,
        'tower_area' => $request->tower_area,
        'funding_source' => $request->funding_source,
        'work_mode' => $request->work_mode,
        'work_inconvenience' => $request->work_inconvenience,
        'work_public_safety' => $request->work_public_safety,
        'other_matter_dot' => $request->other_matter_dot,
      ];
    }
    public function storeFile($file_name,$data,$request)
    {
      if($request->hasFile($file_name))
        {
          $ext = $request->file($file_name)->extension();
          $data->update([
            $file_name => $request->file($file_name)->storeAs('public/'.'TELECOM/'.$data->id,$file_name.'_'.$data->id.".".$ext),
          ]);
        }
        return;
    }
}
