<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>

    @include('navbar')
    <div class="container">
        <form action="{{ route('create') }}" method="get" class="my-5">
            <button class=" btn btn-primary" type="submit">Create post</button>
        </form>
        <table class="table table-striped text-center w-75 mx-auto my-5">
            <thead>
                <tr>
                    <td class="fw-semibold fs-5">ID</td>
                    <td class="fw-semibold fs-5">Title</td>
                    <td class="fw-semibold fs-5">Created by</td>
                    <td class="fw-semibold fs-5">Created at</td>
                    <td class="fw-semibold fs-5">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user_id }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <button class="btn btn-primary"><a class="text-white text-decoration-none"
                                    href="{{ route('view', ['id' => $post->id]) }}">View</a></button>

                            <form action="{{ route('edit', $post->id) }}" method="" class="d-inline">
                                @csrf()
                                <button class=" btn btn-success" type="submit">Edit</button>
                            </form>
                            <form action="{{ route('delete', $post->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf()
                                <button class=" btn btn-danger" type="submit">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$posts->links()}}

    </div>

    </div>
</body>

</html>
