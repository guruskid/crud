<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Crud Post</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <h1>All Post</h1>
        @foreach($posts as $post)
        <div class="card mt-2">
            <div class="card-border">
                <h2><a href="{{route('posts.show', $post -> id)}}">{{$post -> title}}</a></h2>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>