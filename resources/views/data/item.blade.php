<div class="container mt-4">
    <h3>Item Detail</h3>
    <table class="table">
        <tr><th>Item Code</th><td>{{ $data->item_code }}</td></tr>
        <tr><th>Item</th><td>{{ $data->item }}</td></tr>
        <tr><th>Unit Price</th><td>Rp {{ number_format($data->unit_price) }}</td></tr>
        <tr><th>Company</th><td>{{ $data->company->company_name ?? '-' }}</td></tr>
        <tr><th>Sales Count</th><td>{{ $data->sales->count() }}</td></tr>
    </table>
    <a href="{{ route('data.items') }}" class="btn btn-secondary">Back</a>
</div>