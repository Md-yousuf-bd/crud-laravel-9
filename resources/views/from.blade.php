<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @if (Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mt-5 col-6 m-auto">
            <h1 class="text-info">Personal information</h1>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Frist Name</label>
                <input type="text" name="frist_name" class="form-control" id="formGroupExampleInput"
                    placeholder="Enter your Frist name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="formGroupExampleInput2"
                    placeholder="Enter your last name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput2"
                    placeholder="Enter your last name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="formGroupExampleInput2"
                    placeholder="Enter your last name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Phone number</label>
                <input type="text" name="phone_number" class="form-control" id="formGroupExampleInput2"
                    placeholder="Enter your last name">
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary me-3">Submit</button>
                <a href="{{ route('back') }}" class="btn btn-outline-success waves-effect waves-light">Go
                    Back</a>
            </div>
        </div>
    </form>
</body>

</html>
