<!DOCTYPE html>
<html>
<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>

<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    {{--<li><a href="{{ route('all') }}">Show All Posts</a></li>--}}
    {{--<li><a href="#news">News</a></li>--}}
    {{--<li><a href="#contact">Contact</a></li>--}}




        @if(Auth::guard('admin')->check())
        <li style="float: right"><a href="{{ route('admin.logout') }}">Logout</a></li>
        {{--<li style="float: right"><a href="{{ route('user.showPost') }}">Make admin</a></li>--}}
        {{--<li style="float: right"><a href="{{ route('user.post') }}">Show Posts</a></li>--}}

        @elseif(Auth::check()==false)

            <li style="float: right"><a href="{{ route('user.register') }}">Register</a></li>
            <li style="float: right"><a href="{{ route('user.login') }}">Login</a></li>
            <li><a href="{{ route('admin.signin') }}">Admin</a></li>

    @else

    <li style="float: right"><a href="{{ route('user.logout') }}">( {{ App\User::find(Auth::id())->username }} )Logout</a></li>
        <li style="float: right"><a href="{{ route('user.post') }}">Show Posts</a></li>
        <li style="float: right"><a href="{{ route('user.show') }}">DashBoard</a></li>
        <li><a href="{{ route('user.showPost') }}">Make a post</a></li>
    @endif
</ul>

</body>
</html>
