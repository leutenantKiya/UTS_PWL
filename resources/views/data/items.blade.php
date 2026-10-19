<div class="container mt-4">
    <h3>Items</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Item Code</th>
                <th>Item</th>
                <th>Unit Price</th>
                <th>Company</th>
                <th>Sales</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->item_code }}</td>
                <td>{{ $item->item }}</td>
                <td>Rp {{ number_format($item->unit_price) }}</td>
                <td>{{ $item->company->company_name ?? '-' }}</td>
                <td>{{ $item->sales->count() }} transactions</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>