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
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('admin.class_detail')
@endsection
