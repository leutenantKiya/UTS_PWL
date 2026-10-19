<div class="container mt-4">
    <h3>Sales</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Purchase #</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Item</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $sale)
            <tr>
                <td>{{ $sale->purchase_number }}</td>
                <td>{{ $sale->date_of_purchase }}</td>
                <td>{{ $sale->customer->first_name }} {{ $sale->customer->last_name }}</td>
                <td>{{ $sale->item->item }}</td>
                <td>{{ $sale->item->company->company_name ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>