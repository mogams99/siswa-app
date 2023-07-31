@if (session('success'))
<div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
    <div class="flex-fill mr-3">
        {{ session('success') }}
    </div>
    <div class="flex-shrink-0">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
@if (session('info'))
<div class="alert alert-info alert-dismissible d-flex align-items-center" role="alert">
    <div class="flex-fill mr-3">
        {{ session('info') }}
    </div>
    <div class="flex-shrink-0">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
@if (session('danger'))
<div class="alert alert-danger alert-dismissible d-flex align-items-center" role="alert">
    <div class="flex-fill mr-3">
        {{ session('danger') }}
    </div>
    <div class="flex-shrink-0">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif