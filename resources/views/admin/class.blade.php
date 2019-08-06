@extends('admin.master')

@section('title', 'Class page')

@section('content')
    <table border='1' class='table'>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Teacher Name</th>
            <th>Major</th>
            <th>Max Student</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($classes as $class)
                <tr>
                    <td>{{$class->id}}</td>
                    <td>{{$class->name}}</td>
                    <td>{{$class->teacher_name}}</td>
                    <td>{{$class->major}}</td>
                    <td>{{$class->max_student}}</td>
                    <td>
                        <a href="{{route('classes.edit', $class->id)}}">Update</a>
                        <a href="#">
                            <button type="button" class="btn btn-danger" data-id="{{$class->id}}" data-toggle="modal" data-target="#exampleModal">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Delete</button>
        </div>
        </div>
    </div>
    </div>
    @include('admin.class_detail')
@endsection
