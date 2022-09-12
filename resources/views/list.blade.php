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
    <div class="table-responsive">
        <table class="table w-100 table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>Frist name</th>
                    <th>last name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->frist_name }}</td>
                        <td>{{ $record->last_name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->address }}</td>
                        <td>{{ $record->phone_number }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <div class="d-flex justify-content-center ">
                                <a href="{{ route('show', $record->id) }}"><button type="button"
                                        class="btn btn-dark ms-3 mt-5">Show form</button></a>
                                <a href="{{ route('edit', $record->id) }}"><button type="button"
                                        class="btn btn-info ms-3 mt-5">Edit form</button></a>
                                <a href="{{ route('delete', $record->id) }}"><button type="button"
                                        class="btn btn-danger ms-3 mt-5">Delete</button></a>
                                <a href="{{ route('back') }}"><button type="button"
                                        class="btn btn-success ms-3 mt-5">back</button></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
