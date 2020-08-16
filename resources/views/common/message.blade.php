
    {{-- success reminder --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-lable="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Success!</strong>{{ session()->get('success') }}
    </div>
    @endif

    {{-- failed reminder --}}
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss='alert' aria-lable="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ session()->get('error') }}</strong>
    </div>
    @endif