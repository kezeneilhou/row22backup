@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-xl-6">

    <h4>Large</h4>
    <div class="accordion accordion-lg" id="accordion5">
      <div class="card card-default">
        <div class="card-header">
          <h4 class="card-title m-0">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapse5One">
              Accordion Title 1
            </a>
          </h4>
        </div>
        <div id="collapse5One" class="collapse show" data-parent="#accordion5">
          <div class="card-body">
            <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
            <p>Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
          </div>
        </div>
      </div>
      <div class="card card-default">
        <div class="card-header">
          <h4 class="card-title m-0">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapse5Two">
              Accordion Title 2
            </a>
          </h4>
        </div>
        <div id="collapse5Two" class="collapse" data-parent="#accordion5">
          <div class="card-body">
            <p>Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
          </div>
        </div>
      </div>
      <div class="card card-default">
        <div class="card-header">
          <h4 class="card-title m-0">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapse5Three">
              Accordion Title 3
            </a>
          </h4>
        </div>
        <div id="collapse5Three" class="collapse" data-parent="#accordion5">
          <div class="card-body">
            <p>Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
