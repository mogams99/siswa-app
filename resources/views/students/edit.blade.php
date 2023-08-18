@extends('templates.default')
@php
$title = 'Student';
$preTitle = 'Edit Form';
@endphp

@section('content')
<div class="row">
    <div class="col-12">

        <form class="card" action="{{ route('students.update', ['student' => $student->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $student->name }}" @error('name') is-invalid @enderror>
                    @error('name')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
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
                    <input type="text" class="form-control" name="address" id="address" value="{{ old('address') ?? $student->address }}" @error('address') is-invalid @enderror>
                    @error('address')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required">Phone</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number') ?? $student->phone_number }}" @error('phone_number') is-invalid @enderror>
                    @error('phone_number')
                    <small class="form-hint text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required">Class</label>
                    <select name="student_class_id" id="student_class_id" class="form-select @error('student_class_id') is-invalid @enderror" value="{{ old('student_class_id') }}">
                        <option value="" disabled>-- Choose Class --</option>
                        @foreach ($classes as $class)
                        <option value="{{ $class->id }}" @selected( $class->id == $student->student_class_id )>
                            {{ $class->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('student_class_id')
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