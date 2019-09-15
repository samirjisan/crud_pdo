<html>

<body>
@extends('layouts.master')
@section('learn')
    <div class="container">
        <h1>Users Information</h1>

        <table border="1px">
            <tr>


                <th>Id</th>
                <th>Email</th>

            </tr>
            @foreach($admins as $admin)
                <tr>


                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->email }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
</body>
</html>