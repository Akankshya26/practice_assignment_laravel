@include('navigation')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>City Management</title>
</head>

<body>
    <form action="{{ url('create-country') }}" method="post">
        @csrf
        @method('post')
        <div class="container mt-5">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Enter Country name" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
<div class="container mt-5">
    <table class="table table-dark">

        <tr>
            <th>Country Name</th>
            <th>Action</th>
        </tr>
        @foreach ($country as $country)
            <tr>
                <td>{{ $country['name'] }}</td>
                <td>
                    <a href="{{ url('country-edit', $country->id) }}" class="btn btn-info btn-sm">EDIT</a>
                    <a href="{{ url('delete', $country->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                </td>
            </tr>
        @endforeach

</html>
