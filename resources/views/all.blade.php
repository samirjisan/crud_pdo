<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Project</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
@extends('layouts.master')
@section('learn')
    <div class="container">
        <h1>All Users Posts</h1>



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

            @endforeach


        </table>
    </div>
    {{ $posts->links() }}
@endsection
</body>
</html>