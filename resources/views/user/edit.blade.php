<html>


<body>
@extends('layouts.master')

@section('learn')
<h3>User Edit From</h3>
@include('errors.error')

<form action="{{ route('user.update',[$user->id]) }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="User Name" value="{{ $user-> username }}"><br>
    <input type="text" name="email" placeholder="Email" value="{{ $user-> email }}"><br>
    <input type="file" name="image" accept="image/jpeg"><br>
    <input type="text" name="gender" value="{{ $user-> gender }}">

    <input type="submit" name="submit" value="Update">

@endsection
</form>

</body>
</html>