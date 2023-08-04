@extends('templates.default')
@php
$title = 'Student';
$preTitle = 'Form Create';
@endphp

@section('content')
<div class="row">
    <div class="col-12">

        <form class="card" action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name</label>
                    <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}">
                    @error('name')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                    <div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input type="file" class="form-control" @error('photo') is-invalid @enderror name="photo" value="{{ old('photo') }}">
                    @error('photo')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required">Address</label>
                    <input type="text" class="form-control" @error('address') is-invalid @enderror name="address" value="{{ old('address') }}">
                    @error('address')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required">Phone</label>
                    <input type="text" class="form-control" @error('phone_number') is-invalid @enderror name="phone_number" value="{{ old('phone_number') }}">
                    @error('phone_number')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required">Class</label>
                    <input type="text" class="form-control" @error('class') is-invalid @enderror name="class" value="{{ old('class') }}">
                    @error('class')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>
@endsection