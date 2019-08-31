<html>
<body>
<h1>Users Information</h1>

@if(session('deletedSuccess'))
    <p style="color: red">{{session('deletedSuccess')}}</p>
@endif

<table border="1px">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Image</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td><img src="{{ asset('image/'.$user->image) }}" alt="no picture" width="100px"></td>
            <td>{{ $user->gender }}</td>
            <td><a href="{{ Route('user.edit',[$user->id]) }}">edit</a>||<a href="{{ Route('user.delete',[$user->id]) }}">delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>