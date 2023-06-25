@extends('templates.default')
@php
    $title = 'Student';
    $preTitle = 'Form Create';
@endphp

@section('content')
<div class="row">
    <div class="col-12">

        <form class="card" action="{{ route('students.store') }}" method="POST">
            @csrf
            <!-- <div class="card-header">
                <h3 class="card-title">Basic form</h3>
            </div> -->
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name</label>
                    <div>
                        <input type="text" class="form-control" name="name" id="name">
                        <!-- <small class="form-hint">We'll never share your email with anyone else.</small> -->
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Address</label>
                    <div>
                        <input type="text" class="form-control" name="address" id="address">
                        <!-- <small class="form-hint">We'll never share your email with anyone else.</small> -->
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Phone</label>
                    <div>
                        <input type="text" class="form-control" name="phone_number" id="phone_number">
                        <!-- <small class="form-hint">We'll never share your email with anyone else.</small> -->
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Class</label>
                    <div>
                        <input type="text" class="form-control" name="class" id="class">
                        <!-- <small class="form-hint">We'll never share your email with anyone else.</small> -->
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>
@endsection