@extends('templates.default')
@php
    $title = 'Student';
    $preTitle = 'All List';
@endphp

@push('page-action')
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Class</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td><span class="text-muted">{{ $loop->iteration }}</span></td>
                                <td class="text-muted">{{ $item->name }}</td>
                                <td class="text-muted">{{ $item->address }}</td>
                                <td class="text-muted">{{ $item->phone_number }}</td>
                                <td class="text-muted">{{ $item->class }}</td>
                                <td><a href="#">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection