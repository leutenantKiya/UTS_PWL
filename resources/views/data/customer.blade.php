<div class="container mt-4">
    <h3>Customer Detail</h3>
    <table class="table">
        <tr><th>Customer ID</th><td>{{ $data->customer_id }}</td></tr>
        <tr><th>Name</th><td>{{ $data->first_name }} {{ $data->last_name }}</td></tr>
        <tr><th>Email</th><td>{{ $data->email }}</td></tr>
        <tr><th>Sales</th><td>
            <ul>
                @foreach($data->sales as $sale)
                <li>{{ $sale->item->item }} - {{ $sale->date_of_purchase }}</li>
                @endforeach
            </ul>
        </td></tr>
    </table>
    <a href="{{ route('data.customers') }}" class="btn btn-secondary">Back</a>
</div>