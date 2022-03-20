@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div style="font-size:14px;color:red">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3"  style="font-size:14px;color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
