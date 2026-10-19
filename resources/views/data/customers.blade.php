<div class="container mt-4">
    <h3>Customers</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Sales</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $customer)
            <tr>
                <td>{{ $customer->customer_id }}</td>
                <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <ul class="mb-0">
                        @foreach($customer->sales as $sale)
                        <li>{{ $sale->item->item }} - {{ $sale->date_of_purchase }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>