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

<body class="bg-info">
    <center>
        <h1>Update</h1>
    </center>
    <form action="{{ url('update', $data->id) }}" class="m-5" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input value="{{ $data->name }}" type="text" name="name" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input value="{{ $data->country }}" type="text" name="name" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>



        <section>
            <label for="">gender</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1"
                    {{ $data->gender === 'male' ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2"
                    {{ $data->gender === 'female' ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
        </section>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
