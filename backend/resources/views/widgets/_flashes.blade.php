
@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="mb-0">
            {{ Session::get('success') }}
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p class="mb-0">
            {{ Session::get('warning') }}
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if(Session::has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p class="mb-0">
            {{ Session::get('danger') }}
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
