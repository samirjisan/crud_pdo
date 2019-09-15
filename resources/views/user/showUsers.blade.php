<html>

<body>
@extends('layouts.master')
@section('learn')
<div class="container">
<h1>Users Information</h1>



@if(session('updateSuccess'))
        <p style="color: greenyellow">{{session('updateSuccess')}}</p>
@endif

@if(session('deleteSuccess'))
    <p style="color: red">{{session('deleteSuccess')}}</p>
@endif

<table border="1px">
    <tr>

        <th>Username</th>
        <th>Email</th>
        <th>Image</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
        <tr>

            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td><img src="{{ asset('image/'.$user->image) }}" alt="no picture" width="100px"></td>
            <td>{{ $user->gender }}</td>
            <td><a href="{{ Route('user.edit',[$user->id]) }}">edit</a>||<a href="{{ Route('user.delete',[$user->id]) }}">delete</a></td>
        </tr>
    @endforeach
</table>
    </div>
@endsection
</body>
</html>