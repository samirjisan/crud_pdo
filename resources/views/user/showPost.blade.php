<html>

<body>
@extends('layouts.master')
@section('learn')
    <div class="container">
        <h1>Users Posts</h1>



        <table border="2px">
            <tr>

                <th>Name</th>
                <th>Post</th>

            </tr>

            @foreach($posts as $post)
                <tr>

                    <td>{{ $post->name }}</td>
                    <td>{{ $post->post }}</td>
                </tr>
                {{--<p style="background-color: darkgoldenrod;color: white;"> {{ $post->name }} :->  {{ $post->post }}</p>--}}
            @endforeach


        </table>
    </div>
    {{ $posts->links() }}
@endsection
</body>
</html>