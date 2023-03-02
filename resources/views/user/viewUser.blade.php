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

      <div class="card col-6 my-5 mx-auto">
        <h5 class="card-header">user info</h5>
        <div class="card-body">
          <p class="card-title"><span class="fw-semibold">Name:</span>{{$user->name}}</p>
          <p class="card-text"><span class="fw-semibold">Email:</span>{{$user->email}}</p>
        </div>
      </div>

      @foreach ($user->post as $user )
<div class="card col-6 my-5 mx-auto">
        <h5 class="card-header">post info</h5>
        <div class="card-body">
          <p class="card-title"><span class="fw-semibold">Title:</span>{{$user->title}}</p>
          <p class="card-text"><span class="fw-semibold">Description:</span>{{$user->description}}</p>
        </div>
      </div>
      @endforeach

</body>
</html>

