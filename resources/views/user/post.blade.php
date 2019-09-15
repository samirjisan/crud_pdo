<html>

<body>

@extends('layouts.master')

@section('learn')
    <h2>Submit Post</h2>

    @if(session('postSuccess'))
        <p style="color: blue">{{session('postSuccess')}}</p>
    @endif

<form action="{{ route('user.post') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name"><br>
    <input type="text" name="post"><br>
    <input type="submit" name="submit" value="Make A Post">
</form>

{{--<hr>--}}
{{--<hr>--}}
{{--@foreach($posts as $post)--}}
    {{--<p style="background-color: darkgoldenrod;color: white;"> {{ $post->name }} :->  {{ $post->post }}</p>--}}
{{--@endforeach--}}

{{--{{ $posts->links() }}--}}

@endsection



</body>

</html>