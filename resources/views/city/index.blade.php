@include('navigation')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>city Management</title>
</head>

<body>
    <form action="{{ url('create-city') }}" method="post">
        @csrf
        @method('post')
        <div class="container mt-5">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Entery city name" />
            </div>
            <label for="country_name" class="form-label">Country Name</label>
            <select class="form-control" name="state_name" id="state_name">
                <option>State Name</option>
                @foreach ($state as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
<div class="container mt-5">
    <table class="table table-dark">

        <tr>
            <th>city Name</th>
            <th>state Id</th>
            <th>Action</th>
        </tr>
        @foreach ($city as $city)
            <tr>
                <td>{{ $city['name'] }}</td>
                <td>{{ $city['state_id'] }}</td>
                <td>
                    <a href="{{ url('city-edit', $city->id) }}" class="btn btn-info btn-sm">EDIT</a>
                    <a href="{{ url('delete', $city->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                </td>
            </tr>
        @endforeach

</html>
