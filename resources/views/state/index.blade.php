@include('navigation')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>State Management</title>
</head>

<body>
    <form action="{{ url('create-state') }}" method="post">
        @csrf
        @method('post')
        <div class="container mt-5">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Entery state name" />
            </div>
            <label for="country_name" class="form-label">Country Name</label>
            <select class="form-control" name="country_name" id="country_name">
                <option>Counrty Name</option>
                @foreach ($country as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
<div class="container mt-5">
    <table class="table table-dark">

        <tr>
            <th>state Name</th>
            <th>Country Id</th>
            <th>Action</th>
        </tr>
        @foreach ($state as $state)
            <tr>
                <td>{{ $state['name'] }}</td>
                <td>{{ $state['country_id'] }}</td>
                <td>
                    <a href="{{ url('state-edit', $state->id) }}" class="btn btn-info btn-sm">EDIT</a>
                    <a href="{{ url('delete', $state->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                </td>
            </tr>
        @endforeach

</html>
