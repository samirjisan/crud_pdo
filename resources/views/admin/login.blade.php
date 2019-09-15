<html>


<body>

@extends('layouts.master')
@include('layouts.home.logbody')
@include('errors.error')

@section('learn')

    <H2 style="text-align: center; color: green">Please Login as Admin</H2>

    @if(session('loginRequest'))
        <p style="color: blue">{{session('loginRequest')}}</p>
    @endif


    <form action="{{ route('admin.signin') }}" method="post">
        {{ csrf_field() }}

        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="password">Forgot <a href="#">password?</a></span>
        </div>

        @endsection

    </form>

</body>
</html>