<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark m-5 p-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Image</th>

                <th scope="col">gender</th>
                <th scope="col">Country</th>
                <th scope="col">skill</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>

                    <td><img src="{{ asset('storage/image/' . $item->image) }}" height="100px" width="100px"
                            alt=""></td>

                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->country }}</td>
                    <td><button class="add-skill-btn" data-employee-id="{{ $item->id }}">Add Skill</button></td>

                    <td>

                        <a href="delete/{{ $item->id }}"><button class="btn bg-danger">Delete</button>
                        </a>
                        <a href="edit/{{ $item->id }}"> <button class="btn bg-info">Edit</button></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
