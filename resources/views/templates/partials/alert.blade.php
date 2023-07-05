@if (session('success'))
<!-- <div class="alert alert-success"> -->
<!-- alert with button close -->
<div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
    <div class="flex-fill mr-3">
        <strong>Success,</strong> {{ session('success') }}
    </div>
    <div class="flex-shrink-0">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif