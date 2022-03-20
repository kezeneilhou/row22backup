@if(Auth::user()->role == 'Telecom')
<li class="nav-parent">
  <a class="nav-link" href="#">
    <i class="bx bx-file" aria-hidden="true"></i>
    <span>Services</span>
  </a>
  <ul class="nav nav-children">
    <li>
      <a class="nav-link" href="pages-signup.html">
        New Tower Application
      </a>
    </li>
    <li>
      <a class="nav-link" href="pages-signup.html">
        Annual Charges Renewal
      </a>
    </li>
  </ul>
</li>
<hr class="separator" />
@endif
<li>
  <a class="nav-link" href="{{route('pending')}}">
    <span class="float-right badge badge-primary">{{$count['pending']}}</span>
    <i class="bx bx-envelope" aria-hidden="true"></i>
    <span>Pending Application</span>
  </a>
</li>
<li>
  <a class="nav-link" href="{{route('rejected')}}">
    <span class="float-right badge badge-primary">{{$count['rejected']}}</span>
    <i class="bx bx-envelope" aria-hidden="true"></i>
    <span>Rejected Application</span>
  </a>
</li>
<li>
  <a class="nav-link" href="#">
    <span class="float-right badge badge-primary">{{$count['reverted']}}</span>
    <i class="bx bx-envelope" aria-hidden="true"></i>
    <span>Reverted Application</span>
  </a>
</li>
<li>
  <a class="nav-link" href="{{route('approved')}}">
    <span class="float-right badge badge-primary">{{$count['approved']}}</span>
    <i class="bx bx-envelope" aria-hidden="true"></i>
    <span>Approved Application</span>
  </a>
</li>
<li>
  <a class="nav-link" href="{{route('active')}}">
    <span class="float-right badge badge-primary">{{$count['active']}}</span>
    <i class="bx bx-envelope" aria-hidden="true"></i>
    <span>Active Application</span>
  </a>
</li>
