<html>


<body>

@extends('layouts.master')

@section('learn')
    <H2 style="text-align: center; color: green">Please register for sign up</H2>
@include('errors.error')
    @include('layouts.home.regBody')




<form action="{{route('user.register')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <br>
    <label>User Name:</label><br>
    <input type="text" name="username" placeholder="User Name"><br>
    <label>Email:</label><br>
    <input type="text" name="email" placeholder="Email"><br>
    <label>Password:</label><br>
    <input type="password" name="password" placeholder="Password"><br>
    <label>Confirm Password:</label><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <label>Image:</label>
    <input type="file" name="image" accept="image/jpeg"><br>
    <label>Gender:</label>
    <input type="radio" name="gender" >Male
    <input type="radio" name="gender" >Female
    <input type="radio" name="gender" >Other <br>

    <input type="submit" name="submit" value="Register">
</form>



@endsection

</body>
</html>