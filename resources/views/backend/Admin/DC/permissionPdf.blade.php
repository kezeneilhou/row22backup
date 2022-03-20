<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>RoW Portal : Nagaland Permission</title>
    @include('pdf.partials.css')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($data->txn_id, 'C39')}}" alt="barcode"/>
        </div><br>
        <div class="col-md-12" style="line-height:10px; text-align:center;">
          <p><b style="font-size:20px !important;">GOVERNMENT OF NAGLAND</b></p>
          <p><b style="font-size:20px !important;">OFFICE OF THE DEPUTY COMMISSIONER</b></p>
          <p><b style="font-size:20px !important;">{{ $data->district}} : NAGALAND</b></p>
        </div><br><br>
        <div class="col-md-12" style="font-size:14px;">
          <b>Case No:</b> {{ $data->txn_id }} &amp; <b>Year - </b>{{ Carbon\Carbon::parse($data->updated_at)->format('Y') }}
          <div style="float:right;">
            Dated {{ $data->district }} , the {{ Carbon\Carbon::now()->format('d M Y') }}
          </div>
        </div>

        <div class="col-md-12">
          <p style="font-size:12px;"><b>The Applicant / Licensee :</b> {{ $data->rowUser->name}}  </p>
          <p style="font-size:12px;"><b>Address: </b>{{ $data->rowUser->so_address }}, {{ $data->rowUser->so_district }}, {{ $data->rowUser->so_state }}, {{ $data->rowUser->so_pin }}</p>
        </div>

        <div class="col-md-12">
          <p> <b style="font-size:12px;">Sub:- &nbsp;&nbsp;&nbsp; Grant of permission for erection, installation or establishment of above ground Telegraph/Telecom infrastructure &nbsp;&nbsp;&nbsp;&nbsp;under Rule 9 of Telegraph Right of Way Rule 2016 and order made there-under</b> </p>
        </div>

        <div class="col-md-12">
          <ol style="font-size:12px;">
            <li> The above applicant/licensee has applied to accord permission for erection, installation or establishment of aboveground Telegraph/Telecom infrastructure under Rule 9 of Telegraph Right of Way Rule 2016 read with Para 6 of these guidelines Dated 2<sup>nd</sup> December 2019 issued by Deputy Commissioner, Government of Nagaland.   The permission has been applied on the land or building mentioned below.
              <p>
                <table class="table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="font-size:12px;">Details of location (Name of village, city, ward no. Street name, road name etc.)</th>
                      <th style="font-size:12px;">Details of Plot No./ Building/land/structure</th>
                      <th style="font-size:12px;">Area in Sq. Mt</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="font-size:12px;">
                      <td>{{ $data->location }}, ({{$data->rowTower->tower_lat}}, {{$data->rowTower->tower_long}} )</td>
                      <td>
                        @if($data->tower_type == "RTT")
                        Roof Top Tower
                        @else
                        Ground Based Tower
                        @endif
                      </td>
                      <td>{{ $data->rowTower->tower_area }}</td>
                    </tr>
                  </tbody>
                </table>
              </p><br><br>

            </li>
            <li>That, I have examined the application and documents/statements submitted by the applicant/licensee.  I have examined the reports received from Local/State Government Authorities and field agencies. I am of the opinion that the desired permission is consonance with provisions of above mentioned Rules and guidelines.</li>
            <li>Therefore, I hereby grant the permission for erection, installation or establishment of following Telegraph/Telecom infrastructure on the land or building herein above mentioned.
              <p>
                <table class="table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="font-size:12px;">Sl. No</th>
                      <th style="font-size:12px;">Item</th>
                      <th style="font-size:12px;">Details (to be mentioned by the District Nodal Officer)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="font-size:12px">
                      <td>1</td>
                      <td>The nature and location including exact latitude and longitude of the post/tower or other aboveground contrivances which are to be established</td>
                      <td>
                        @if($data->tower_type == "RTT")
                          Roof Top Tower, ({{$data->rowTower->tower_lat}}, {{$data->rowTower->tower_long}} )
                        @else
                          Ground Based Tower, ({{$data->rowTower->tower_lat}}, {{$data->rowTower->tower_long}} )
                        @endif
                      </td>
                    </tr>
                    <tr style="font-size:12px">
                      <td>2</td>
                      <td>The  extent  of  land  required  for  establishment  of  the aboveground Telegraph/Telecom infrastructure</td>
                      <td>{{ $data->rowTower->tower_area }}</td>
                    </tr>
                    <tr style="font-size:12px">
                      <td>3</td>
                      <td>The details of building or structure where the aboveground Telegraph/Telecom infrastructure is to be established.</td>
                      <td>{{ $data->location }}</td>
                    </tr>
                    <tr style="font-size:12px">
                      <td>4</td>
                      <td>The mode of and time duration for, execution of work.</td>
                      <td>{{ $data->rowTower->work_mode }}</td>
                    </tr>
                    <tr style="font-size:12px">
                      <td>5</td>
                      <td>In	case	of	micro	cells/Wi-Fi	points	on	street lights/poles/bus shelters/ govt. building.. Give details</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </p> <br><br>

            </li>

            <li>(4)	The permission is granted on following terms and conditions :-
              <ul>
                <li>(i)	The Radiation norms fixed by DoT have to be strictly followed by the licensee. Any citizen can approach the TERM Cell with regard to grievance on any issue relating to radiation.</li>
                <li>(ii)	Sign boards and Warning Signs ("Danger", "Warning", "Caution", etc.) as per guidelines of DoT shall be provided at towers and antenna sites which are clearly visible and identifiable.</li>
                <li>(iii)	The licensee shall be permitted to erect/install Telegraph/Telecom infrastructure on open land including private/Govt lands, lands and buildings of Government or Government owned/controlled Statutory or Non-Statutory institutions/bodies or at other public/private locations including roads, parks, playgrounds, schools, colleges, land earmarked for public utilities.</li>
                <li>(iv)	In the walled city area or in the area of Heritage importance the Pole/Mast shall be designed keeping in view the Heritage character of the area.</li>
                <li>(v)	Installation of infrastructure shall not be permitted on right of way.</li>
                <li>(vi)	The licensee shall be granted permission to install micro cells/Wi-Fi access points and other required services on street light poles/bus shelters/government buildings.</li>
                <li>(vii)	The licensee shall fix the equipment’s which cause minimum noise and environmental pollution for power back-up in the earmarked boundary adjacent to mobile tower/post.</li>
                <li>(viii)	The structural stability of the towers/posts and building in which it is erected, shall be ensured by the licensee and the towers/posts and their foundations shall be designed accordingly. He shall be solely responsible for any mishap, if it takes during or after erection of towers</li>
              </ul>
            </li>

            <li>This permission shall be valid from this date up-to the period of license granted to the licensee by DoT <b>(i.e. dated {{ Carbon\Carbon::parse($data->rowUser->dot_reg_expiry)->format('d-m-Y') }})</b>.
              <p>The permission is granted on this date <b> {{ Carbon\Carbon::now()->format('d-m-Y') }} </b> under signature and seal of the undersigned.</p>
            </li>

            </ol>
          </div>
          <div class="col-md-12" style="margin-right:20px;">
            <br><br><br><br><br><br>
            <div style="text-align:center;float:right;font-size:14px;line-height:10px;">
              <p>-----------------------------</p>
              <p><b>Name, Signature & Seal </b></p>
              <p><b>Deputy Commissioner<b></p>
              <p> {{ $data->district }} : Nagaland</p>
            </div>
          </div>

          </div>
        </div>

  </body>
</html>
