<nav>
  <ul class="nav nav-pills" id="mainNav">
    <li class="">
        <a class="nav-link" href="{{route('dashboard')}}">
            Dashboard
        </a>
    </li>

    <li class="dropdown dropdown-mega">
        <a class="nav-link dropdown-toggle" href="#">Services</a>
        @if(!Session::has('profile_incomplete'))
        <ul class="dropdown-menu">
            <li>
                <div class="dropdown-mega-content">
                    <div class="row">
                      @foreach($departments_menu as $department)
                        <div class="col-lg-3">
                            <ul class="dropdown-mega-sub-nav">
                                <li>
                                    <b>{{$department->department}}</b>
                                </li>
                                @foreach($services_menu as $service)
              		              @if($service->department == $department->department)
                                <li>
                                  @if($service->status == "Inactive")
                                  <a class="nav-link" href="#">
                                    {{$service->service_name}} (Service Unavailable)
                                  </a>
                                  @else
                                  <a class="nav-link" href="{{url('/')}}/{{$service->link}}">
                                    {{$service->service_name}}
                                  </a>
                                  @endif
                                </li>
                                @endif
              		              @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </li>
        </ul>
        @else
        <ul class="dropdown-menu">
          <li>Please complete profile to access services.</li>
        </ul>
        @endif
    </li>


  </ul>
</nav>
