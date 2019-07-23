<table border=1>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Teacher Name</th>
        <th>Major</th>
        <th>Max Student</th>
    </thead>
    <tbody>
        @foreach($classes as $key => $value)
            <!-- @if($value->id % 2 == 0)
                <tr style='background: green'>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->teacher_name}}</td>
                    <td>{{$value->major}}</td>
                    <td>{{$value->max_student}}</td>
                </tr>
            @else
                <tr style='background: yellow'>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->teacher_name}}</td>
                    <td>{{$value->major}}</td>
                    <td>{{$value->max_student}}</td>
                </tr>
            @endif -->
            <tr style="background: {{$value->id % 2 ? 'yellow' : 'green'}}">
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->teacher_name}}</td>
                <td>{{$value->major}}</td>
                <td>{{$value->max_student}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
