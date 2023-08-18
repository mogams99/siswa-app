@extends('templates.default')
@php
$title = 'Student Classes';
$preTitle = 'Edit Form';
@endphp

@section('content')
<div class="row">
    <div class="col-12">

        <form class="card" action="{{ route('student-classes.update', ['student_class' => $student_class->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name Class</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $student_class->name }}" @error('name') is-invalid @enderror>
                    @error('name')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') ?? $student_class->slug }}" @error('slug') is-invalid @enderror>
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