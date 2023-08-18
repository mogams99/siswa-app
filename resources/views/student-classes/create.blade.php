@extends('templates.default')
@php
$title = 'Student Classes';
$preTitle = 'Form Create';
@endphp

@section('content')
<div class="row">
    <div class="col-12">

        <form class="card" action="{{ route('student-classes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name Class</label>
                    <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}">
                    @error('name')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                    <div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Slug</label>
                    <input type="text" class="form-control" @error('slug') is-invalid @enderror name="slug" value="{{ old('slug') }}">
                    @error('slug')
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