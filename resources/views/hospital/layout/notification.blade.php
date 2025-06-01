{{-- success notification --}}

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

{{-- delete success notification --}}
@if (session('success_d'))
    <div class="alert alert-danger" role="alert">
        {{ session('success_d') }}
    </div>
@endif

{{-- error notification --}}
@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif


{{-- error handling --}}
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

