<div class="mb-4">
    <table class="table table-dark">

        <tr>
            <th>Country Name</th>
        </tr>
        @foreach ($country as $country)
            <tr>
                <td>{{ $country['name'] }}</td>
                {{-- <td>
                    <a href="{{ url('accountedit', $account->id) }}" class="btn btn-info btn-sm">EDIT</a>
                    <a href="{{ url('delete', $account->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                    <a href="{{ url('transaction/' . $account->id) }}" class="btn btn-success btn-sm">Transaction</a>
                    <a href="{{ url('list/' . $account->id) }}" class="btn btn-warning btn-sm">Users</a>

                </td> --}}
            </tr>
        @endforeach
