@extends('admin.master')

@section('title', 'Create New Class')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route(isset($class) ? 'classes.update' : 'classes.create-post')}}" method="post">
        @csrf
        @if(isset($class))
            <input type="hidden" name="id" value="{{$class->id}}">
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                value="{{isset($class) ? $class->name : ''}}"
            />
        </div>
        <div class="form-group">
            <label for="teacher_name">Teacher Name</label>
            <input
                id="teacher_name"
                type="text"
                class="form-control"
                name="teacher_name"
                value="{{isset($class) ? $class->teacher_name : ''}}"
            />
        </div>
        <div class="form-group">
            <select
                name="major"
                class="form-control"
            >
                <option
                    selected="{{isset($class) && $class->major == 'CNTT' ? true : false}}"
                    value="CNTT">Cong nghe thong tin</option>
                <option
                    selected="{{isset($class) && $class->major == 'DPT'}}"
                    value="DPT">Da phuong tien</option>
                <option
                    selected="{{isset($class) && $class->major == 'MKT'}}"
                    value="MKT">Marketing</option>
                <option
                    selected="{{isset($class) && $class->major == 'UD'}}"
                    value="UD">Ung dung</option>
            </select>
        </div>
        <div class="form-group">
            <label for="max_student">Max Student</label>
            <input
                type="number"
                class="form-control"
                name="max_student"
                id="max_student"
                value="{{isset($class) ? $class->max_student : ''}}"
            />
        </div>
        <div>
            <button
                type="submit"
                class="btn btn-submit"
            >
                Create Class
            </button>
        </div>
    </form>
@endsection
