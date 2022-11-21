<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($posts as $post)

        <p style="font-size:2rem;">{{ $post->user_name }}</p>
        <li>
            <a href="{{ route('show', [ 'id' => $post->post_id]) }}"> {{ $post->post_name }}</a>
            <div>{{ $post->post_contents }}</div>
        </li>

    @endforeach
    </ul>
</body>
</html>