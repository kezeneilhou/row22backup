<div id="side-panel" class="dark">

  <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

  <div class="side-panel-wrap">

    <div class="widget clearfix">

      <h4>SERVICES</h4>

      <nav class="nav-tree mb-0">
        <ul>
          @foreach($departments as $department)
          <li><a href="#"><i class="icon-building"></i>{{$department->department}}</a>
            <ul>
              @foreach($services as $service)
              @if($service->department == $department->department)
                @if($service->status == "Active")
                <li><a href="{{route('login')}}">{{$service->service_name}}</a></li>
                @else
                <li><a href="#" class="service-unavailable">{{$service->service_name}}</a></li>
                @endif
              @endif
              @endforeach
            </ul>
          </li>
          @endforeach

        </ul>
      </nav>

    </div>

    <div class="widget quick-contact-widget form-widget clearfix">

      <h4>For any query:</h4>
      <div style="font-size:14px" class="mb-3">
         <b>Helpdesk (Working Days)</b><br>
        <i class="icon-call m-0"></i> (+91) 8929307387
      </div>
      <div style="font-size:14px">
         <b>Drop an Email</b> <br>
        <i class="icon-email3 m-0"></i> edistrict@nagaland.gov.in
      </div>



    </div>

  </div>

</div>
