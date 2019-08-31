<html>
<title>

</title>

<body>

<h3>User Registration From</h3>
@include('errors.error')

<form action="{{route('user.register')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="User Name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <input type="file" name="image" accept="image/jpeg"><br>
    <input type="radio" name="gender" >Male
    <input type="radio" name="gender" >Female
    <input type="radio" name="gender" >Other <br>

    <input type="submit" name="submit" value="Register">
</form>

</body>
</html>