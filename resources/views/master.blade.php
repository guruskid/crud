<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"> -->
    <title>Crud Application</title>
</head>

<body>
    <div class="bg-info text-white p-5">
        <div class="container">
        <a href="{{route('posts.index')}}" class="btn btn-primary">Home</a>
        <a href="{{route('posts.create')}}" class="btn btn-secondary">Create Post</a>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        @yield('content')
    </div>

</body>

</html>