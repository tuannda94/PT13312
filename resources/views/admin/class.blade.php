@extends('admin.master')

@section('title', 'Class page')

@section('content')
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Major</th>
        </thead>
    </table>

    @include('admin.class_detail')
@endsection
