@extends('templates.default')
@php
    $title = 'Student Classes';
    $preTitle = 'All List';
@endphp

@push('page-action')
    <a href="{{ route('student-classes.create') }}" class="btn btn-primary">Add New Student Classes</a>
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
                                <th>Slug</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td><span class="text-muted">{{ $loop->iteration }}</span></td>
                                <td class="text-muted">
                                    <a href="{{ route('student-classes.show', [ 'student_class' => $item->id ]) }}">{{ $item->name }}</a>
                                </td>
                                <td class="text-muted">{{ $item->slug }}</td>
                                <td>
                                    <a href="{{ route('student-classes.edit', ['student_class' => $item->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('student-classes.destroy', ['student_class' => $item->id]) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
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