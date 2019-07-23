@extends('layout.master')

@section('title')
    Admin page
@endsection

<div>
    @section('table_name')
        Admin
    @endsection
</div>

@section('table')
    <table border=1>
        <thead>
            <th>ID</th>
            <th>Name</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tuan</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Anh</td>
            </tr>
        </tbody>
    </table>
@endsection
