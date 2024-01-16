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
        <h1>Employee add</h1>
    </center>
    <form action="store_data" class="m-5" method="post" enctype="multipart/form-data">
        {{-- CSRF Protection
        Remember, any HTML forms pointing to POST, PUT, PATCH, or DELETE routes that are defined in the web routes file
        should include a CSRF token field. Otherwise, the request will be rejected. --}}
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        </div>



        <section>
            <label for="">gender</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2"
                    checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
        </section>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Country</label>
            <input type="text" name="country" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
