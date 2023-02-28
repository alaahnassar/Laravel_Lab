<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    @include('navbar')
    <div class="container">
<form action="{{route('update',$post->id)}} " method="POST" class="py-5 col-6 mx-auto">
    @method('PUT')
    @csrf()

    <div class="mb-3">
        <label for="" class="form-label">id</label>
        <input type="text" class="form-control" name="id" value="{{$post->id}}" >
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}" >
    </div>

    <div class="mb-3">
        <label for="" class="form-label">description</label>
        <input type="text" class="form-control" name="description" value="{{$post->description}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">posted by</label>
        <input type="text" class="form-control" name="user_id" value="{{$post->user_id}}">
    </div>
    <button class=" btn btn-primary" type="submit">Update</button>

    </form>
</div>
</body>
</html>
